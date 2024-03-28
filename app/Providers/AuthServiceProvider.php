<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\User;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{

    protected $policies = [
        //
    ];


    public function boot()
    {
        // $this->registerPolicies();

        Gate::define('update-post', function (User $user, Post $post) {
            return $user->id === $post->user_id;
        });

        Gate::define('delete-post', function (User $user, Post $post) {
            return $user->id === $post->user_id;
        });
       
    }
}
