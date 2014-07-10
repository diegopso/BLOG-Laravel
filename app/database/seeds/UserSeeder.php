<?php

class UserSeeder extends Seeder
{
	public function run()
	{
        $user = new User;
        $user->username = 'diego';
        $user->password = Hash::make('diego123');
        $user->save();
	}
}