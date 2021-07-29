<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $table = "stores";
    
    protected $fillable = [
        'fantasy_name',
        'cnpj',
        'street',
        'number',
        'district',
        'complement',
        'city',
        'state',
        'cellphone',
        'site',
        'email'
    ];
}
