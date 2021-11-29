<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//MODELS DE ROLE
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(["name" => "Admin"]);
        $role2 = Role::create(["name" => "Blogger"]);
        $role3 = Role::create(["name" => "Proyectos"]);

        Permission::create(["name" => "admin.home", "description" => "Ver dashboard"])->syncRoles([$role1]);

        Permission::create(["name" => "admin.users.index", "description" => "Administrar usuarios"])->syncRoles([$role1]);

        Permission::create(["name" => "admin.roles.index", "description" => "Administrar roles"])->syncRoles([$role1]);
    
        Permission::create(["name" => "admin.projects.index", "description" => "Administrar proyectos"])->syncRoles([$role1, $role3]);
        
        Permission::create(["name" => "admin.blog.index", "description" => "Administrar blog"])->syncRoles([$role1, $role2]);
    }
}
