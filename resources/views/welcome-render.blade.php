<div class="row">
    @foreach($items as $item => $subitem)

    @if($loop->iteration === 1 || $loop->iteration === 11 || $loop->iteration === 21)
    <div class="col-md-4">
        @endif
        
        <table class="table table-striped table-hover">
            <tr><th class="text-center">{{ $item }}</th></tr>

            @foreach($subitem as $value)

            <tr>
                <td>
                    @isset($value['empty'])
                    <span class="glyphicon glyphicon-exclamation-sign text-danger" aria-hidden="true"></span>
                    @endisset

                    @isset($value['link'])
                    <a href="{{ $value['link'] }}">{{ $value['name'] }}</a>
                    @else
                    {{ $value['name'] }}
                    @endisset
                </td>
            </tr>
            @endforeach
        </table>

        @if($loop->iteration === 10 || $loop->iteration === 20 || $loop->iteration === 30)
    </div>
    @endif

    @endforeach
</div>
