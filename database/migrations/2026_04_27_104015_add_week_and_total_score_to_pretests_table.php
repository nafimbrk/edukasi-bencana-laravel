<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('pretests', function (Blueprint $table) {
            // Kolom week untuk filter mingguan (format: 2026-W18)
            if (!Schema::hasColumn('pretests', 'week')) {
                $table->string('week', 7)->nullable()->after('tanggal');
            }
            
            // Kolom total_score untuk leaderboard
            if (!Schema::hasColumn('pretests', 'total_score')) {
                $table->integer('total_score')->default(0)->after('grade_kesiapsiagaan');
            }
            
            // Index untuk performa query leaderboard
            $table->index(['week', 'total_score'], 'pretests_week_total_score_index');
        });
    }

    public function down()
    {
        Schema::table('pretests', function (Blueprint $table) {
            $table->dropIndex(['week', 'total_score']);
            $table->dropColumn(['week', 'total_score']);
        });
    }
};