<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'credit_per_token',
        'token_per_gold',
        'about_address',
        'about_tel',
        'about_email',
        'idbank',
        'namebank',
    ];
}
