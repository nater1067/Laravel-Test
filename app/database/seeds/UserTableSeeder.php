<?php
/**
 * Class UserTableSeeder
 */
class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        User::create(array('email' => 'foo@bar.com', 'name' => 'Nate'));
    }
}