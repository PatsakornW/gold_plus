<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryGold extends Model
{
    use HasFactory;
    protected $fillable = [
        'b_gold_spot',
        's_gold_spot',
        'thb',
        'bid',
        'ask',
        'diff',
    ];
}

