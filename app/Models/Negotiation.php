<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Negotiation extends Model
{
    protected $table = 'negotiations';

    protected $fillable = [
        'number',
        'description',
        'image'
    ];
}
