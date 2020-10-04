<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Closing extends Model
{
    protected $table = 'closings';

    protected $fillable = [
        'invoice_number',
        'guide_number',
        'invoice_image',
        'guide_image'
    ];
}
