<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Storage;

class Prize extends Model
{
    protected $fillable = [
        'name', 'description', 'image'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    // Scope: ambil hadiah yang sedang aktif
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Accessor: URL gambar (dengan fallback)
    public function imageUrl(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->image ? Storage::url($this->image) : asset('gambar/no-image.png'),
        );
    }
}