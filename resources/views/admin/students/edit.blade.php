
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
                        <form action="{{route('students.update',$student->student_id)}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="mt-4">
                                <x-label for="id_number" :value="__('ID Number')" />

                                <x-input id="id_number" class="block mt-1 w-full" type="text" name="id_number" :value="$student->username" required />
                            </div>
                            <div class="mt-4">
                                <x-label for="firstname" :value="__('First Name')" />

                                <x-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="$student->firstname" />
                            </div>
                            <div class="mt-4">
                                <x-label for="lastname" :value="__('Last Name')" />

                                <x-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="$student->lastname" />
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
