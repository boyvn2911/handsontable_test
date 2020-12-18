<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssetStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asset_statuses')->insert([
            ['name' => 'Mới'],
            ['name' => 'Hỏng'],
            ['name' => 'Đã thanh lý'],
        ]);
    }
}
