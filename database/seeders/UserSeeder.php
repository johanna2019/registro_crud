<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([//usa modelo User
            'name' => 'leidy Admin',
            'cedula' => '1016011103',
            'email' => 'johasistems@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ])->assignRole('Admin');

        $user = User::factory()->create([
             'name' => 'leidy johana Usuario',
            'cedula' => '1016011103',
            'email' => 'johasiste@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        $user->assignRole('Usuario');

        $user = User::factory()->create([
            'name' => 'leidy Usuaria',
            'cedula' => '1016011103',
            'email' => 'johasistem@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        $user->assignRole('Usuario');

        User::factory(5)->create();
    }
}
