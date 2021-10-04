<?php

namespace App\Policies;

use App\Models\Thread;
use App\Models\User;

class ThreadPolicy
{
    const UPDATE = 'update';
    const DELETE = 'delete';

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function update(User $user, Thread $thread): bool
    {
        return $thread->isAuthored($user) || $user->isModerator() || $user->isAdmin();
    }

    public function delete(User $user, Thread $thread): bool
    {
        return $thread->isAuthored($user) || $user->isModerator() || $user->isAdmin();
    }
}
