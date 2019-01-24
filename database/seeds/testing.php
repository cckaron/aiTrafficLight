<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class testing extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roads')->insert([
            'address' => '新北市新莊區中正路514巷'
        ]);

        DB::table('lights')->insert([
            'roads_id' => 1,
            'default_sec' => 40,
            'now_sec' => 0,
            'default_max_car' => 10,
            'now_car' => 0,
        ]);

        DB::table('lights')->insert([
            'roads_id' => 1,
            'default_sec' => 40,
            'now_sec' => 0,
            'default_max_car' => 10,
            'now_car' => 0,
        ]);

        DB::table('lights')->insert([
            'roads_id' => 1,
            'default_sec' => 90,
            'now_sec' => 0,
            'default_max_car' => 10,
            'now_car' => 0,
        ]);

        DB::table('lights')->insert([
            'roads_id' => 1,
            'default_sec' => 90,
            'now_sec' => 0,
            'default_max_car' => 10,
            'now_car' => 0,
        ]);

        DB::table('directions')->insert([
            'direct' => 1,
            'remark' => '東西向',
        ]);

        DB::table('directions')->insert([
            'direct' => 2,
            'remark' => '南北向',
        ]);

    }
}
