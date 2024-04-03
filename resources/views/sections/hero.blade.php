<section class="hero">
    <div class="top">
        <h1 class="animate__animated animate__slideInLeft animate__slow">{{ $hero->title_top }}</h1>
        <div class="content animate__animated animate__fadeIn animate__delay-2s animate__fast">
            {!! $hero->content !!}
        </div>
    </div>
    <div class="bottom">
        <h1 class="animate__animated animate__slideInRight animate__slow">{{ $hero->title_bottom }}</h1>
        <div class="content-mobile animate__animated animate__fadeIn animate__delay-2s animate__fast">
            {!! $hero->content !!}
        </div>
    </div>
    <div class="thumbnail">
        <img src="{{ Storage::url($hero->thumbnail) }}" alt="Hero Image">
    </div>
</section>
