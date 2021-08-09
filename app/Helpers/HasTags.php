<?php

namespace App\Helpers;

use App\Models\Tag;

trait HasTags
{
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

  public function tagsRelation(): MorphToMany
  {
    return $this->morphToMany(Tag::class, "taggable")->withTimestamp();
  }
}
