<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataVol extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nameAvion', 'typeAvion', 'dateVol', 'durationVol'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string[]
     */
    protected $hidden = [];
}
