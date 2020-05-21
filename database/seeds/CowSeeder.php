<?php

use Illuminate\Database\Seeder;

class CowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cow')->insert([
            'name' => "小黑",
            'sex' => "公",
            'age' => 11,
            'color' => "紫色",
            'hobby' => "嘻嘻",
        ]);
        DB::table('cow')->insert([
            'name' => "小c",
            'sex' => "公",
            'age' => 12,
            'color' => "lan色",
            'hobby' => "嘻嘻",
        ]);
        DB::table('cow')->insert([
            'name' => "小黑2",
            'sex' => "公",
            'age' => 4,
            'color' => "紫色2",
            'hobby' => "嘻嘻2",
        ]);
        DB::table('cow')->insert([
            'name' => "小黑3",
            'sex' => "公",
            'age' => 2,
            'color' => "紫色3",
            'hobby' => "嘻嘻3",
        ]);
    }
}
