<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'    => 'علي لؤي خلف',
            'email'   => 'ali@gmail.com',
            'password' => bcrypt('11111111'),
            'image'    => '111.jpg',
            'role'    => 1,
            'phone'   => 825
        ]);
        User::create([
            'name'    => 'يوسف',
            'email'   => 'yousuf@gmail.com',
            'password' => bcrypt('11111111'),
            'image'    => '1611403346.b.png',
            'role'    => 2,
            'phone'   => 252
        ]);
        User::create([
            'name'    => 'ابراهيم',
            'email'   => 'ibrahim@gmail.com',
            'password' => bcrypt('11111111'),
            'image'    => '1611403346.b.png',
            'role'    => 2,
            'phone'   => 141414
        ]);
        User::create([
            'name'    => 'حسين',
            'email'   => 'hussen@gmail.com',
            'password' => bcrypt('11111111'),
            'image'    => '1611403562.download.png',
            'role'    => 2,
            'phone'   => 252
        ]);
    }
}