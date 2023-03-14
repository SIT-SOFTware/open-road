<x-app-layout>
    <x-slot name="content">

        <x-validation-errors class="mb-4" />
        <div class="row justify-content-center">
            <div class="col-7">
                
                <div class="card bg-dark text-white">
                        <h1 class="text-center mt-5">Register</h1>
                    <div class="card-body mx-5">
                        <form method="POST" class="mt-4" action="{{ route('register') }}">
                            @csrf 
                                
                            <div class="form-floating m-5">
                                <x-input id="email" class="block form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="email" />
                                <x-label class="text-dark form-label fs-6" for="email" value="Email" />
                            </div>

                            <div class="m-5 form-floating">
                                <x-input id="password" class="block form-control" type="password" name="password" required autocomplete="new-password" placeholder="password" />
                                <x-label class="text-dark form-label fs-6" for="password" value="Password" />
                            </div>

                            <div class="m-5 form-floating">
                                <x-input id="password" class="block form-control" type="password" name="password" required autocomplete="new-password" placeholder="password" />
                                <x-label class="text-dark form-label fs-6" for="password" value="Confirm Password" />
                            </div>

                            <div class="d-flex align-items-center justify-content-center mt-5">
                                <label for="remember_me" class="flex col-2 items-center">
                                    <x-checkbox id="remember_me" name="remember" />
                                    <span class="ml-2 text-sm">Remember me</span>
                                </label>
                                
                                <x-button class="btn btn-light ml-4 ">
                                    Register
                                </x-button>
                                
                            </div>

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mt-4">
                                <x-label for="terms">
                                    <div class="flex items-center">
                                        <x-checkbox name="terms" id="terms" required />
            
                                        <div class="ml-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </x-label>
                            </div>
                            @endif

                            <div class="d-flex items-center justify-content-center mt-5">
                                @if (Route::has('password.request'))
                                    <a class="underline fs-6 text-sm rounded-md mb-5 text-white" href="{{ route('login') }}">
                                        Already Registered?
                                    </a>
                                @endif
                            </div>

                        </form>
                    </div>
                </div>
            
            </div>
        </div>
        
    </x-slot>
</x-app-layout>
