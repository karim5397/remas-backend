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
        'photo',
        'photo_alt',
        'mission',
        'vision',
        'meta_description',
        'meta_auth',
        'meta_title',
        'page_title',
    ];
}
