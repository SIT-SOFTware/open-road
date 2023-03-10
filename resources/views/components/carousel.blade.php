<x-slot name="slide">

    <div id="carousel" class="carousel slide shadow-lg" data-bs-ride="true">
        <div class="carousel-indicators">
            @foreach($advertisement as $ad)
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="{{ $loop->index }}" aria-label="Slide {{ $loop->iteration }}" 
                        {{ $loop->first ? 'class=active' : '' }}>
                </button>
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach($advertisement as $ad)
                @if($loop->first)
                    <div class="carousel-item active">
                @else
                    <div class="carousel-item">
                @endif
                    <img src="{{ asset($ad->AD_PATH) }}" alt="Slide {{ $loop->iteration }}" class="d-block w-100">
                </div>
            @endforeach
    
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