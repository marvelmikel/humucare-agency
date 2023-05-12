<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
class ApplicationController extends Controller
{
    //a


    public function index(){


        return view('applications');
    }

    public function processTransaction(Request $request)
    {
       $info = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' =>  'required',
            'type' => 'required',
        ]);
        $details = new Application ();
        $details->fill($info);
        $request->session()->put('details', $details);
        
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();        
        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('successTransaction'),
                "cancel_url" => route('cancelTransaction'),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "GBP",
                        "value" => "5.00"
                    ]
                ]
            ]
        ]);      
        if (isset($response['id']) && $response['id'] != null) {            // redirect to approve href
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }            
            $notify[] = ['error', 'Something went wrong.'];
            return redirect()
                ->route('createTransaction')
                ->withNotify($notify);        } else {

                $notify[] = ['error', $response['message'] ?? 'Something went wrong.'];
            return redirect()
                ->route('createTransaction')
                ->withNotify($notify);
        }
    }    /**
     * success transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function successTransaction(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);        
        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            $status = [
                'trx_status' => $response['status']
            ]; 
            
            $details = $request->session()->get('details');
            $details = fill($status);
            $details->save();
            $request->session()->flush();


            $notify[] = ['success', 'Your payment was successful,please send relevant document to  agency@humucarecleaning.co.uk'];
            return redirect()
                ->route('createTransaction')
                ->withNotify($notify);
        } else {
            $notify[] = ['error', $response['message'] ?? 'Something went wrong.'];
            return redirect()
                ->route('createTransaction')
                ->withNotify($notify);
        }
    }    /**
     * cancel transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function cancelTransaction(Request $request)
    {
        $notify[] = ['error', $response['message'] ?? 'You have canceled the transaction.'];
        return redirect()
        ->route('createTransaction')
        ->withNotify($notify);
    }


    // public function store(Request $request){

    //     dd($request->all());

    //     $notify[] = ['success', 'Your payment was successful,please send relevant document to  agency@humucarecleaning.co.uk'];
    //     return redirect()->back()->withNotify($notify);
    // }
}
