<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Seeder;

class programseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Program::Create([
            'title' => 'Microsoft Visual Studio',
            'image' => '/image_program/download.png',
            'link'  => 'https://visualstudio.microsoft.com/'
        ]);
        Program::Create([
            'title' => 'Star UML',
            'image' => '/image_program/Star-UML-logo.png',
            'link'  => 'https://staruml.io/download'
        ]);
        Program::Create([
            'title' => ' Microsoft Offic World',
            'image' => '/image_program/unnamed.png',
            'link'  => 'https://microsoft_word.en.downloadastro.com/'
        ]);
    }
}