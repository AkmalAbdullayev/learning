<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $feedbacks = [
            ['user_id' => '1', 'sender_name' => 'Akmal', 'title' => 'test1', 'content' => 'Work', 'solved_at' => '2020.01.01', 'description' => 'work process'],
            ['user_id' => '2', 'sender_name' => 'Akmal', 'title' => 'test2', 'content' => 'Work', 'solved_at' => '2020.01.01', 'description' => 'work process'],
            ['user_id' => '3', 'sender_name' => 'Akmal', 'title' => 'test3', 'content' => 'Work', 'solved_at' => '2020.01.01', 'description' => 'work process'],
            ['user_id' => '4', 'sender_name' => 'Akmal', 'title' => 'test4', 'content' => 'Work', 'solved_at' => '2020.01.01', 'description' => 'work process'],
            ['user_id' => '5', 'sender_name' => 'Akmal', 'title' => 'test5', 'content' => 'Work', 'solved_at' => '2020.01.01', 'description' => 'work process'],
            ['user_id' => '6', 'sender_name' => 'Akmal', 'title' => 'test6', 'content' => 'Work', 'solved_at' => '2020.01.01', 'description' => 'work process']
        ];

        foreach ($feedbacks as $feedback) {
            DB::table('feedback')->insert([
                'user_id' => $feedback['user_id'],
                'sender_name' => $feedback['sender_name'],
                'title' => $feedback['title'],
                'content' => $feedback['content'],
                'solved_at' => $feedback['solved_at'],
                'description' => $feedback['description'],
            ]);
        }
    }
}
