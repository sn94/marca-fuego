<?php

namespace App\Http\Controllers;

use App\Actions\NotifyNewSubscriptor as ActionsNotifyNewSubscriptor;
use App\Mail\NotifyNewSubscriptor;
use App\Models\Contact;
use App\Models\Subscriptor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubscriptorsController extends Controller
{



    public function  index()
    {

        $subscriptors = Subscriptor::paginate(6);
        return view('admin.subscriptors.index', compact('subscriptors'));
    }
    public function subscribe(Request $request)
    {

        $request->validate([
            'email' => 'required_without:phone|email|unique:subscriptors,email',
        ]);

        $contact = Contact::where('email',  $request->email)->first();

        $data = [
            'email' => $request->email,
            'contact_id' =>  optional($contact)->id
        ];

        $newsubscriptor =   Subscriptor::create($data);


        //send email

        new  ActionsNotifyNewSubscriptor($newsubscriptor);


        return redirect(route('home') . '#header')->with('success', '¡GENIAL! YA ESTAS SUSCRIPTO A NUESTRO BOLETIN INFORMATIVO');
    }
}
