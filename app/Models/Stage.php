<?php

namespace App\Models;

use App\Models\StageField;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    protected $table = 'stages';

    protected $fillable = [
        'name'
    ];
    
}
