<?php

namespace App\Mail;

use App\Models\Subscriptor;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifyNewSubscriptor extends Mailable
{
  //  use Queueable,
    use SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     public  $subscriptor  ;
    public function __construct(  Subscriptor $subscriptor)
    {
        $this->subscriptor  = $subscriptor ;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.notify_new_subscriptor');
    }
}
