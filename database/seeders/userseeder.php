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
            'name'    => 'علي لؤي خلف ',
            'email'   => 'ali@gmail.com',
            'password' => bcrypt('11111111'),
            'role'    => 1
        ]);
        User::create([
            'name'    => 'يوسف ',
            'email'   => 'yousuf@gmail.com',
            'password' => bcrypt('11111111'),
            'role'    => 2
        ]);
    }
}