<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name'  => 'zayn',
            'email' => 'zayn@gmail.com',
            'password'  => bcrypt('12345678')
        ]);
    }
}
