<?php

use Illuminate\Database\Seeder;
use App\Meeting;

class MeetingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Léa Vérou
        Meeting::create([
            'user_id' => 3,
            'student_id' => 1,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 8.5,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 3,
            'student_id' => 2,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 7,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 3,
            'student_id' => 3,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 19.5,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 3,
            'student_id' => 5,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 7.5,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 3,
            'student_id' => 7,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 12,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 3,
            'student_id' => 8,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 5,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 3,
            'student_id' => 9,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 13,
            'general_comment' =>'',
        ]);
        //Benjamin Decock
        Meeting::create([
            'user_id' => 4,
            'student_id' => 2,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 6,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 4,
            'student_id' => 3,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 18,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 4,
            'student_id' => 4,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 11,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 4,
            'student_id' => 5,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 7.5,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 4,
            'student_id' => 6,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 10,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 4,
            'student_id' => 8,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 4,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 4,
            'student_id' => 10,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 17,
            'general_comment' =>'',
        ]);

        // Tim Van Damme
        Meeting::create([
            'user_id' => 5,
            'student_id' => 1,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 15,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 5,
            'student_id' => 2,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => null,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 5,
            'student_id' => 3,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 18,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 5,
            'student_id' => 4,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => null,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 5,
            'student_id' => 5,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => null,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 5,
            'student_id' => 6,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 15.5,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 5,
            'student_id' => 7,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 15,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 5,
            'student_id' => 8,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 10,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 5,
            'student_id' => 9,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => null,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 5,
            'student_id' => 10,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => null,
            'general_comment' =>'',
        ]);

        //Mike Monteiro
        Meeting::create([
            'user_id' => 6,
            'student_id' => 1,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 9,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 6,
            'student_id' => 2,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 7,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 6,
            'student_id' => 3,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 13,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 6,
            'student_id' => 4,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 10,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 6,
            'student_id' => 5,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 7,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 6,
            'student_id' => 6,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 12,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 6,
            'student_id' => 7,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 11,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 6,
            'student_id' => 8,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 4,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 6,
            'student_id' => 9,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 10,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 6,
            'student_id' => 10,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 9,
            'general_comment' =>'',
        ]);

        //Mariam Faso
        Meeting::create([
            'user_id' => 7,
            'student_id' => 1,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 15,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 7,
            'student_id' => 2,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 0,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 7,
            'student_id' => 3,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 16,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 7,
            'student_id' => 4,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 12,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 7,
            'student_id' => 5,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 14,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 7,
            'student_id' => 6,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 16,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 7,
            'student_id' => 7,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 15,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 7,
            'student_id' => 8,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 0,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 7,
            'student_id' => 9,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 14,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 7,
            'student_id' => 10,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 14,
            'general_comment' =>'',
        ]);

        //Vincent De Oliveira
        Meeting::create([
            'user_id' => 8,
            'student_id' => 3,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 19,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 8,
            'student_id' => 4,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 10,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 8,
            'student_id' => 5,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 6,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 8,
            'student_id' => 7,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 16,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 8,
            'student_id' => 9,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 13,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 8,
            'student_id' => 10,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 10,
            'general_comment' =>'',
        ]);

        //Raphaël Goetter
        Meeting::create([
            'user_id' => 9,
            'student_id' => 2,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 8,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 9,
            'student_id' => 3,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 19,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 9,
            'student_id' => 6,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 15,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 9,
            'student_id' => 7,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 15,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 9,
            'student_id' => 8,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 4,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 9,
            'student_id' => 10,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 16,
            'general_comment' =>'',
        ]);

        //Molly H
        Meeting::create([
            'user_id' => 10,
            'student_id' => 1,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 15,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 10,
            'student_id' => 2,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 8.2,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 10,
            'student_id' => 5,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 13,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 10,
            'student_id' => 6,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 14,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 10,
            'student_id' => 8,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 7.25,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 10,
            'student_id' => 10,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 13.5,
            'general_comment' =>'',
        ]);

        //Andy Clarke
        Meeting::create([
            'user_id' => 11,
            'student_id' => 1,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 13,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 11,
            'student_id' => 2,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 7,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 11,
            'student_id' => 3,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 17,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 11,
            'student_id' => 4,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 7,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 11,
            'student_id' => 7,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 14,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 11,
            'student_id' => 9,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 14,
            'general_comment' =>'',
        ]);

        //Taylor Otwell
        Meeting::create([
            'user_id' => 12,
            'student_id' => 1,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => null,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 12,
            'student_id' => 4,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 15,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 12,
            'student_id' => 5,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 10,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 12,
            'student_id' => 7,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 13,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 12,
            'student_id' => 8,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 4,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 12,
            'student_id' => 9,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 14,
            'general_comment' =>'',
        ]);

        //Dan Cederholm
        Meeting::create([
            'user_id' => 13,
            'student_id' => 1,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 10,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 13,
            'student_id' => 3,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 16,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 13,
            'student_id' => 4,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 12,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 13,
            'student_id' => 6,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 11,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 13,
            'student_id' => 9,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 8,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 13,
            'student_id' => 10,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 12,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 3,
            'student_id' => 2,
            'event_id' => 2,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => null,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 3,
            'student_id' => 5,
            'event_id' => 2,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => null,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 3,
            'student_id' => 8,
            'event_id' => 2,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => null,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 15,
            'student_id' => 5,
            'event_id' => 2,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => null,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 15,
            'student_id' => 8,
            'event_id' => 2,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => null,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 5,
            'student_id' => 2,
            'event_id' => 2,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => null,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 5,
            'student_id' => 5,
            'event_id' => 2,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => null,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 5,
            'student_id' => 8,
            'event_id' => 2,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => null,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 6,
            'student_id' => 8,
            'event_id' => 2,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => null,
            'general_comment' =>'',
        ]);
        Meeting::create([
            'user_id' => 7,
            'student_id' => 2,
            'event_id' => 2,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => null,
            'general_comment' =>'',
        ]);

    }
}
