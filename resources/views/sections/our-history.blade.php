<div class="history">
    <h1 class="title">The History</h1>
    <div class="history-list">
        @php
        $i=1;
        @endphp
        @foreach ($histories as $history)
        <div class="history-item">
            <div>
                <h1>{{ $history->title }}</h1>
                <p>{!! $history->content !!}</p>
            </div>
            <img src="{{ Storage::url($history->image) }}" alt="image">
        </div>
        @endforeach
        @php
        $i++;
        @endphp
    </div>
</div>
