<?php

use App\Models\Feedback;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(RegionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TeacherSeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(FeedbackSeeder::class);
    }
}
