<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['comment_id', 'name', 'email', 'link', 'text'];

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function comments()
    {
        return $this->belongsTo(Comment::class);
    }
}
