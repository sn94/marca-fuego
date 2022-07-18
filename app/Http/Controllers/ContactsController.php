<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\NotifyNewContact;
use App\Mail\NotifyNewSubscriptor;
use App\Models\Contact;
use App\Models\Subscriptor;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{



    public  function  index()
    {


        $orderby = request()->query('orderby', 'created_at');
        $orderdir =  request()->query('orderdir', 'desc');

        $contacts = Contact::orderBy($orderby,   $orderdir)
            ->paginate(6);

        $contacts->appends(['orderby' => $orderby,   'orderdir' => $orderdir]);
        return view('admin.contacts.index',  compact('contacts'));
    }


    public function show(Contact  $contact)
    {

        return view('admin.contacts.show',  compact('contact'));
    }

    public function create()
    {

        return view('admin.contacts.create');
    }


    public function store(ContactRequest $request)
    {
        $newcontact =   Contact::create($request->input());
        return redirect(route('contactos'))->with('success', '¡HAS AGREGADO UN CONTACTO NUEVO!');
    }

    public function register(ContactRequest $request)
    {



        $newcontact =   Contact::create($request->input());


        //send email

        $admins  =    User::where('role', 'admin')->get();
        foreach ($admins  as  $adminuser) {
            try {
                Mail::to($adminuser)->send(new NotifyNewContact($newcontact));
            } catch (Exception  $e) {
                //No se pudo enviar
                Log::debug($e->getMessage());
            }
        }

        return redirect(route('home') . '#header')->with('success', '¡GRACIAS POR TU INTERÉS!');
    }

   
}
