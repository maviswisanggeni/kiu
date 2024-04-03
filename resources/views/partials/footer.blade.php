<div class="footer" id="footer">
    <div class="wrapper">
        <div class="left">
            <div class="company">
                <div class="logo">
                    <img src="{{ asset('assets/logo/kiu-light-logo.png') }}" alt="Logo">
                    <h1 class="name">{{ $site_name }}</h1>
                </div>
                <p class="address">{{ $address }}</p>
            </div>
            <div class="contact">
                <p class="email">{{ $comp_email }}</p>
                <p class="number">{{ $comp_phone }}</p>
            </div>
        </div>
        <div class="right">
            <div id="map"></div>
            <div class="social-media">
                <a href="{{ $comp_instagram }}" target="_blank">
                    <img src="{{ asset('assets/icons/instagram.svg') }}" alt="Instagram">
                </a>
                <a href="https://wa.me/{{ $comp_phone }}" target="_blank">
                    <img src="{{ asset('assets/icons/whatsapp.svg') }}" alt="Whatsapp">
                </a>
                <a href="{{ $comp_facebook }}" target="_blank">
                    <img src="{{ asset('assets/icons/facebook.svg') }}" alt="Facebook">
                </a>
                <a href="{{ $comp_twitter }}" target="_blank">
                    <img src="{{ asset('assets/icons/twitter.svg') }}" alt="Twitter">
                </a>
                <a href="{{ $comp_youtube }}" target="_blank">
                    <img src="{{ asset('assets/icons/youtube.svg') }}" alt="Youtube">
                </a>
            </div>
            <div>
            </div>

        </div>
    </div>
    <div class="copyright">
        <p>© Copyright <span id="current-year"></span>, All right reserved by {{ $site_name }}</p>
    </div>
</div>
