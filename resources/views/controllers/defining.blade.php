@extends('master')

@section('content')

<h2>Defining Controllers</h2>

<br />

Artisan:
<pre>php artisan make:controller MyController</pre>

Structure:
<pre>A Laravel controller extends <b>App\Http\Controllers\Controller</b></pre>

<h2 id="controllers-and-namespaces">Controllers & Namespaces</h2>
<br />
<pre class="text-left">When declaring routes, just give the controller class name without the namespace,
however if there is a controller in a sub folder, for example App\Http\Controllers\Photos\AdminController, then the declaring should be

<b>Route::get('foo', 'Photos\AdminController@method');</b>
</pre>

<h2 id="single-action-controllers">Single Action Controllers</h2>
<br />
Create a class with __invoke function, then it's not necessary to pass the function name in route.
<br />
<pre class="text-left">
&lsaquo;?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class ShowProfile extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function __invoke($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}

</pre>
When registering routes for single action controllers, you do not need to specify a method:

<pre>
<b>Route::get('user/{id}', 'ShowProfile');</b>
</pre>

<h2 id="controller-middleware">Controller Middleware</h2>
<br />
It's possible to append middleware method in fluent interfaces within route files
<pre><b>Route::get('profile', 'UserController@show')->middleware('auth');</b></pre>
Also, It's possible to append middleware method within controller construct combined with only and except methods,
in this way the middleware is applied for just certain actions
<pre class="text-left" style="width: min-content; margin: 0 auto;">class UserController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('log')->only('index');

        $this->middleware('subscribed')->except('store');
    }
}</pre>

@endsection