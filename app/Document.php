<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = ['user_id','name','image'];
    public function user()
    {
        $this->belongsTo(User::class);
    }
}
