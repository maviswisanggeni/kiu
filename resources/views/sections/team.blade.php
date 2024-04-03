<div class="teams">
    <h1 class="title">Our Team</h1>
    @php
    $i=1;
    @endphp
    @foreach ($teams as $team)
    <div class="team">
        <h1>{{ $team->name }}</h1>
        <img src="{{ Storage::url($team->photo) }}" alt="image" class="profile">
        <div class="position">
            <p>{{ $team->position }}</p>
            <a href="{{ $team->instagram }}" target="_blank">
                <img src="{{ asset('assets/icons/instagram-dark.svg') }}" alt="Instagram">
            </a>
        </div>
    </div>
    @endforeach
    @php
    $i++;
    @endphp
</div>
