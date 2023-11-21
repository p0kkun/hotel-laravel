<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ここにシードデータの挿入処理を記述します。
        // 例として、1つのサンプルデータを挿入するコードを以下に示します。
        DB::table('customers')->insert([
            ['name' => '田中 一郎', 'address' => '大阪府大阪市中央区1-2-3', 'phone_number' => '06-1234-5678',
            'created_at' => now(),
            'updated_at' => now()],
            ['name' => '山田 花子', 'address' => '北海道札幌市中央区1-2-3', 'phone_number' => '011-1234-5678',
            'created_at' => now(),
            'updated_at' => now()],
            ['name' => '鈴木 次郎', 'address' => '宮城県仙台市青葉区1-2-3', 'phone_number' => '022-1234-5678',
            'created_at' => now(),
            'updated_at' => now()],
            // その他のデータ...
        ]);
    }
}

