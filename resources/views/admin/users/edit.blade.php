
<x-app-layout>
    @extends('layouts.sidenav')
    @section('content')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form action="{{ route('users.update',$user->user_id)}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="mt-4">
                                <x-label for="firstname" :value="__('First Name')" />

                                <x-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="$user->firstname" required />
                            </div>
                            <div class="mt-4">
                                <x-label for="lastname" :value="__('Last Name')" />

                                <x-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="$user->lastname" />
                            </div>
                            <div class="mt-4">
                                <x-label for="username" :value="__('User Name')" />

                                <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="$user->username" />
                            </div>
{{--                            <div class="mt-4">--}}
{{--                                <x-label for="password" :value="__('Password')" />--}}

{{--                                <x-input id="password" class="block mt-1 w-full" type="text" name="password" :value="old('password')" />--}}
{{--                            </div>--}}
                            <x-button class="ml-3">
                                {{ __('Save') }}
                            </x-button>
                        </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
@endsection
