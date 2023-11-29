<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 50; $i++) {
            $new_project = new Project();
            $new_project->title = $faker->name();
            $new_project->description = $faker->name();
            $new_project->start_date = $faker->date('Y_m_d');
            $new_project->save();
        }
    }
}
