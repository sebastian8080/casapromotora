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

        Permission::create(["name" => "admin.home"])->syncRoles([$role1]);

        Permission::create(["name" => "admin.users.index"])->syncRoles([$role1]);
        // Permission::create(["name" => "admin.users.create"])->syncRoles([$role1]);
        // Permission::create(["name" => "admin.users.edit"])->syncRoles([$role1]);
    
        Permission::create(["name" => "admin.projects.index"])->syncRoles([$role1, $role3]);
        // Permission::create(["name" => "admin.projects.create"])->syncRoles([$role1, $role3]);
        // Permission::create(["name" => "admin.projects.edit"])->syncRoles([$role1, $role3]);
        // Permission::create(["name" => "admin.projects.destroy"])->syncRoles([$role1, $role3]);
        
        Permission::create(["name" => "admin.blog.index"])->syncRoles([$role1, $role2]);
        // Permission::create(["name" => "admin.blog.create"])->syncRoles([$role1, $role2]);
        // Permission::create(["name" => "admin.blog.edit"])->syncRoles([$role1, $role2]);
        // Permission::create(["name" => "admin.blog.destroy"])->syncRoles([$role1, $role2]);
    }
}
