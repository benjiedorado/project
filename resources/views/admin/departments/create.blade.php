
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
                        <form action="{{route('departments.store')}}" method="POST">
                            @csrf
                            <div class="mt-4">
                                <x-label for="department_name" :value="__('Department')" />

                                <x-input id="department_name" class="block mt-1 w-full" type="text" name="department_name" :value="old('department_name')" required />
                            </div>
                            <div class="mt-4">
                                <x-label for="person_in_charge" :value="__('Person In Charge')" />

                                <x-input id="dean" class="block mt-1 w-full" type="text" name="dean" :value="old('dean')" />
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
