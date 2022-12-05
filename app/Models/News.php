<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'description',
        'date',
        'status',
        'photo',
        'photo_alt',
        'meta_description',
        'meta_auth',
        'meta_title',
        'page_title',
    ];
}
