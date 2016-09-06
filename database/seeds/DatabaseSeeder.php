<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jokes')->truncate();
        DB::table('users')->truncate();

        Model::unguard();

        // $this->call(UsersTableSeeder::class);
        $this->call(JokesTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        Model::reguard();
    }
}
