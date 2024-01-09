<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = 
        [
            [
                'title'=> 'Progetto n1',
                'description'=>'Il mio progetto numero 1 è molto bello',
                'image' => 'https://assets-global.website-files.com/6410ebf8e483b5bb2c86eb27/6410ebf8e483b53d6186fc53_ABM%20College%20Web%20developer%20main.jpg'

            ],
            [
                'title'=> 'Progetto n2',
                'description'=>'Il mio progetto numero 2 è molto bello',
                'image' => 'https://assets-global.website-files.com/6410ebf8e483b5bb2c86eb27/6410ebf8e483b53d6186fc53_ABM%20College%20Web%20developer%20main.jpg'

            ],
            [
                'title'=> 'Progetto n3',
                'description'=>'Il mio progetto numero 3 è molto bello',
                'image' => 'https://assets-global.website-files.com/6410ebf8e483b5bb2c86eb27/6410ebf8e483b53d6186fc53_ABM%20College%20Web%20developer%20main.jpg'

            ]

        ];

        foreach ($projects as $project) {
            $new_project = new Project();

            $new_project->title = $project['title'];
            $new_project->description = $project['description'];
            $new_project->image = $project['image'];

            $new_project->save();

        }
    }
}
