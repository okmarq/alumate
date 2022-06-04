<?php

namespace App\Observers;

use App\User;

class UserObserver
{
    /**
     * Handle the user "creating" event.
     *
     * @param  \App\User $user
     * @return void
     * @throws \Exception
     */
    public function creating(User $user)
    {
        $user->api_token = unique_api_token();
    }
}
