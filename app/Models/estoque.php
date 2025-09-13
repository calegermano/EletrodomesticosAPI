<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class estoque extends Model
{
    protected $fillable=[
        'nomeprod',
        'marcaprod',
        'descprod',
        'qtdprod',
        'dtentradaprod',
        'dtsaidaprod',
    ];
}
