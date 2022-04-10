<?php

use Illuminate\Database\Seeder;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert([
            'name' => 'N予備校',
        ]);
        DB::table('contents')->insert([
            'name' => 'ドットインストール',
        ]);
        DB::table('contents')->insert([
            'name' => 'POSSE課題',
        ]);
}
}