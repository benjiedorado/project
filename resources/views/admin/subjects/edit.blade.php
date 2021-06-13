
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
                    <form action="{{ route('subjects.update',$subject->subject_id) }}" method="POST">
                        @method('PATCH')
                        @csrf

                        <div class="mt-4">
                            <x-label for="subject_code" :value="__('SubjectCode')" />

                            <x-input id="subject_code" class="block mt-1 w-full" type="text" name="subject_code" :value="$subject->subject_code" required />
                        </div>
                        <div class="mt-4">
                            <x-label for="subject_title" :value="__('SubjectTitle')" />

                            <x-input id="subject_title" class="block mt-1 w-full" type="text" name="subject_title" :value="$subject->subject_title" />
                        </div>
                        <div class="mt-4">
                            <x-label for="units" :value="__('Number of Units')" />

                            <x-input id="units" class="block mt-1 w-full" type="text" name="units" :value="$subject->unit" />
                        </div>
                        <div class="mt-4">
                            <x-label for="description" :value="__('Description')" />

{{--                                                            <x-input id="room" class="block mt-1 w-full" type="text" name="room" :value="old('room')" />--}}
                            <textarea id="description" name="description" class="resize-x  border rounded-md" >{{ $subject->description }}</textarea>
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
