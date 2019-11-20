<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SkillsTableSeeder::class);
        $this->call(SkillSpecialtyTableSeeder::class);
        $this->call(SpecialtiesTableSeeder::class);
    }
}

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            ['id' => 1, 'skill'=> 'writeCode'],
            ['id' => 2, 'skill'=> 'testCode'],
            ['id' => 3, 'skill'=> 'communicateWithManager'],
            ['id' => 4, 'skill'=> 'draw'],
            ['id' => 5, 'skill'=> 'setTasks']
        ]);
    }
}

class SkillSpecialtyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skill_specialty')->insert([
            ['id' => 1, 'specialty_id' => 1 , 'skill_id' => 1],
            ['id' => 2, 'specialty_id' => 1 , 'skill_id' => 2],
            ['id' => 3, 'specialty_id' => 1 , 'skill_id' => 3],
            ['id' => 4, 'specialty_id' => 2 , 'skill_id' => 3],
            ['id' => 5, 'specialty_id' => 2 , 'skill_id' => 4],
            ['id' => 6, 'specialty_id' => 3 , 'skill_id' => 2],
            ['id' => 7, 'specialty_id' => 3 , 'skill_id' => 3],
            ['id' => 8, 'specialty_id' => 3 , 'skill_id' => 5],
            ['id' => 9, 'specialty_id' => 4 , 'skill_id' => 5]
        ]);
    }
}

class SpecialtiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specialties')->insert([
            ['id' => 1, 'specialty' => 'programmer'],
            ['id' => 2, 'specialty' => 'designer'],
            ['id' => 3, 'specialty' => 'tester'],
            ['id' => 4, 'specialty' => 'manager']
        ]);
    }
}