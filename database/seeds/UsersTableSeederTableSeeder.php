<?php

use Illuminate\Database\Seeder;
use App\User;

// composer require laracasts/testdummy
// use Laracasts\TestDummy\Factory as TestDummy;
//
// class {{class}} extends Seeder
// {
//     public function run()
//     {
//         // TestDummy::times(20)->create('App\Post');
//     }
// }

class UsersTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $faker = Faker\Factory::create();

    foreach (range(1, 5) as $index)
    {
      User::create([
        'name' => $faker->userName,
        'email' => $faker->email,
        'password' => bcrypt('secret')
      ]);
    }
  }
}
