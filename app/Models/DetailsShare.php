<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailsShare extends Model
{
    use HasFactory;
    protected $fillable=[
        'founding_date',
        'followed_law',
        'purpose',
        'company_branches',
        'stock_market_date',
        'version_number',
        'par_value',
        'number_shares',
        'issued_capital',
        'authorized_capital',
        'financial_year',
        'external_auditor',
        'vision_mission',
    ];
}
