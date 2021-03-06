<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deposits extends Model
{
    protected $fillable = ['amount','reference','image','status','approved'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
