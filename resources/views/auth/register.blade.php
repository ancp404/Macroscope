{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

<x-guest-layout>

    <div class="d-flex justify-content-center">
        <div class="card p-2 mt-4 mb-4" style="width:35%">
            <h5 class="card-header">Registration</h5>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                            <!-- Name -->
                        <div class="mb-4 d-flex flex-column">
                            <label for="name">Full Name</label>
                            <input type="text" name="name" id="name" required value="{{old('name')}}" autofocus>
                            @error('name')
                                <div class="text-danger mt-2">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                            <!-- Username -->
                        <div class="mb-4 d-flex flex-column">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" required value="{{old('username')}}" autofocus>
                            @error('username')
                                <div class="text-danger mt-2">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
            
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
            
                        <!-- Password -->
                        <div class="mb-4 d-flex flex-column">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" required autocomplete="new-password">
                            @error('password')
                                <div class="text-danger mt-2">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
            
                        <!-- Confirm Password -->
                        <div class="mb-4 d-flex flex-column">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" required>
                            @error('password_confirmation')
                                <div class="text-danger mt-2">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4 d-flex flex-column">
                                <button class="btn btn-dark" type="submit">Create new account</button>
                        </div>
                        
    
    
                        <div class="mb-4">
                            <hr>
                        </div>

                        <div class="d-flex justify-content-center">
                            <a href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
                        </div>
                    
                </form>
            </div>
        </div>
    </div>
    </div>
            
        
        
    
    </x-guest-layout>
