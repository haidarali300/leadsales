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
        'lead_state_id',
        'stage_id',
        'budget_id',
        'negotiation_id',
        'closing_id',
        'image'
    ];

    public function client()
    {
        return $this->belongsTo(\App\Models\Client::class, 'client_id');
    }

    public function salesman()
    {
        return $this->belongsTo(\App\Models\User::class, 'salesman_id');
    }

    public function supervisor()
    {
        return $this->belongsTo(\App\Models\User::class, 'supervisor_id');
    }

    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class, 'category_id');
    }

    public function origin()
    {
        return $this->belongsTo(\App\Models\Origin::class, 'origin_id');
    }

    public function lead_state()
    {
        return $this->belongsTo(\App\Models\LeadState::class, 'lead_state_id');
    }

    public function stage()
    {
        return $this->belongsTo(\App\Models\Stage::class, 'stage_id');
    }

    public function budget()
    {
        return $this->belongsTo(\App\Models\Budget::class, 'budget_id');
    }

    public function negotiation()
    {
        return $this->belongsTo(\App\Models\Negotiation::class, 'negotiation_id');
    }

    public function closing()
    {
        return $this->belongsTo(\App\Models\Closing::class, 'closing_id');
    }

    public function qualityCriterias()
    {
        return $this->belongsToMany(\App\Models\QualityCriteria::class, 'lead_quality_criteria')->withPivot('rate');
    }
}
