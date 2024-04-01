<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            [
                'name' => 'Arya Rachman',
                'username' => 'Arya',
                'email' => 'arya@gmail.com',
                'password' => bcrypt('password'),
                'role_id' => 2,
            ],
            [
                'name' => 'Jeflik aman',
                'username' => 'Jetlek',
                'email' => 'jeffrymalik@gmail.com',
                'password' => bcrypt('password'),
                'role_id' => 1,
            ]
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item['name'],
                'username' => $item['username'],
                'email' => $item['email'],
                'password' => $item['password'],
                'role_id' => $item['role_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
