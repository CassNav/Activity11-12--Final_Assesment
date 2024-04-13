<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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
            'name' => 'Cassandra Naveda',
            'email' => 'cassandra@example.com',
            'password' => Hash::make('example1'),
        ]);

        User::create([
            'name' => 'Luis Yader',
            'email' => 'yader@example.com',
            'password' => Hash::make('example2'),
        ]);

        User::create([
            'name' => 'Priscilla Naveda',
            'email' => 'priscilla@example.com',
            'password' => Hash::make('example3'),
        ]);

        User::create([
            'name' => 'Angel Dominguez',
            'email' => 'angel@example.com',
            'password' => Hash::make('example4'),
        ]);
    }
}
