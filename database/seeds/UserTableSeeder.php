<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = new \App\User;
      $user->name = 'micah';
      $user->email = "maj407@gmail.com";
      $user->password = bcrypt('dcshoe');
      $user->save();
    }
}
