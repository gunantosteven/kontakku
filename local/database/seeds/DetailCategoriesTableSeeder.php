<?php

use Illuminate\Database\Seeder;

class DetailCategoriesTableSeeder extends Seeder {
	public function run()
	{
		// kosongkan data tabel detailcategories
		DB::table('detailcategories')->delete();
		// buat data 
		\App\Models\DetailCategory::create(array(
		'id' => Uuid::generate(),
		'category' => DB::table('categories')->where('title', 'Friends')->first()->id,
		'friendid' => DB::table('users')->where('email', 'coba@gmail.com')->first()->id,
		'onlineoffline' => 'ONLINE',
		));

		\App\Models\DetailCategory::create(array(
		'id' => Uuid::generate(),
		'category' => DB::table('categories')->where('title', 'Friends')->first()->id,
		'friendid' => DB::table('friendsoffline')->where('fullname', 'test1')->first()->id,
		'onlineoffline' => 'OFFLINE',
		));
	}
}