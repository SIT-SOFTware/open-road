<x-app-layout>
    <x-slot name="content">
        <div class="container text-white ">
            <div class="row justify-content-center border-r">
                <div class="col-lg-7 col-md-9 bg-dark p-4 mb-3 rounded">

                    <p class="text-white fs-1 text-center py-4">Sign in</p>

                    <x-slot name="logo">
                        <!-- PRA ICON -->
                    </x-slot> 
            
                    <x-validation-errors class="mb-4" />
            
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
            
                    <form method="POST" class="mb-5" action="{{ route('login') }}">
                        @csrf 
                        
                        <div class="form-floating mx-5">
                            <x-input id="email" class="block form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="email" />
                            <x-label class="text-dark form-label fs-6" for="email" value="Email" />
                        </div>
            
                        <div class="mt-4 mx-5 form-floating">
                            <x-input id="password" class="block form-control" type="password" name="password" required autocomplete="current-password" placeholder="password" />
                            <x-label class="text-dark form-label fs-6" for="password" value="Password" />
                        </div>
            
                        <div class="flex justify-content-center mt-5">
                            <label for="remember_me" class="flex items-center">
                                <x-checkbox id="remember_me" name="remember" />
                                <span class="ml-2 text-sm">{{ __('Remember me') }}</span>
                                <x-button class="ml-4">
                                    Log in
                                </x-button>
                            </label>
                            
                        </div>
            
                        <div class="flex items-center justify-content-center mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline fs-6 text-sm rounded-md" href="{{ route('password.request') }}">
                                    Forgot your password?
                                </a>
                            @endif
            
                            
                        </div>
                        <p class="text-white fs-4 text-center mt-5">Don't have an account?</p>
                        <p class="text-center"><a href="#" class="text-white fs-5 text-decoration-underline">Register</a></p>
                    </form>
                </div>
            </div>
        </div>
        
    </x-slot>
</x-app-layout>
