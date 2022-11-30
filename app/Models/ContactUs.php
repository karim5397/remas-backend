<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;
    protected $fillable=[
        'head_phone',
        'head_email',
        'head_address',
        'head_openinig_time',
        'branch_phone',
        'branch_email',
        'branch_address',
        'branch_opening_time',
    ];
}
