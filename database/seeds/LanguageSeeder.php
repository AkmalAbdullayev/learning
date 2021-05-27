<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lang = ['ru', 'uz'];
        foreach ($lang as $item) {
            DB::table('languages')->insert([
                'name' => $item
            ]);
        }
    }
}
