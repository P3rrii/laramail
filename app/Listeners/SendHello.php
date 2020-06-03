<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendHello implements ShouldQueue
{
    
    public function __construct(){
        
    }

    
    public function handle(UserRegistered $event){
        $user = $event->user;
        $user->greet = 'Hello';
        $user->save();
    }
}
