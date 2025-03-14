<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create an admin user
        $admin = new \App\Models\User();
        $admin->name = 'Admin';
        $admin->email = 'clintonace09@gmail.com';
        $admin->password = bcrypt('password');
        $admin->save();

    }
}
