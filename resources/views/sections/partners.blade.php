<div class="partners" id="partners">
    <h1 class="title">Partners</h1>
    <div class="partner-gallery">
        @php
        $i=1;
        @endphp
        @foreach ($partners as $partner)
        <div class="partner">
            <a href="{{ $partner->link }}" target="_blank">
                <img src="{{ Storage::url($partner->logo) }}" alt="Partner Image">
            </a>
        </div>
        @endforeach
        @php
        $i++;
        @endphp
    </div>
</div>
