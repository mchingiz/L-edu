<?php

use Illuminate\Database\Seeder;

class ActionTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('action_types')->delete();

      DB::table('action_types')->insert([
          'id' => '1',
          'name' => 'view',]);

      DB::table('action_types')->insert([
          'id' => '2',
          'name' => 'search',]);

      DB::table('action_types')->insert([
          'id' => '3',
          'name' => 'publish',]);

      DB::table('action_types')->insert([
          'id' => '4',
          'name' => 'unpublish',]);

      DB::table('action_types')->insert([
          'id' => '5',
          'name' => 'approve',]);

      DB::table('action_types')->insert([
          'id' => '6',
          'name' => 'refuse',]);

      DB::table('action_types')->insert([
          'id' => '7',
          'name' => 'save',]);

      DB::table('action_types')->insert([
          'id' => '8',
          'name' => 'add',]);

      DB::table('action_types')->insert([
          'id' => '9',
          'name' => 'unsave',]);

      DB::table('action_types')->insert([
          'id' => '10',
          'name' => 'follow',]);

      DB::table('action_types')->insert([
          'id' => '11',
          'name' => 'unfollow',]);

      DB::table('action_types')->insert([
          'id' => '12',
          'name' => 'share',]);

      DB::table('action_types')->insert([
          'id' => '13',
          'name' => 'report',]);
      
      DB::table('action_types')->insert([
          'id' => '14',
          'name' => 'add reminder',]);
      
      DB::table('action_types')->insert([
          'id' => '15',
          'name' => 'edit',]);
    }
}
