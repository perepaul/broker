<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname','status', 'email','vissible_password', 'password', 'plan_id', 'currency_id', 'phone', 'balance', 'demo_balance', 'is_admin','image','wallet'
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
        'bank_details' => 'object'
    ];

    public function setPasswordAttribute($value)
    {
        return $this->attributes['password'] = bcrypt($value);
    }
    public function getFullNameAttribute(){
        return "$this->firstname $this->lastname";
    }

    public function getCurrencySymbolAttribute()
    {
        return $this->currency->symbol;
    }
    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function trades()
    {
        return $this->hasMany(Trade::class);
    }

    public function lastFiveTrades()
    {
        return $this->trades()->orderBy('created_at','desc')->limit(5)->get();
    }

    public function deposits()
    {
        return $this->hasMany(Deposits::class);
    }

    public function withdrawals()
    {
        return $this->hasMany(Withdrawal::class);
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }

    public function emails(){
        return $this->hasMany(Email::class);
    }

    public function scopeOfAccepted($query,$value)
    {
        return $this->where('accepted',$value);
    }

}
