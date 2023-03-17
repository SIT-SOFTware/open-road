<x-app-layout>

    <x-slot name="content">

        <div id="contact" class="container">    

            <h1 class="text-center">Ad Management</h1>
            <hr class="border border-dark  my-3" />

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <strong>{{ $message }}</strong>
                </div>
                
            @endif

            
            <h2 class="my-3 text-decoration-underline">Upload Image:</h2>

            <div class="row justify-content-center">
                <div class="col-md-8 col-12 my-3">
                    <!-- TODO failure condition -->
                    <form method="POST" action="{{ route('advertisements.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="input-group">
                            <input type="file" class="fs-5 form-control" name="advertisement"/>
                            <button class="btn btn-success fs-5">Upload</button>
                        </div>

                        <input type="hidden" name="ADVERTISEMENT_ID" value="4">
                    </form>
                </div>
            </div>

            <h2 class="mt-3 text-decoration-underline">Active Adverts:</h2>

            <div class="row">
                @foreach($ads as $ad)
                    <div class="col-lg-6 col-12">
                        <div class="card">
                            <img src="{{ asset($ad->AD_PATH) }}" alt="Slide {{ $loop->iteration }}" class="card-img-top">
                            <div class="card-body">
                                <div class="row fs-5">
                                    <div class="col-6">
                                        File: {{ $ad->AD_PATH }}
                                    </div>
                                    <div class="col-6">
                                        URL: {{ $ad->AD_URL }}
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <!-- Delete Button --> 
                                    <form action="{{ route('advertisements.destroy', $ad) }}" method="post" class="text-end" onsubmit="return confirm('Do you want to trash this advertisement?')">
                                        @method('delete')
                                        @csrf

                                        <button type="submit" class="btn btn-danger px-3 me-3 mt-2 fs-5"><i class="bi bi-trash3"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
            <h2 class="my-3 text-decoration-underline">Inactive Adverts:</h2>

            <div class="row">
                @foreach($trashedAds as $ad)
                        <div class="col-lg-6 col-12">
                            <div class="card">
                                <img src="{{ asset($ad->AD_PATH) }}" alt="Slide {{ $loop->iteration }}" class="card-img-top">
                                <div class="card-body">
                                    <div class="row fs-5">
                                        <div class="col-6">
                                            File: {{ $ad->AD_PATH }}
                                        </div>
                                        <div class="col-6">
                                            URL: {{ $ad->AD_URL }}
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <!-- Restore and Delete buttons -->
                                        <form action="{{ route('advertisements.update', $ad) }}" method="post" class="text-end">
                                            @method('put')
                                            @csrf
                                            
                                            <button class="btn btn-success px-3 me-3 mt-2 fs-5"><i class="bi bi-recycle"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
            <script>
                const checkbox = document.getElementById('flexSwitchCheckChecked');
                const hiddenInput = document.getElementById('ad-space-type-input');
            
                checkbox.addEventListener('change', (event) => {
                    if (event.target.checked) {
                        hiddenInput.value = '1';
                    } else {
                        hiddenInput.value = '2';
                    }
                });
            </script>
        </div> 

    </x-slot>
    
</x-app-layout>