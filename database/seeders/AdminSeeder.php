<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::truncate();
        // Create an admin user
        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'clintonace09@gmail.com';
        $admin->password = bcrypt('password');
        $admin->save();

    }
}
