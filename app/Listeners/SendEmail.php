<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\Welcome;
use Illuminate\Support\Facades\Mail;

class SendEmail implements ShouldQueue
{

    public function __construct()
    {
        //
    }

    //Handle event - That is send an email.
    public function handle(UserRegistered $event){
        $user = $event->user;
        Mail::to($user)->send(new Welcome);
    }
}
