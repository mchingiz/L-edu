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
          'loggable_type' => 'App\Post', //post
          'loggable_id' => '4',
      ]);

      DB::table('logs')->insert([
          'id' => '2',
          'user_id' => '2', // Senem
          'user_type' => 'user',
          'action_type_id' => '1', // view
          'loggable_type' => 'App\Company', // company
          'loggable_id' => '2', // BBF
      ]);

      DB::table('logs')->insert([
          'id' => '3',
          'user_id' => '1', // Chingiz
          'user_type' => 'user',
          'action_type_id' => '13', // report
          'loggable_type' => 'App\Company', // company
          'loggable_id' => '1', // Code Academy
      ]);

      DB::table('logs')->insert([
          'id' => '4',
          'user_id' => '5', // Code Academy
          'user_type' => 'App\Company',
          'action_type_id' => '3', // report
          'loggable_type' => 'App\Post', // post
          'loggable_id' => '5',
      ]);

      DB::table('logs')->insert([
          'id' => '5',
          'user_id' => '3', // Mehdi
          'user_type' => 'moderator',
          'action_type_id' => '5', // approve
          'loggable_type' => 'App\Post', // post
          'loggable_id' => '3',
      ]);

      DB::table('logs')->insert([
          'id' => '6',
          'user_id' => '3', // Mehdi
          'user_type' => 'moderator',
          'action_type_id' => '6', // refuse
          'loggable_type' => 'App\Post', // post
          'loggable_id' => '3',
      ]);

      DB::table('logs')->insert([
          'id' => '7',
          'user_id' => '8', // Ulvi
          'user_type' => 'user',
          'action_type_id' => '7', // save
          'loggable_type' => 'App\Post', // post
          'loggable_id' => '3',
      ]);

      DB::table('logs')->insert([
          'id' => '8',
          'user_id' => '1', // Chingiz
          'user_type' => 'user',
          'action_type_id' => '7', // save
          'loggable_type' => 'App\Post', // post
          'loggable_id' => '4',
      ]);

      DB::table('logs')->insert([
          'id' => '9',
          'user_id' => '2', // Senem
          'user_type' => 'user',
          'action_type_id' => '10', // follow
          'loggable_type' => 'App\Company', // company
          'loggable_id' => '2', // BBF
      ]);

      DB::table('logs')->insert([
          'id' => '10',
          'user_id' => '8', // Ulvi
          'user_type' => 'user',
          'action_type_id' => '10', // follow
          'loggable_type' => 'App\Company', // company
          'loggable_id' => '2', // BBF
      ]);

      DB::table('logs')->insert([
          'id' => '11',
          'user_id' => '2', // Senem
          'user_type' => 'user',
          'action_type_id' => '11', // unfollow
          'loggable_type' => 'App\Company', // company
          'loggable_id' => '2', // BBF
      ]);

      DB::table('logs')->insert([
          'id' => '12',
          'user_id' => '2', // Senem
          'user_type' => 'user',
          'action_type_id' => '1', // view
          'loggable_type' => 'App\Category', // category
          'loggable_id' => '3',
      ]);
      DB::table('logs')->insert([
          'id' => '13',
          'user_id' => '2', // Senem
          'user_type' => 'user',
          'action_type_id' => '1', // view
          'loggable_type' => 'App\Subcategory', // category
          'loggable_id' => '3',
      ]);
      DB::table('logs')->insert([
          'id' => '14',
          'user_id' => '2', // Senem
          'user_type' => 'user',
          'action_type_id' => '1', // view
          'loggable_type' => 'App\Search', // category
          'loggable_id' => '1',
      ]);
      DB::table('logs')->insert([
          'id' => '15',
          'user_id' => '3', // Senem
          'user_type' => 'user',
          'action_type_id' => '1', // view
          'loggable_type' => 'App\Search', // category
          'loggable_id' => '1',
      ]);
      DB::table('logs')->insert([
          'id' => '16',
          'user_id' => '3', // Senem
          'user_type' => 'user',
          'action_type_id' => '1', // view
          'loggable_type' => 'App\Tag', // category
          'loggable_id' => '2',
      ]);
      DB::table('logs')->insert([
          'id' => '17',
          'user_id' => '3', // Senem
          'user_type' => 'user',
          'action_type_id' => '1', // view
          'loggable_type' => 'App\Tag', // category
          'loggable_id' => '2',
      ]);
    }
}
