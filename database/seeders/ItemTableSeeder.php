<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $jml = 100;
        for ($i = 0; $i < $jml; $i++) {
            DB::table('items')->insert([
                'item_name' => Str::random(25),
                'item_type' => Str::random(10),
                'item_price' => rand(1000, 10000),
                'item_desc' => Str::random(25),
                'item_name' => Str::random(50),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
