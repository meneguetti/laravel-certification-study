@extends('master')

@section('content')

<h2>{{ $actionName }}</h2>

<br />

Implode:
<pre>
$collection = collect([
    ['account_id' => 1, 'product' => 'Desk'],
    ['account_id' => 2, 'product' => 'Chair'],
]);

$collection->implode('product', ', '); // Desk, Chair
<b>{{ collect([
    ['account_id' => 1, 'product' => 'Desk'],
    ['account_id' => 2, 'product' => 'Chair'],
    ])->implode('product', ', ') }}</b>

...

collect([1, 2, 3, 4, 5])->implode('-'); // '1-2-3-4-5'
<b>{{ collect([1, 2, 3, 4, 5])->implode('-') }}</b>
    
</pre>

@endsection