<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable=[
        'email', 
        'phone', 
        'footer_desc', 
        'page_title', 
        'meta_description',
        'meta_auth',
        'meta_title',
        'news_page_title',
        'news_meta_description',
        'news_meta_auth',
        'news_meta_title',
        'contact_page_title',
        'contact_meta_description',
        'contact_meta_auth',
        'contact_meta_title',
        'investment_page_title',
        'investment_meta_description',
        'investment_meta_auth',
        'investment_meta_title',
        'logo',
        'favicon',
        'facebook_url',
        'instagram_url',
    ];
}
