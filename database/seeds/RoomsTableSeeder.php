<?php

// database/seeds/RoomsTableSeeder.php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('rooms')->insert([
            [
                'name' => 'DXスイートルーム',
                'type' => 'スイート',
                'capacity_min' => 2,
                'capacity_max' => 5
            ],
            [
                'name' => '展望温泉風呂付エグゼクティブスイートルーム',
                'type' => 'スイート',
                'capacity_min' => 2,
                'capacity_max' => 5
            ],
            [
                'name' => 'サウナ＆展望温泉風呂付プレミアム・スパスイートルーム',
                'type' => 'スイート',
                'capacity_min' => 2,
                'capacity_max' => 5
            ],
            [
                'name' => 'DXツインルーム',
                'type' => 'ツイン',
                'capacity_min' => 2,
                'capacity_max' => 2
            ],
            [
                'name' => 'DX和洋室',
                'type' => '和洋室',
                'capacity_min' => 3,
                'capacity_max' => 4
            ],
            [
                'name' => '展望温泉風呂付エグゼクティブツインルーム',
                'type' => 'ツイン',
                'capacity_min' => 2,
                'capacity_max' => 2
            ],
            [
                'name' => 'スタンダードツイン',
                'type' => 'ツイン',
                'capacity_min' => 2,
                'capacity_max' => 2
            ],
            [
                'name' => 'スタンダード和洋室',
                'type' => '和洋室',
                'capacity_min' => 2,
                'capacity_max' => 4
            ],
            [
                'name' => '特別和洋室',
                'type' => '和洋室',
                'capacity_min' => 2,
                'capacity_max' => 5
            ],
        ]);
    }
}
