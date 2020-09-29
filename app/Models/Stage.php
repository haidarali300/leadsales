<?php

namespace App\Models;

use App\Models\StageField;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    protected $table = 'stages';

    protected $fillable = [
        'active',
        'required',
        'order',
        'name'
    ];

    public function fields()
    {
        return $this->hasMany(StageField::class, 'stage_id');
    }
}
