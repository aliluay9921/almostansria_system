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
            'image' => 'download.png',
            'link'  => 'https://visualstudio.microsoft.com/'
        ]);
        Program::Create([
            'title' => 'Star UML',
            'image' => 'Star-UML-logo.png',
            'link'  => 'https://staruml.io/download'
        ]);
        Program::Create([
            'title' => ' Microsoft Offic World',
            'image' => 'unnamed.png',
            'link'  => 'https://microsoft_word.en.downloadastro.com/'
        ]);
        Program::Create([
            'title' => 'Eclips',
            'image' => 'images.png',
            'link'  => 'https://www.eclipse.org/downloads/download.php?file=/oomph/epp/2020-12/R/eclipse-inst-jre-win64.exe'
        ]);
        Program::Create([
            'title' => 'Python',
            'image' => 'python.png',
            'link'  => 'https://www.python.org/downloads/'
        ]);
    }
}