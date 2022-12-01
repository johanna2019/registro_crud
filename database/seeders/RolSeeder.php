<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          //creamos nuevo registro de roles
          $Role1=Role::create([ 'name'  => 'Admin']);
          $Role2=Role::create([ 'name'  => 'Usuario']);
          Permission::create(['name' => 'roles'])->syncRoles([$Role1]);
          Permission::create(['name' => 'users'])->syncRoles([$Role1,$Role2]);

    }
}
