<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
  use HasFactory;

  protected $fillable = ["name", "slug"];

  public function threads(): HasMany
  {
    return $this->hasMany(Thread::class);
  }

  public function createdAt(): string
  {
    return $this->created_at->format("d/m/y");
  }
}
