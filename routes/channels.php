<?php

use App\Models\User;
use App\Models\LogApplication;
use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel("log.{app}", function (User $user, LogApplication $app) {
    return $user->id === $app->user->id;
});

// Broadcast::channel('log-broadcast');
