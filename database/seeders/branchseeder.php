<?php

namespace Database\Seeders;

use App\Models\branch;
use Illuminate\Database\Seeder;

class branchseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        branch::create([
            'name' => 'CS'
        ]);
        branch::create([
            'name' => 'IT'
        ]);
    }
}