<x-slot name="slide">

<div id="carousel" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" aria-label="Slide 1" aria-current="true" class="active"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/ppsBanner1.jpg'); }}" alt="First slide" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/ppsBanner2.jpg'); }}" alt="Second slide" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/ppsBanner3.jpg'); }}" alt="Third slide" class="d-block w-100">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

</x-slot>