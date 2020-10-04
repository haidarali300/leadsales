<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QualityCriteria extends Model
{
    protected $table = 'quality_criterias';

    protected $fillable = [
        'active',
        'name'
    ];
}
