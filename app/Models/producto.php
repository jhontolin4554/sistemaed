<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipodepantalon',
        'tipodecalidad',
        'tipoderopa',
        'color',
        '4',
        '6',
        '8',
        '10',
        '12',
        '14',
        '16',
        '36',
        '38',
        '40',
        '42',
        '44',
        '46',
        '48',
        '50',
        '52',
        '54',
        '56',
        '58',
        '60',
    ];
}
