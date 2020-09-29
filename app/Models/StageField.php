<?php

namespace App\Models;

use App\Models\Stage;
use Illuminate\Database\Eloquent\Model;

class StageField extends Model
{
    protected $table = 'stage_fields';

    protected $fillable = [
        'stage_id',
        'name',
        'type'
    ];

    public function stage()
    {
        return $this->belongsTo(Stage::class, 'stage_id');
    }
}
