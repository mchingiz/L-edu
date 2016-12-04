<?php

use Illuminate\Database\Seeder;

class ItemTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_types')->delete();

        DB::table('item_types')->insert([
            'id' => '1',
            'name' => 'Post',]);

        DB::table('item_types')->insert([
            'id' => '2',
            'name' => 'Company',]);

        DB::table('item_types')->insert([
            'id' => '3',
            'name' => 'Tag',]);

        DB::table('item_types')->insert([
            'id' => '4',
            'name' => 'Subcategory',]);
    }
}
