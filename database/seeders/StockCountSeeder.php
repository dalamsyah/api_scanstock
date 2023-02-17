<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StockCountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stockcount')->insert([
            'item_code' => Str::random(10),
            'sn' => Str::random(10),
            'sn2' => Str::random(10),
            'scan' => 0,
        ]);
    }
}
