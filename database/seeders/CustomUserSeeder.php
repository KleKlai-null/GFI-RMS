<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CustomUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $deatras_linablanca = User::create([
        //     'first_name' => 'Linablanca',
        //     'last_name' => 'Deatras',
        //     'username' => 'Ldeatras',
        //     'email' => 'lldeatras@gensanfeedmill.com',
        //     'email_verified_at' => now(),
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //     'remember_token' => Str::random(10),
        // ]);

        // $bolio_lezel = User::create([
        //     'first_name' => 'Lezel',
        //     'last_name' => 'Bolio',
        //     'username' => 'Lbolio',
        //     'email' => 'lbolio@gensanfeedmill.com',
        //     'email_verified_at' => now(),
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //     'remember_token' => Str::random(10),
        // ]);

        // $dasmarinas_jan_mariz = User::create([
        //     'first_name' => 'Jan Mariz',
        //     'last_name' => 'Dasmariñas',
        //     'username' => 'Jdasmarinas',
        //     'email' => 'jsdasmarinas@gensanfeedmill.com',
        //     'email_verified_at' => now(),
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //     'remember_token' => Str::random(10),
        // ]);

        // $deatras_linablanca->syncRoles('mi clerk', 'mro clerk', 'fg clerk');
        // $bolio_lezel->syncRoles('fa clerk', 'ma clerk', 'mr clerk');
        // $dasmarinas_jan_mariz->syncRoles('dm clerk');
    }
}
