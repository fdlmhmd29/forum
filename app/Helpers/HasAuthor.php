<?php

namespace App\Helpers;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait HasAuthor
{
    /**
     * Make a relation between User and Author.
     */
    public function authorRelation(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function author(): User
    {
        return $this->authorRelation;
    }

    /**
     * Check if the Author is matches with its User.
     */
    public function isAuthored(User $user): bool
    {
        return $this->author()->matches($user);
    }

    public function authoredBy(User $author)
    {
        $this->authorRelation()->associate($author);
        $this->unsetRelation('authorRelation');
    }
}
