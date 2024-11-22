<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        // Hapus 'password' dari hidden
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected $casts = [
        // Hapus casting untuk 'password'
        'email_verified_at' => 'datetime',
    ];

    public function pretests()
    {
        return $this->hasMany(Pretest::class);
    }

    public function absens()
    {
        return $this->hasMany(Absen::class);
    }
    
    public function posttests()
    {
        return $this->hasMany(Pretest::class);
    }
}
