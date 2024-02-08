<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            ['name'=>'Admin','email'=>'admin@gmail.com','password'=>'admin','credit_card'=>"23456789",'address'=>"Adrese User"],
            ['name'=>'User','email'=>'user@gmail.com','password'=>'user','credit_card'=>"23456789",'address'=>"Adrese User"],
        ]);
        
        Role::insert([
            ["name"=>"admin"],
            ["name"=>"user"],
        ]);
        Permission::insert([
            ["name"=>"Home"],
            ["name"=>"Users"],
        ]);
    }
}
