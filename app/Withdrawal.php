<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    protected $casts = [
        'bank_details' => 'object'
    ];
    protected $fillable = ['image','status','reference','method','amount','approved','address','bank_details'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
