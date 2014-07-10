<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('PostCommentSeeder');
		$this->call('UserSeeder');
        $this->command->info('Post and Comment tables seeded!');
	}

}
