<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Models\Client;
use App\Models\Lead;
use App\Models\LeadState;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    protected $guard_name = 'web';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'client_id', 'api_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function leads()
    {
        return $this->hasMany(Lead::class, 'salesman_id', 'id');
    }

    public function getLeadAssignedAttribute()
    {
        return Lead::where('salesman_id', $this->id)
                   ->count();
    }

    public function getLeadActiveAttribute()
    {
        return Lead::where('salesman_id', $this->id)
                   ->where('lead_state_id', LeadState::where('name', 'Active')->first()->id)
                   ->count();
    }

    public function getLeadClosedAttribute()
    {
        return Lead::where('salesman_id', $this->id)
                   ->where('lead_state_id', LeadState::where('name', 'Closed')->first()->id)
                   ->count();
    }

    public function getLeadLostAttribute()
    {
        return Lead::where('salesman_id', $this->id)
                   ->where('lead_state_id', LeadState::where('name', 'Lost')->first()->id)
                   ->count();
    }
}
