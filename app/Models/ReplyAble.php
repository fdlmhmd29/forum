<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphToMany;

interface ReplyAble
{
    public function subject(): string;

    /**
     * @return \App\Models\Reply[]
     */
    public function replies();

    public fuction latestReplies(int $amount = 5);

    public function deleteReplies();

    public function repliesRelation(): MorphToMany;

    public function replyAbleSubject(): string;
}
