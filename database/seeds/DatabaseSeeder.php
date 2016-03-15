<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
        DB::table('interests')->insert([
            'name' => 'Listening to music',
        ]);
        DB::table('interests')->insert([
            'name' => 'Sports',
        ]);
        DB::table('interests')->insert([
            'name' => 'Art',
        ]);
        DB::table('interests')->insert([
            'name' => 'Technologies',
        ]);
        DB::table('interests')->insert([
            'name' => 'Science',
        ]);
        DB::table('interests')->insert([
            'name' => 'Reading books',
        ]);
    }
}
