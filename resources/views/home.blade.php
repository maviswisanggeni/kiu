@php
$site_name = getSettingsValue('_site_name');
$site_description = getSettingsValue('_site_description');
$site_logo = getSettingsValue('_site_logo');
$site_favicon = getSettingsValue('_site_favicon');
$address = getSettingsValue('_location');
$comp_email = getSettingsValue('_email');
$comp_phone = str_replace(' ', '', getSettingsValue('_phone'));
$comp_facebook = getSettingsValue('_facebook');
$comp_instagram = getSettingsValue('_instagram');
$comp_youtube = getSettingsValue('_youtube');
$comp_twitter = getSettingsValue('_twitter');
$longtitude = getSettingsValue('_longtitude');
$latitude = getSettingsValue('_latitude');


$hero = getHeroValue('1');
$about_company = getAboutValue('about');

$works = getWorks();
$departments = getDepartments();
$partners = getPartners();
$clients = getClients();
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/components/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/sections/hero.css')}}">
    <link rel="stylesheet" href="{{asset('css/sections/about.css')}}">
    <link rel="stylesheet" href="{{asset('css/sections/work.css')}}">
    <link rel="stylesheet" href="{{asset('css/sections/department.css')}}">
    <link rel="stylesheet" href="{{asset('css/sections/partner.css')}}">
    <link rel="stylesheet" href="{{asset('css/sections/client.css')}}">
    <link rel="stylesheet" href="{{asset('css/components/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/sections/contact.css')}}">

    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="icon" href="{{ asset('storage/' . $site_favicon) }}" type="image/x-icon" />
    <title>{{ $site_name }}</title>
</head>

<body>
    @include('partials.header')

    @include('sections.hero')
    @include('sections.about')
    @include('sections.work')
    @include('sections.departments')
    @include('sections.partners')
    @include('sections.clients')
    @include('sections.contact')

    @include('partials.footer')
    <script src="{{asset('js/home/home.js')}}"></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        var latitude = {{ $latitude }};
        var longtitude = {{ $longtitude }}; // Ganti "longitude" menjadi "longtitude"

        var map = L.map('map').setView([latitude, longtitude], 15); // Ganti "longitude" menjadi "longtitude"

        // Menambahkan Layer Peta dari OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Menambahkan Marker ke Peta
        L.marker([latitude, longtitude]).addTo(map)
            .bindPopup('<b>{{ $site_name }}</b><br>{{ $address }}').openPopup();

         // Menambahkan Event Handler untuk Klik pada Peta
        map.on('click', function () {
            // Redirect ke Google Maps saat peta diklik
            var googleMapsUrl = 'https://www.google.com/maps/search/?api=1&query=' + latitude + ',' + longtitude;
            window.open(googleMapsUrl, '_blank');
        });

        var currentYear = new Date().getFullYear();
        document.getElementById('current-year').innerHTML = currentYear;
    </script>
</body>

</html>
