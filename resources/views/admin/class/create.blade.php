
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
                        <form action="{{route('class.store')}}" method="POST">
                            @csrf
                            <div class="mt-4">
                                <x-label for="classname" :value="__('Class Name')" />

                                <x-input id="classname" class="block mt-1 w-full" type="text" name="classname" :value="old('classname')" required />
                            </div>

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