@extends('master')

@section('content')

<h2>{{ $actionName }}</h2>

<br />

Practical example in this project:
<pre>\App\Providers\AppServiceProvider ... function boot()

app('view')->composer('master', function ($view) {

    //menu
    if (\Illuminate\Support\Facades\Cache::store('file')->has('menu.content')) {
        $view->with('menu', \Illuminate\Support\Facades\Cache::store('file')->get('menu.content'));
    } else {
        $menu = view('menu-render', ['menu' => \App\Menu::items()])->render();

        \Illuminate\Support\Facades\Cache::store('file')->put('menu.content', $menu, 60);

        $view->with('menu', $menu);
    }
});
</pre>

Retrieving Items From The Cache:
<pre>$value = Cache::store('file')->get('foo');

$value = Cache::get('key');

$value = Cache::get('key', 'default');</pre>

Checking For Item Existence:
<pre>if (Cache::has('key')) {
    //
}</pre>

Incrementing / Decrementing Values:
<pre>Cache::increment('key');
Cache::increment('key', $amount);
Cache::decrement('key');
Cache::decrement('key', $amount);</pre>

Retrieve & Delete:
<pre>$value = Cache::pull('key');</pre>

@endsection