<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\stagesseeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(stagesseeder::class);
        $this->call(userseeder::class);
        $this->call(programseeder::class);
        $this->call(branchseeder::class);
        $this->call(Materialseed::class);

        $this->call(manystage_seedseeder::class);
    }
}