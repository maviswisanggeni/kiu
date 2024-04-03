<div class="work" id="work">
    <h1 class="title">work gallery</h1>
    <div class="work-gallery">
        @php
        $i = 1;
        @endphp
        @foreach ($works as $work)
        <div class="works @if($i > 3) hidden @endif" id="work{{ $i }}" onclick="openModal('{{ Storage::url($work->image) }}')">
            <div class="image">
                <img src="{{ Storage::url($work->image) }}" alt="">
            </div>
            <h1>{{ $work->title }}</h1>
            <p>{{ $work->description }}</p>
        </div>
        @php
        $i++;
        @endphp
        @endforeach
    </div>

    @if (count($works) > 3)
    <div class="show-more-btn">
        <button onclick="toggleWorks()">Show More</button>
    </div>
    @endif
</div>

<!-- Modal -->
<div class="modal" id="myModal">
    <div class="modal-content">
        <img src="{{ asset('assets/icons/close-white.svg') }}" alt="" class="close-modal-icon" onclick="closeModal()">
        <img id="modalImage" src="" alt="">
    </div>
</div>

<script>
    function toggleWorks() {
        var works = document.querySelectorAll('.works');
        works.forEach(function (work, index) {
            if (index >= 3) {
                work.classList.toggle('hidden');
            }
        });

        var btn = document.querySelector('.show-more-btn button');
        btn.textContent = (btn.textContent === 'Show More') ? 'Show Less' : 'Show More';
    }

    function openModal(imageUrl) {
        var modal = document.getElementById('myModal');
        var modalImage = document.getElementById('modalImage');
        modal.style.display = 'flex';
        modalImage.src = imageUrl;
    }

    function closeModal() {
        var modal = document.getElementById('myModal');
        modal.style.display = 'none';
    }

</script>
