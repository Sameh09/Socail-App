<?php

namespace App\Policies;

use App\Models\Idea;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class IdeaPolicy
{
    use HandlesAuthorization;


 
    public function update(User $user, Idea $idea)
    {
        return $user->is_admin || $user->is($idea->user);
    }

    public function delete(User $user, Idea $idea)
    {
        return $user->is_admin || $user->is($idea->user);
    }



}
