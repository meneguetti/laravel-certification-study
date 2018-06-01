@extends('master')

@section('content')

<h2>{{ $actionName }}</h2>

<br />

Pagination (users):
<pre>
$users = \Illuminate\Support\Facades\DB::table('users')->paginate(2);

<b>
@forelse($users as $user)
    {{ $user->name }}
@empty
    No users found
@endforelse
</b>

$users->links()
</pre>
{{ $users->links() }}

<br />
<br />

@endsection