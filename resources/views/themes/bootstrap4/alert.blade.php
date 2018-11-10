@foreach ($messages as $msg)
    <div class="alert alert_{{ $msg['type'] }} alert-dismissible fade show" role="alert">
        <div class="alert_icon">
            <i class="fas fa-check"></i>
        </div>
        <strong>{{ $msg['message'] }}</strong>
    @if (!empty ($msg['details']))
        {{ $msg['details'] }}
    @endif
    <div class="alert_wrapper">
    {!! $msg['html'] !!}
    </div>
    @if (!empty ($msg['items']))
        <ul>
          @foreach ($msg['items'] as $item)
            <li>{{ $item }}</li>
          @endforeach
        </ul>
    @endif
    @if ( ! empty ($msg['buttons']))
        <p>
            @foreach ($msg['buttons'] as $btn)
                <a class="btn btn-{{ $btn['class'] }}" href="{{ $btn['url'] }}">{{ $btn['text'] }}</a>
            @endforeach
        </p>
    @endif
        <a href="#" class="close"><i class="fas fa-times"></i></a>
    </div>
@endforeach
