<?php

namespace Database\Seeders;

use App\Models\Stage;
use Illuminate\Database\Seeder;

class stagesseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        stage::Create([
            'name' => 'الاؤلى',
            'image' => '1.jpg'
        ]);
        stage::Create([
            'name' => 'الثانية',
            'image' => '2.jpg'
        ]);
        stage::Create([
            'name' => 'الثالثة',
            'image' => '3.jpg'

        ]);
        stage::Create([
            'name' => 'الرابعة',
            'image' => '4.jpg'

        ]);
    }
}