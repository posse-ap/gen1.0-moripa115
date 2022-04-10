<?php

use Illuminate\Database\Seeder;

class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            'name' => 'HTML',
        ]);
        DB::table('languages')->insert([
            'name' => 'CSS',
        ]);
        DB::table('languages')->insert([
            'name' => 'JavaScript',
        ]);
        DB::table('languages')->insert([
            'name' => 'PHP',
        ]);
    }
}
