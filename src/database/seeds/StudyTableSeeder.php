<?php

use Illuminate\Database\Seeder;

class StudyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('study')->insert([
            'contents_id' => '1',
            'languages_id' => '1',
            'date' => '2022-03-24',
            'time' => '4',
        ]);
        DB::table('study')->insert([
            'contents_id' => '2',
            'languages_id' => '2',
            'date' => '2022-03-25',
            'time' => '10',
        ]);
        DB::table('study')->insert([
            'contents_id' => '3',
            'languages_id' => '3',
            'date' => '2022-03-26',
            'time' => '96',
        ]);
        DB::table('study')->insert([
            'contents_id' => '4',
            'languages_id' => '4',
            'date' => '2022-04-26',
            'time' => '40',
        ]);
    }
}
