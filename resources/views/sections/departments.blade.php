<div class="departments" id="departments">
    <h1 class="title">our departments</h1>
    @php
    $i=1;
    @endphp
    @foreach ($departments as $department)
    <div class="department">
        <h1 class="name">{{ $department->name }}</h1>
        <p class="description">{{ $department->description }}</p>
    </div>
    @endforeach
    @php
    $i++;
    @endphp
</div>
