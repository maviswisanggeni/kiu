<div class="contact" id="contact">
    <h1 class="title">contact us <br>send a message</h1>
    <div class="contact-form">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ url('/contact') }}" method="post">
            @csrf
            <div>
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" name="name" id="name" placeholder="Masukkan Nama" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Masukkan Email">
                </div>
            </div>

            <div class="message">
                <div class="form-group">
                    <label for="message">Pesan</label>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Pesan"
                        required></textarea>
                </div>

                <button type="submit">Send</button>
            </div>
        </form>
    </div>
</div>

<script>
    // Tambahkan script JavaScript untuk menutup formulir setelah beberapa detik
    @if(session('success'))
        setTimeout(function() {
            document.querySelector('form').reset();
            document.querySelector('.alert-success').style.display = 'none';
        }, 5000); // Formulir akan dikosongkan dan pesan sukses akan disembunyikan setelah 5 detik
    @endif
</script>
