<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'description',
        'vision_desc',
        'mission_desc',
        'value_desc',
        'photo',
        'meta_description',
        'meta_auth',
        'meta_title',
        'page_title',
    ];
}
