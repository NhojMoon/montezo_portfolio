<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Educations extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_year',
        'educational_stage',
        'school_name',
        'school_description'
    ];
}
