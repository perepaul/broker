<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = ['name', 'price'];

    public function features()
    {
        return $this->hasMany(PlanFeatures::class);
    }
}
