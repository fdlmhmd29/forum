<?php

namespace App\Helpers;

trait HasTimestamps
{
  public function createdAt(): string
  {
    return $this->created_at->format("d/m/y");
  }

  public function updatedAt(): string
  {
    return $this->updated_at->format("d/m/y");
  }
}
