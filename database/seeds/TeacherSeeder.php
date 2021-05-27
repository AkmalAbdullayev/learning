<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $city = \App\Models\City::whereName('Ташкент')->first();
        $teacherRole = \App\Models\Role::whereName('teacher')->first();
        for ($i = 0; $i < 10; $i++){
           DB::transaction(function () use ($teacherRole, $faker, $city) {
               $user = \App\User::create([
                   'role_id' => $teacherRole->id,
                   'username' => $faker->userName,
                   'email' => $faker->email,
                   'password' => \Illuminate\Support\Facades\Hash::make('12345')
               ]);
               DB::table('teachers')->insert([
                   'user_id' => $user->id,
                   'city_id' => $city->id,
                   'full_name' => $faker->name,
                   'birthday' => '1985-05-05',
                   'address' => $faker->address,
                   'biography' => $faker->text,
                   'education_level' => 'высшее',
                   'experience' => 5,
                   'gender' => 1,
                   'school' => 1,
                   'phone' => '+9989'.rand(00000000, 99999999),
               ]);
            });
        }
    }
}
