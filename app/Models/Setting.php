<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable=[
        'page_title',
        'meta_description',
        'meta_auth',
        'meta_title',
        'news_page_title',
        'news_meta_description',
        'news_meta_auth',
        'news_meta_title',
        'projects_page_title',
        'projects_meta_description',
        'projects_meta_auth',
        'projects_meta_title',
        'videos_page_title',
        'videos_meta_description',
        'videos_meta_auth',
        'videos_meta_title',
        'logo',
        'favicon',
        'facebook_url',
        'linkedin_url',
    ];
}
