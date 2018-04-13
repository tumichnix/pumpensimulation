<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;

class ModelObserverServiceProvider extends ServiceProvider
{
    public function boot()
    {
        User::creating(function (User $user) {
            $user->api_token = str_random(32);
            return true;
        });
    }

    public function register()
    {

    }
}
