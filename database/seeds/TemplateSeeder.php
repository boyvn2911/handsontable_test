<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('templates')->truncate();
        DB::table('templates')->insert([
            [
                'name' => 'Doanh số xe',
                'value' => json_encode([
                    [
                        'title' => 'Ford'
                    ],
                    [
                        'title' => 'Tesla'
                    ],
                    [
                        'title' => 'Toyota'
                    ],
                    [
                        'title' => 'Honda'
                    ],
                ]),
            ],
            [
                'name' => 'Tài sản',
                'value' => json_encode([
                    [
                        'title' => 'Tên tài sản',
                        'field' => 'name',
                    ],
                    [
                        'title' => 'Mã tài sản',
                        'field' => 'code',
                    ],
                    [
                        'title' => 'Loại tài sản',
                        'type' => 'autocomplete',
                        'source' => ['Bàn', 'Ghế', 'Tủ', 'Xe'],
                        'field' => 'type',
                    ],
                    [
                        'title' => 'Barcode',
                        'regex' => '^[0-9]{13}$',
                        'field' => 'barcode',
                    ],
                    [
                        'title' => 'Ngày mua',
                        'type' => 'date',
                        'field' => 'purchased_at',
                    ],
                ]),
            ],
        ]);
    }
}
