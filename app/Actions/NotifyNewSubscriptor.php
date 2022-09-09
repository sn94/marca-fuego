<?php

namespace  App\Actions;

use App\Models\Subscriptor;
use App\Models\User;
use App\Notifications\NewSubscriptorNotification;
use Exception;

class NotifyNewSubscriptor {





    public function __construct( Subscriptor $s)
    {

        $admins  =    User::where('role', 'admin')->get();
        foreach ($admins  as  $adminuser) {
            try {
                $adminuser->notify(  new NewSubscriptorNotification( $s)  );
                
            } catch ( Exception  $e) { 
            }
        }
    }
}