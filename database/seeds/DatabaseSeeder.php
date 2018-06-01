<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        // $this->call(UsersTableSeeder::class);
//        $result = factory(App\User::class, function (Faker $faker) {
//            return [
//                'name' => $faker->name,
//                'email' => $faker->unique()->safeEmail,
//                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
//                'remember_token' => str_random(10),
//            ];
//        })->connection('sqlite');
        
        $user = factory(App\User::class)->connection('sqlite')->make();
        $user->save();
        
    }

}
