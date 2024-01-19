<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['comment_id', 'user_name', 'user_email', 'text'];

    public function parentComment()
    {
        return $this->belongsTo(Comment::class, 'comment_id');
    }

    public function replies()
    {
        return $this->hasMany(Comment::class, 'comment_id');
    }
}
