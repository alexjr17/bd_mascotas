<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'cliente']);
        $role3 = Role::create(['name' => 'paseador']);
        $role4 = Role::create(['name' => 'resesion']);

        Permission::create(['name' => 'dashboard',
                            'description' => 'ver dasboard'])->syncRoles([$role1, $role2, $role3]);

        //////////////////////////////////
        //mascotas
        //////////////////////////////////

        Permission::create(['name' => 'mascotas.index',
                            'description' => 'listar mascotas'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'mascotas.create',
                            'description' => 'create mascotas'])->syncRoles([$role1, $role2]);
        
        Permission::create(['name' => 'mascotas.edit',
                            'description' => 'editar mascotas'])->syncRoles([$role1, $role2]);
                            
        Permission::create(['name' => 'mascotas.destroy',
                            'description' => 'delete mascotas'])->syncRoles([$role1, $role2]);

        //////////////////////////////////
        //roles
        //////////////////////////////////
        
        Permission::create(['name' => 'roles.index',
                            'description' => 'listar roles'])->syncRoles([$role1, $role4]);

        Permission::create(['name' => 'roles.create',
                            'description' => 'create roles'])->syncRoles([$role1, $role4]);
        
        Permission::create(['name' => 'roles.edit',
                            'description' => 'editar roles'])->syncRoles([$role1, $role4]);
                            
        Permission::create(['name' => 'roles.destroy',
                            'description' => 'delete roles'])->syncRoles([$role1, $role4]);
    }
}
