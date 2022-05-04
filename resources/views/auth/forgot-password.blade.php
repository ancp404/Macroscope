<x-guest-layout>
    <div class="d-flex justify-content-center">
        <div class="card d-inline-flex flex-grow p-2 mt-4 mb-4" style="width: 35%">
            <h5 class="card-header">Forgot Password</h5>
            <div class="card-body">
                
                <div class="alert alert-primary" role="alert">
                    Please insert your email address to receive a <strong>password reset link</strong>
                  </div>
                
                <div class="mb-4">
                    <hr>
                </div>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
        
                    <!-- Email Address -->
                    <div class="mb-4 d-flex flex-column">
                        <label for="email">Email</label>
                            <input type="email" name="email" id="email" required value="{{old('email')}}">
                            @error('email')
                                <div class="text-danger mt-2">
                                    {{$message}}
                                </div>
                            @enderror
                    </div>
        
                    <div class="mb-4 d-flex flex-column">
                        <button class="btn btn-dark" type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>  
</x-guest-layout>

{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}