@extends('layouts.sidenav_teacher')
@section('content')


    <x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notifications') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                      @foreach($query as $query)
                     <div class="border-solid border-black mb-6" style="border:1px solid; border-radius: 10px;">
                        <div class="p-8 rounded-xl mb-6  " >
                            {{ $query->firstname }}  {{ $query->lastname }} {!! $query->notification !!} in class
                            {{ $query->classname }}
                            <hr class="w-full my-4 ">
                           {{ $query->date_of_notification }}

                        </div>
                     </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
@endsection

