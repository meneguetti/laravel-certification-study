<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabaseController extends Controller
{

    public function gettingStarted(Request $request)
    {

        return view('database.getting-started');
    }

    public function queryBuilder(Request $request)
    {

        $usersSqlite = \Illuminate\Support\Facades\DB::connection('sqlite')->table('users')->get();
        $usersMysql = \Illuminate\Support\Facades\DB::connection('mysql')->table('users')->get();

        return view('database.query-builder', compact('usersSqlite', 'usersMysql'));
    }

    public function insert(Request $request)
    {

        $faker = \Faker\Factory::create();

        $user = new \stdClass();
        $user->name = $faker->name;
        $user->email = $faker->email;
        $user->password = $faker->password;

        DB::table('users')->insert([
            'name' => $user->name,
            'email' => $user->email,
            'password' => $user->password,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        return view('database.insert', compact('user'));
    }

    public function pagination(Request $request)
    {

        $users = DB::table('users')->paginate(2);

        return view('database.pagination', compact('users'));
    }

    public function migrations(Request $request)
    {
        return view('database.migrations');
    }

    public function seeding(Request $request)
    {
        return view('database.seeding');
    }

}
