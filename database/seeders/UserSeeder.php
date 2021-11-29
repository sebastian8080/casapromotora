<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Administrador",
            "email" => "admin@ccpromotora.com",
            "password" => bcrypt("CcPromotora2021*")
        ])->assignRole("Admin");
    }
}
