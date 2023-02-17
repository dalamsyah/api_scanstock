<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('StockCountSeeder');
        DB::table('stockcount')->insert([
            'item_code' => Str::random(10),
            'sn' => Str::random(10),
            'sn2' => Str::random(10),
            'scan' => 0,
        ]);
    }
}
