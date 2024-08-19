<?php

namespace App\Http\Controllers;

use App\Mail\ServiceQuoteMail;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;


class MailController extends Controller
{
    public function serviceQuote(Request $req)
    {

        $req->validate([

            'fname'=>'string|max:200|required',
            'lname'=>'string|max:200|required',
            'email'=>'email|required',
        ]);

        $mailer = [

            'first_name' => $req->fname,
            'last_name' => $req->lname,
            'email' => $req->email,

        ];
        $mail = [


            'RequiredServices'=>[$req->fname, $req->lname, $req->email],
            'vacuum_and_mop_floors' => $req->vacuum_and_mop_floors,
            'dust_and_wipe_surfaces' => $req->dust_and_wipe_surfaces,
            'cleaning_and_sanitize_bathrooms' => $req->cleaning_and_sanitize_bathrooms,
            'cleaning_and_sanitize_kitchen' => $req->cleaning_and_sanitize_kitchen,
            'empty_trash_cans_and_replace_liners' => $req->empty_trash_cans_and_replace_liners,
            'cleaning_and_sanitize_bedrooms' => $req->cleaning_and_sanitize_bedrooms,
            'cleaning_and_sanitize_living_room' => $req->cleaning_and_sanitize_living_room,
            'fridge_cleaning' => $req->fridge_cleaning,
            'empty_trash_cans_and_replace_liners' => $req->empty_trash_cans_and_replace_liners,
            'flower_cleaning' => $req->flower_cleaning,
            'private_car_washing' => $req->private_car_washing,
            'dishwashing' => $req->dishwashing,
            'deep_cleaning' => $req->deep_cleaning,
            'house_shopping' => $req->house_shopping,
            'cleaning_and_sanitizing_dining_room' => $req->cleaning_and_sanitizing_dining_room,

        ];


        Mail::to(env('MAIL_USERNAME'))->send(new ServiceQuoteMail($mailer, $mail));

        Alert::success('Sent', 'Quote Sent successfully.');

        return back();


    }
}
