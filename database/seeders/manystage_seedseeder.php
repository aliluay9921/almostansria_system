<?php

namespace Database\Seeders;

use App\Models\branch_stage;
use Illuminate\Database\Seeder;

class manystage_seedseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        branch_stage::create([
            'stage_id' => 3,
            'branch_id' => 1
        ]);
        branch_stage::create([
            'stage_id' => 3,
            'branch_id' => 2
        ]);
        branch_stage::create([
            'stage_id' => 4,
            'branch_id' => 1
        ]);
        branch_stage::create([
            'stage_id' => 4,
            'branch_id' => 2
        ]);
    }
}