<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravolt\Mural\CommentableTrait;
use Laravolt\Mural\Contracts\Commentable;
use Laravolt\Votee\Traits\Voteable;

class Post extends Model implements Commentable
{
    use CommentableTrait, Voteable;

    public function getCommentableTitleAttribute()
    {
        return $this->title;
    }

    public function getCommentablePermalinkAttribute()
    {
        return url('posts/' . $this->id);
    }
}
