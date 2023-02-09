<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $roles = Role::select('id', 'name')->orderBy('id', 'ASC')->get()->toArray();
        // $users = [
        //     [
        //         'first_name' => 'Mi',
        //         'last_name' => 'User',
        //         'username' => 'miuser',
        //         'email' => 'mi@gensanfeedmill.com',
        //         'email_verified_at' => now(),
        //         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //         'remember_token' => Str::random(10),
        //     ],
        //     [
        //         'first_name' => 'Mro',
        //         'last_name' => 'User',
        //         'username' => 'mrouser',
        //         'email' => 'mro@gensanfeedmill.com',
        //         'email_verified_at' => now(),
        //         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //         'remember_token' => Str::random(10),
        //     ],
        //     [
        //         'first_name' => 'Dm',
        //         'last_name' => 'User',
        //         'username' => 'dmuser',
        //         'email' => 'dm@gensanfeedmill.com',
        //         'email_verified_at' => now(),
        //         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //         'remember_token' => Str::random(10),
        //     ],
        //     [
        //         'first_name' => 'Fg',
        //         'last_name' => 'User',
        //         'username' => 'fguser',
        //         'email' => 'fg@gensanfeedmill.com',
        //         'email_verified_at' => now(),
        //         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //         'remember_token' => Str::random(10),
        //     ],
        //     [
        //         'first_name' => 'Fa',
        //         'last_name' => 'User',
        //         'username' => 'fauser',
        //         'email' => 'fa@gensanfeedmill.com',
        //         'email_verified_at' => now(),
        //         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //         'remember_token' => Str::random(10),
        //     ],
        //     [
        //         'first_name' => 'Ma',
        //         'last_name' => 'User',
        //         'username' => 'mauser',
        //         'email' => 'ma@gensanfeedmill.com',
        //         'email_verified_at' => now(),
        //         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //         'remember_token' => Str::random(10),
        //     ],
        //     [
        //         'first_name' => 'Mr',
        //         'last_name' => 'User',
        //         'username' => 'mruser',
        //         'email' => 'mr@gensanfeedmill.com',
        //         'email_verified_at' => now(),
        //         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //         'remember_token' => Str::random(10),
        //     ],
        //     [
        //         'first_name' => 'Sc',
        //         'last_name' => 'User',
        //         'username' => 'scuser',
        //         'email' => 'sc@gensanfeedmill.com',
        //         'email_verified_at' => now(),
        //         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //         'remember_token' => Str::random(10),
        //     ],
        // ];

        // foreach($users as $key => $user) {
        //     $newUser = User::create($user);
        //     $newUser->assignRole($roles[$key]['name']);
        // }

        $admin = User::create([
            'first_name' => 'Admin',
            'last_name' => 'User',
            'username' => 'adminuser',
            'email' => 'admin@gensanfeedmill.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        // $epoy = User::create([
        //     'first_name' => 'John Paler',
        //     'last_name' => 'Rodolph',
        //     'username' => 'jrodolph',
        //     'email' => 'rqpaler@gensanfeedmill.com',
        //     'email_verified_at' => now(),
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //     'remember_token' => Str::random(10),
        // ]);
        // $epoy->syncRoles('Corporate Accountant');

        $admin->syncRoles('administrator');
    }
}
