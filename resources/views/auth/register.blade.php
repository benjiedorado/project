<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
                <img src="{{ asset('acandemic_logo.png') }}" class="w28 h-28 fill-current text-gray-500" alt="">
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="firstname" :value="__('Firstname')" />

                <x-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus />
            </div>

                <div>
                    <x-label for="lastname" :value="__('Lastname')" />

                    <x-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus />
                </div>

                <div class="mt-4">
                <x-label for="username" :value="__('User Name')" />

                <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required />
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
                <div class="mt-4"></div>
                <x-label for="role_id" :value="__('Register As')" />
                <select name="role_id" class="block mt-1 w-full border-gray 300
                      focus-border-indigo-500 focus-ring focus-within:ring-indigo-200
                        focus-ring-opacity-50 rounded-md shadow-sm" >
                    <option value="student">Student</option>
                    <option value="teacher">Teacher</option>
                </select>





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
</x-guest-layout>
