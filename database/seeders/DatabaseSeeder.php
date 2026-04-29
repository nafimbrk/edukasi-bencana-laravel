<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Pretest;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // 1. Buat 20 User (tanpa username/email_verified_at/remember_token)
        $users = User::factory()->count(20)->create();

        // 2. Buat 1 Admin khusus (opsional, untuk testing fitur admin)
        User::factory()->create([
            'name' => 'Admin Demo',
            'email' => 'admin@demo.com',
            'password' => bcrypt('admin123'),
            'is_admin' => true,
        ]);

        // 3. Buat 1 Pretest untuk setiap user dummy (bukan admin)
        $users->each(fn($user) => Pretest::factory()->create([
            'user_id' => $user->id,
            'nama' => $user->name, // Sesuaikan nama di pretest dengan nama user
        ]));

        $this->command->info('✅ Berhasil generate 20 User + 1 Admin + 20 Pretest!');
        $this->command->info('🔑 Login dummy:');
        $this->command->info('   - User biasa: email random @example.com | password: password123');
        $this->command->info('   - Admin: admin@demo.com | password: admin123');
    }
}