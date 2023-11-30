<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 50; $i++) {
            $new_type = new Type();
            $new_type->name = $faker->name();
            $new_type->description = $faker->text();
            $new_type->save();
        }
    }
}
