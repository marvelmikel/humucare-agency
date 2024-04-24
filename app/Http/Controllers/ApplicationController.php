<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Mail\AssistanceApplication;
use App\Notifications\SenderNotification;
use Illuminate\Support\Facades\Mail;

class ApplicationController extends Controller
{
    public function index()
    {
        return view('applications');
    }

    public function serviceRequest(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'type' => 'required|string',
        ]);

        // Save the form data to the database
        $application = new Application();
        $application->firstname = $validatedData['firstname'];
        $application->lastname = $validatedData['lastname'];
        $application->email = $validatedData['email'];
        $application->phone = $validatedData['phone'];
        $application->type = $validatedData['type'];
        $application->save();

          // Notify the sender
          $application->notify(new SenderNotification());

   
       
        //Send email notification to the user
        Mail::to('agency@humucarecleaning.co.uk')->send(new AssistanceApplication($application));

        
    
        return redirect()->back()->with('success', 'Request submitted successfully! We will get back to you shortly.');
    }
}
