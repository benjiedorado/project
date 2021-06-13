
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
                        <form action="{{route('students.store')}}" method="POST">
                            @csrf
                            <div class="mt-4">
                                <x-label for="class" :value="__('Class')" />
                                <select name="class" class="block mt-1 w-full" id="state">
                                    <option value="">Class </option>
                                    @foreach ($classes as $class)
                                        <option value="{{ $class->class_id }}">{{ $class->classname }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-4">
                                <x-label for="id_number" :value="__('ID Number')" />

                                <x-input id="id_number" class="block mt-1 w-full" type="text" name="id_number" :value="old('id_number')" required />
                            </div>
                            <div class="mt-4">
                                <x-label for="firstname" :value="__('First Name')" />

                                <x-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" />
                            </div>
                            <div class="mt-4">
                                <x-label for="lastname" :value="__('Last Name')" />

                                <x-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" />
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
