<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Doctor']);
        $role3 = Role::create(['name' => 'Paciente']);

        Permission::create(['name' => 'home'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.roles.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.update'])->syncRoles([$role1]);

  

    }
}
