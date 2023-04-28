<?php

namespace App\Listeners;

use Illuminate\Support\Str;
use Illuminate\Auth\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Notification;

class SendEmailVerification implements ShouldQueue
{
    use InteractsWithQueue;
    /**
     * Create the event listener.
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     */
    public function handle(Registered $event): void
    {
        $code = Str::random(6);
        Cache::put("{$event->user->id}-email-code", $code, now()->addMinutes(10));
        Notification::send($event->user, new \App\Notifications\EmailVerification($code));
    }
}
