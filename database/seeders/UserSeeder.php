<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Make sure the User model is imported

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert Admin User with admin@gmail.com and admin123 as the password
        User::updateOrCreate([
            'email' => 'admin@gmail.com',
        ], [
            'name' => 'User',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'), // Hash the password
            'role' => 'user', // Assuming you have roles
            'usertype' => 1, // Assuming you have user types
        ]);
    }
}
