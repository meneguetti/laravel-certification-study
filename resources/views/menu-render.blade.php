@foreach($menu as $item => $subitem)
@if($loop->iteration === 11 || $loop->iteration === 21)
<br />
@endif
<li class="dropdown"> 
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
       aria-haspopup="true" aria-expanded="false">
        {{ $item }}
        <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
        @foreach($subitem as $value)
        <li>
            @isset($value['empty'])
            <span class="glyphicon glyphicon-exclamation-sign text-danger" aria-hidden="true"></span>
            @endisset

            @isset($value['link'])
            <a href="{{ $value['link'] }}">{{ $value['name'] }}</a>
            @else
            {{ $value['name'] }}
            @endisset
        </li>
        @endforeach
    </ul>
</li>
@endforeach
