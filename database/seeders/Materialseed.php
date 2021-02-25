<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Seeder;

class Materialseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Material::create([
            'title' => 'برمجة كيانية',
            'desc' => 'تختص هذه المادة بدراسة الوراثة في البرمجة ',
            'user_id' => 3,
            'stage_id' => 2,
            'program_id' => 1,

        ]);
        Material::create([
            'title' => 'هياكل بيانات ',
            'desc' => 'تختص هذه المادة في بناء البيانات  ',
            'user_id' => 4,
            'stage_id' => 1,
            'program_id' => 3,
            'branch_id' => 1

        ]);

        Material::create([
            'title' => 'حوسبة موبايل ',
            'desc' => 'تختص في تعليم انشاء تطبيقات الموبايل   ',
            'user_id' => 2,
            'stage_id' => 4,
            'program_id' => 4,
            'branch_id' => 1
        ]);
        Material::create([
            'title' => 'تعدين بيانات ',
            'desc' => 'تختص في تعليم التعامل مع البيانات    ',
            'user_id' => 4,
            'stage_id' => 4,
            'program_id' => 1,
            'branch_id' => 2
        ]);
        Material::create([
            'title' => 'استرجاع معلومات  ',
            'desc' => 'التعامل مع خوارزميات استرجاع المعلومات     ',
            'user_id' => 4,
            'stage_id' => 4,
            'program_id' => 1,
            'branch_id' => 1
        ]);
    }
}