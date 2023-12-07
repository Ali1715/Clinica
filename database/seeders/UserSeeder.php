<?php

namespace Database\Seeders;

use App\Models\Administrativo;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id'=>1,
            'name' => 'admin',
            'email' => 'testapp1715@gmail.com',
            'password' => 'admin',
        ])->assignRole('Administrador');
        Administrativo::create([
            'usuario_id' => 1,
            'cargo' => 'Administrador',
        ]);
    }
}
