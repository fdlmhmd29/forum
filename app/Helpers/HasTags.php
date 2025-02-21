<?php

namespace App\Helpers;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

trait HasTags
{
    public function tagsRelation(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable')->withTimestamps();
    }

    public function tags()
    {
        return $this->tagsRelation;
    }

    public function syncTags(array $tags)
    {
        $this->save();
        $this->tagsRelation()->sync($tags);
        $this->unsetRelation("tagsRelation");
    }

    public function removeTags()
    {
        $this->tagsRelation()->detach();
        $this->unsetRelation('tagsRelation');
    }
}
