

<x-app-layout>

    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Class') }}
        </h2>
{{--        <a href="{{ route('mystudent.index',$teacher_class->teacher_class_id ) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-flex">ADD STUDENT</a>--}}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
{{--                    <h1>{{ $teacher_class_id}}</h1>--}}
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

