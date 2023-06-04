<?php

	namespace Database\Seeders;

	use App\Models\Kontak;
	use Faker\Factory;
	use Illuminate\Database\Seeder;

	class KontakSeeder extends Seeder
	{
		public function run()
		{
			$faker = Factory::create('id_ID');
			for($i = 0; $i < 10 ; $i++){
			    Kontak::create([
			        'nama' => $faker->name,
			        'alamat' => $faker->address,
			        'telepon' => $faker->phoneNumber
			    ]);
			}
		}
	}
