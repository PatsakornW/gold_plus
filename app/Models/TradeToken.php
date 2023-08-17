<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TradeToken extends Model
{
    use HasFactory;

    protected $fillable = [
        'uid',
        'lost_credit',
        'earned_token',
    ];
    protected $table = 'trade_token';
}
