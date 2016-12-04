<?php

use Illuminate\Database\Seeder;

class ReportTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('report_types')->delete();

      DB::table('report_types')->insert([
          'id' => '1',
          'name' => 'Fake profile',
      ]);

      DB::table('report_types')->insert([
          'id' => '2',
          'name' => 'Fake post',
      ]);

      DB::table('report_types')->insert([
          'id' => '3',
          'name' => 'Violence',
      ]);

      DB::table('report_types')->insert([
          'id' => '4',
          'name' => 'Drugs',
      ]);
    }
}
