@foreach ($messages as $message)
    <a href="{{ route('admin.portfolio.messages.show', $message->id) }}">
        <div class="media">
            <div class="media-left">
                <span class="avatar avatar-sm avatar-online rounded-circle">
                    <img src="{{ asset('assets/admin/images/portrait/small/avatar-s-19.png') }}"
                        alt="avatar"><i></i></span>
            </div>
            <div class="media-body">
                <h6 class="media-heading">{{ $message->name }}</h6>
                <p class="notification-text font-small-3 text-muted">
                    {{ implode(' ', array_slice(explode(' ', $message->message), 0, 8)) }}</p>
                <small>
                    <time class="media-meta text-muted"
                        datetime="2015-06-11T18:29:20+08:00">{{ $message->created_at->diffForHumans() }}</time>
                </small>
            </div>
        </div>
    </a>
@endforeach
