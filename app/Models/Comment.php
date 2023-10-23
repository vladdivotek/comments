<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['comment_id', 'name', 'email', 'link', 'text'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function subComments()
    {
        return $this->hasMany(Comment::class)->with('comments');
    }

    public function parentComment()
    {
        return $this->belongsTo(Comment::class, 'comment_id');
    }
}
