<?php

use App\User;
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
        //
        $admin = User::create([
            'name' => 'Admin Role',
            'email' => 'komar.network@gmail.com',
            'password' => bcrypt('BundaFlorist123!')
        ]);

        $admin->assignRole('admin');

        // User biasa
        $user = User::create([
            'name' => 'User Role',
            'email' => 'user@user.com',
            'password' => bcrypt('123456789')
        ]);

        $user->assignRole('user');
    }
} 
