<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebsiteLoad extends Model
{
    protected $table='website_loads';

    protected $guarded = [
        'id'
    ];

    protected $dates = [
        'date_required'
    ];
}
