<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    private $subjects = ['mathematics', 'english', 'programming', 'physics'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->subjects as $subject)
        DB::table("subjects")->insert([
            'name' => $subject,
        ]);
    }
}
