<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $table = 'leads';
    
    protected $fillable = [
        'client_id',
        'salesman_id',
        'supervisor_id',
        'category_id',
        'origin_id',
        'description',
        'state'
    ];
}
