<?php

namespace  App\Actions;

use App\Models\Contact;
use App\Models\Subscriptor;
use App\Models\User;
use App\Notifications\NewContactNotification;
use App\Notifications\NewSubscriptorNotification;
use Exception;

class NotifyNewContact {





    public function __construct( Contact $s)
    {

        $admins  =    User::where('role', 'admin')->get();
        foreach ($admins  as  $adminuser) {
            try {
                $adminuser->notify(  new NewContactNotification( $s)  );
                
            } catch ( Exception  $e) { 
            }
        }
    }
}