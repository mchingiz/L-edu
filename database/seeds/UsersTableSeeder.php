<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->delete();

      DB::table('users')->insert([
          'id' => '1',
          'name' => 'Chingiz',
          'email' => str_random(10).'@gmail.com',
          'user_type' => 'user',
      ]);

      DB::table('users')->insert([
          'id' => '2',
          'name' => 'Senem',
          'email' => str_random(10).'@gmail.com',
          'user_type' => 'user',
      ]);

      DB::table('users')->insert([
          'id' => '3',
          'name' => 'Mehdi',
          'email' => str_random(10).'@gmail.com',
          'user_type' => 'moderator',
      ]);

      DB::table('users')->insert([
          'id' => '4',
          'name' => 'Nigar',
          'email' => str_random(10).'@gmail.com',
          'user_type' => 'admin',
      ]);

      DB::table('users')->insert([
          'id' => '5',
          'name' => 'Code Academy',
          'email' => str_random(10).'@gmail.com',
          'user_type' => 'company',
      ]);

      DB::table('users')->insert([
          'id' => '6',
          'name' => 'BBF',
          'email' => str_random(10).'@gmail.com',
          'user_type' => 'company',
      ]);

      DB::table('users')->insert([
          'id' => '7',
          'name' => 'Azercell',
          'email' => str_random(10).'@gmail.com',
          'user_type' => 'company',
      ]);

      DB::table('users')->insert([
          'id' => '8',
          'name' => 'Ulvi',
          'email' => str_random(10).'@gmail.com',
          'user_type' => 'user',
      ]);
    }
}
