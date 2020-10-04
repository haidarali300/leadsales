<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeadState extends Model
{
    protected $table = 'lead_states';

    protected $fillable = [
        'name',
        'description'
    ];
}
