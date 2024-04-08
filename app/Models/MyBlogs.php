<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyBlogs extends Model
{
    use HasFactory;

    protected $fillable = [
        'avatar',
        'caption',
        'date',
        'author',
        'content'
    ];
}
