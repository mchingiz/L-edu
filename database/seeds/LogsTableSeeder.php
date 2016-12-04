<?php

use Illuminate\Database\Seeder;

class LogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('logs')->delete();

      DB::table('logs')->insert([
          'id' => '1',
          'user_id' => '1', // Chingiz
          'user_type' => 'user',
          'action_type_id' => '1', //view
          'item_type_id' => '1', //post
          'item_id' => '4',
      ]);

      DB::table('logs')->insert([
          'id' => '2',
          'user_id' => '2', // Senem
          'user_type' => 'user',
          'action_type_id' => '1', // view
          'item_type_id' => '2', // company
          'item_id' => '6', // BBF
      ]);

      DB::table('logs')->insert([
          'id' => '3',
          'user_id' => '1', // Chingiz
          'user_type' => 'user',
          'action_type_id' => '13', // report
          'item_type_id' => '2', // company
          'item_id' => '6', // Code Academy
      ]);

      DB::table('logs')->insert([
          'id' => '4',
          'user_id' => '5', // Code Academy
          'user_type' => 'company',
          'action_type_id' => '3', // report
          'item_type_id' => '1', // post
          'item_id' => '5',
      ]);

      DB::table('logs')->insert([
          'id' => '5',
          'user_id' => '3', // Mehdi
          'user_type' => 'moderator',
          'action_type_id' => '5', // approve
          'item_type_id' => '1', // post
          'item_id' => '3',
      ]);

      DB::table('logs')->insert([
          'id' => '6',
          'user_id' => '3', // Mehdi
          'user_type' => 'moderator',
          'action_type_id' => '6', // refuse
          'item_type_id' => '1', // post
          'item_id' => '3',
      ]);

      DB::table('logs')->insert([
          'id' => '7',
          'user_id' => '8', // Ulvi
          'user_type' => 'user',
          'action_type_id' => '7', // save
          'item_type_id' => '1', // post
          'item_id' => '3',
      ]);

      DB::table('logs')->insert([
          'id' => '8',
          'user_id' => '1', // Chingiz
          'user_type' => 'user',
          'action_type_id' => '7', // save
          'item_type_id' => '1', // post
          'item_id' => '4',
      ]);

      DB::table('logs')->insert([
          'id' => '9',
          'user_id' => '2', // Senem
          'user_type' => 'user',
          'action_type_id' => '10', // follow
          'item_type_id' => '2', // company
          'item_id' => '6', // BBF
      ]);

      DB::table('logs')->insert([
          'id' => '10',
          'user_id' => '8', // Ulvi
          'user_type' => 'user',
          'action_type_id' => '10', // follow
          'item_type_id' => '2', // company
          'item_id' => '6', // BBF
      ]);

      DB::table('logs')->insert([
          'id' => '11',
          'user_id' => '2', // Senem
          'user_type' => 'user',
          'action_type_id' => '11', // unfollow
          'item_type_id' => '2', // company
          'item_id' => '6', // BBF
      ]);
    }
}
