<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    protected $fillable = ['image','status','reference','amount','approved','address'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
