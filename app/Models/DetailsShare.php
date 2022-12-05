<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailsShare extends Model
{
    use HasFactory;
    protected $fillable=[
        'instrument_type',
        'par_value',
        'issuances_details',
        'number_shares',
        'financial_year',
    ];
}
