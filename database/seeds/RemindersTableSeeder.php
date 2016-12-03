<?php

use Illuminate\Database\Seeder;

class RemindersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('reminders')->delete();

      DB::table('reminders')->insert([
          'id' => '1',
          'user_id' => '1',
          'post_id' => '2',
          'reminder_time' => '2016-12-08 14:29:21',
      ]);

      DB::table('reminders')->insert([
          'id' => '1',
          'user_id' => '1',
          'post_id' => '3',
          'reminder_time' => '2016-14-08 12:35:21',
      ]);

      DB::table('reminders')->insert([
          'id' => '1',
          'user_id' => '8',
          'post_id' => '5',
          'reminder_time' => '2016-14-10 11:12:42',
      ]);
    }
}
