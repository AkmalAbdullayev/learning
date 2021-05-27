<?php

use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('regions')->insert([
            'name' => 'Ташкентская область',
        ]);
        \Illuminate\Support\Facades\DB::table('cities')->insert([
            'name' => 'Ташкент',
            'region_id' => 1
        ]);
    }
}
