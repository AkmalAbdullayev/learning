<?php

use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            'admin', 
            'moderator', 
            'parent', 
            'teacher', 
            'student'
        ];
        foreach ($users as $key => $value) {
            DB::table('users')->insert([
                'role_id' => Role::whereName($value)->pluck('id')->first(),
                'username' => $value,
                'email' => $value.'@site.com',
                'password' => \Illuminate\Support\Facades\Hash::make('12345')
            ]);
        }
    }
}
