<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Xentixar\FilamentComment\Contracts\Commentable;
use Xentixar\FilamentComment\Models\Traits\HasFilamentComments;

class Post extends Model implements Commentable
{
    use HasFilamentComments;
    protected $fillable = ['title', 'content', 'image', 'description'];
}
