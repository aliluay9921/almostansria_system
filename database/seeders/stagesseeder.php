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
            'name' => 'first'
        ]);
        stage::Create([
            'name' => 'seconde'
        ]);
        stage::Create([
            'name' => 'third_CS'
        ]);
        stage::Create([
            'name' => 'third_IT'
        ]);
        stage::Create([
            'name' => 'fourth_CS'
        ]);
        stage::Create([
            'name' => 'fourth_IT'
        ]);
    }
}