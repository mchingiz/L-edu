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
          'email' => 'chingiz@gmail.com',
          'user_type' => 'user',
          'activated' => true,
          'password' => bcrypt('qwerty'),
      ]);

      DB::table('users')->insert([
          'id' => '2',
          'name' => 'Senem',
          'email' => 'senem@gmail.com',
          'user_type' => 'user',
          'activated' => true,
          'password' => bcrypt('qwerty'),
      ]);

      DB::table('users')->insert([
          'id' => '3',
          'name' => 'Mehdi',
          'email' => 'moderator@gmail.com',
          'user_type' => 'moderator',
          'activated' => true,
          'password' => bcrypt('qwerty'),
      ]);

      DB::table('users')->insert([
          'id' => '4',
          'name' => 'Nigar',
          'email' => 'admin@gmail.com',
          'user_type' => 'admin',
          'activated' => true,
          'password' => bcrypt('qwerty'),
      ]);

      DB::table('users')->insert([
          'id' => '5',
          'name' => 'Code Academy',
          'email' => 'code@gmail.com',
          'user_type' => 'company',
          'activated' => true,
          'password' => bcrypt('qwerty'),
      ]);

      DB::table('users')->insert([
          'id' => '6',
          'name' => 'BBF',
          'email' => 'bbf@gmail.com',
          'user_type' => 'company',
          'activated' => true,
          'password' => bcrypt('qwerty'),
      ]);

      DB::table('users')->insert([
          'id' => '7',
          'name' => 'Azercell',
          'email' => 'azercell@gmail.com',
          'user_type' => 'company',
          'activated' => true,
          'password' => bcrypt('qwerty'),
      ]);

      DB::table('users')->insert([
          'id' => '8',
          'name' => 'Ulvi',
          'email' => 'user@gmail.com',
          'user_type' => 'user',
          'activated' => true,
          'password' => bcrypt('qwerty'),
      ]);
    }
}
