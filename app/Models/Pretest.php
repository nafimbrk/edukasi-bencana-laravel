<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pretest extends Model
{
    use HasFactory;
    protected $table = 'pretests';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

     // Accessor: total score = pengetahuan + kesiapsiagaan
    public function getTotalScoreAttribute()
    {
        return ($this->score_pengetahuan ?? 0) + ($this->score_kesiapsiagaan ?? 0);
    }

    public function scopeWeeklyLeaderboard($query, $limit = 10)
{
    // $currentWeek = now()->format('Y-W');

    $currentWeek = '2026-18';
    
    return $query->where('week', $currentWeek)
                ->orderByDesc('total_score')
                ->orderBy('id', 'asc')  // ← YANG SUBMIT DULUAN (id lebih kecil) dapat ranking lebih tinggi
                ->with('user:id,name,email')
                ->limit($limit);
}
}
