<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['admin', 'moderator', 'parent', 'teacher', 'student'];
        foreach ($roles as $role){
            \Illuminate\Support\Facades\DB::table('roles')->insert([
                'name' => $role
            ]);
        }
    }
}
