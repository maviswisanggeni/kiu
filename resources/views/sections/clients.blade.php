<div class="clients" id="clients">
    <h1 class="title">Some of Our Clients</h1>
    <div class="client-gallery">
        @foreach ($clients as $client)
        <div class="client">
            <a href="{{ $client->link }}" target="_blank">
                <img src="{{ Storage::url($client->logo) }}" alt="Client Image">
            </a>
        </div>
        @endforeach
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        function animateClients() {
            const $gallery = $('.client-gallery');
            const galleryWidth = $gallery.width();
            const firstClient = $gallery.children('.client').first();
            const firstClientWidth = firstClient.outerWidth(true); // Mengambil lebar elemen termasuk margin

            firstClient.animate({
                marginLeft: -firstClientWidth
            }, 5000, "linear", function() {
                $(this).detach().appendTo($gallery).removeAttr('style');
                animateClients(); // Memanggil fungsi secara rekursif untuk loop terus menerus
            });
        }

        animateClients(); // Memulai animasi
    });
</script>
