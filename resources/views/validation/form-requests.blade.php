@extends('master')

@section('content')

<h2>Form Requests</h2>

<br />

<h3>Artisan:</h3>
<br />
<pre>php artisan make:request StoreBlogPost</pre>
<h3><small>It will create app/Http/Requests/StoreBlogPost.php, some important functions:</small></h3>
<br />
<pre><ul>
<li>authorize()</li>
<li>rules()</li>
<li>messages()</li>
</ul></pre>
<h3>Form Test</h3>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action='{{ route('validation.form-requests-injected') }}' method="post">
    {{ csrf_field() }}
    <div class="form-group">
        Title: <textarea name='title' />{{ old('title') }}</textarea><br />
    </div>
    <div class="form-group">
        Body: <input type="text" name='body' value='{{ old('body') }}' /><br />    
    </div>
    <input type="submit" class="btn btn-primary" value="Submit Injected" />
    <input type="submit" class="btn btn-primary" value="Submit Manual" formaction="{{ route('validation.form-requests-manual') }}"/>
</form>
<br />
<br />
@endsection