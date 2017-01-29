<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('companies')->delete();

      DB::table('companies')->insert([
          'id' => '1',
          'user_id' => '5', // Code Academy
          'info' => 'Code Academy info falan',
          'slug' => 'Code-Academy',
          'logo' => 'default.png',
          'cover_photo'=>'default1.jpg',
          'address' => 'AF Business',
          'email' => 'code@code.edu.az',
          'phone1' => '0505050505',
          'phone2' => '0555050505',
          'fax' => '0404253243',
          'facebook' => 'http://www.facebook.com/CodeAcademy',
          'twitter' => 'http://www.twitter.com/CodeAcademy',
          'instagram' => 'http://www.instagram.com/CodeAcademy',
          'linkedin' => 'http://www.linkedin.com/CodeAcademy',
          'website' => 'http://www.code.edu.az',
          'approved' => '1',
      ]);

      DB::table('companies')->insert([
          'id' => '2',
          'user_id' => '6', // Code Academy
          'info' => 'BBf info falan',
          'slug' => 'BBF',
          'logo' => 'bbf.jpg',
          'cover_photo'=>'default1.jpg',
          'address' => 'AF Business hemcinin',
          'email' => 'bbf@bbf.az',
          'phone1' => '066060660',
          'phone2' => '032425245',
          'fax' => '0404253243',
          'facebook' => 'http://www.facebook.com/BBF',
          'twitter' => 'http://www.twitter.com/BBF',
          'instagram' => 'http://www.instagram.com/BBF',
          'linkedin' => 'http://www.linkedin.com/BBF',
          'website' => 'http://www.bbf.com',
          'approved' => '1',
      ]);

      DB::table('companies')->insert([
          'id' => '3',
          'user_id' => '7', // Azercell
          'info' => 'Azercell info falan',
          'slug' => 'Azercell',
          'logo' => 'azercell.jpg',
          'cover_photo'=>'default1.jpg',
          'address' => '20 Yanvar',
          'email' => 'azercell@azercell.com',
          'phone1' => '05151515151',
          'phone2' => '07070707707',
          'fax' => '0404253243',
          'facebook' => 'http://www.facebook.com/Azercell',
          'twitter' => 'http://www.twitter.com/Azercell',
          'instagram' => 'http://www.instagram.com/Azercell',
          'linkedin' => 'http://www.linkedin.com/Azercell',
          'website' => 'http://www.azercell.com',
          'approved' => '0',
      ]);
    }
}
