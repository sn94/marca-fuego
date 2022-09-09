<?php

namespace App\Http\Controllers;

use App\Actions\NotifyNewContact as ActionsNotifyNewContact;
use App\Actions\NotifyNewSubscriptor as ActionsNotifyNewSubscriptor;
use App\Http\Requests\ContactRequest;
use App\Mail\NotifyNewContact;
use App\Mail\NotifyNewSubscriptor;
use App\Models\Contact;
use App\Models\Subscriptor;
use App\Models\User;
use App\Notifications\NewSubscriptorNotification;
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


    public function create_public()
    {

        return view('client.pages.PrimerContacto.Welcome_desktop');
    }

    public function register(ContactRequest $request)
    {
        $contact = Contact::where('email', $request->email)->first();
 
        if ($request->switch == 'registered') {

          
            if ( ! $contact)
            return redirect()->route('hello')->with('error', 'ESTE EMAIL AUN NO HA SIDO REGISTRADO');
             else {  
                if ($request->has('subscription')) {

                
                    $data = [
                        'email' => $request->email,
                        'contact_id' =>  optional($contact)->id
                    ];
    
                    $newsubscriptor =   Subscriptor::create($data);
    
                    new  ActionsNotifyNewSubscriptor($newsubscriptor);
                 
                } 
                return redirect(route('home')  )->with('success', '¡Hola '.( $contact->fullname) .'!');
                
            }

          
        } else {
            $newcontact =   Contact::create($request->input());
            //send email

            new ActionsNotifyNewContact($newcontact);
        }

        $request->session()->put('guest_email', $request->email);

        return redirect(route('home') . '#header')->with('success', '¡GRACIAS POR TU INTERÉS!');
    }





    public function showFormDeRegistrado()
    {
        return view('client.pages.PrimerContacto.RegistradoForm');
    }
    public function showFormDeNoRegistrado()
    {
        return view('client.pages.PrimerContacto.NoRegistradoForm');
    }
}
