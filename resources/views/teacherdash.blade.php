@extends('layouts.sidenav_teacher')
@section('content')
<x-app-layout>

    <x-slot name="header">
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight inline-flex">--}}
{{--            {{ __('Teacher Dashboard') }}--}}
{{--        </h2>--}}
{{--        <a href="{{ route('tclass.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">ADD</a><br><br>--}}


            <div x-data="{ show: false }">
            <div class="flex justify-center">
                <button @click={show=true} type="button" class="leading-tight bg-blue-600 text-gray-200 rounded px-6 py-3 text-sm focus:outline-none focus:border-white relative left-72">Create Class</Button>
            </div>
            <div x-show="show" tabindex="0" class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed">
                <div  @click.away="show = false" class="z-50 relative p-3 mx-auto my-0 max-w-full" style="width: 600px;">
                    <div class="bg-white rounded shadow-lg border flex flex-col overflow-hidden">
                        <button @click={show=false} class="fill-current h-6 w-6 absolute right-0 top-0 m-6 font-3xl font-bold">&times;</button>
                        <div class="px-6 py-3 text-xl border-b font-bold">Create Class</div>
                        <div class="p-6 flex-grow">

                            <form action="{{route('tclass.createclass')}}" method="POST">
                                @csrf

                                <div>
                                    <x-label for="firstname" :value="__('Class Name')" />

                                    <x-input id="firstname" class="block mt-1 w-full" type="text" name="classname" :value="old('firstname')" required autofocus />
                                </div>
                             <div>
                                 <x-label for="firstname" :value="__('Section')" />
                                 <x-input id="firstname" class="block mt-1 w-full" type="text" name="section" :value="old('firstname')" required autofocus />
                             </div>
                                <div>
                                    <x-label for="subject" :value="__('Subject')" />

                                    <x-input id="firstname" class="block mt-1 w-full" type="text" name="subject" :value="old('firstname')" required autofocus />
                                </div>
                                <div>
                                    <x-label for="room" :value="__('Room')" />

                                    <x-input id="firstname" class="block mt-1 w-full" type="text" name="room" :value="old('firstname')" required autofocus />
                                </div>
                                <div class="px-6 py-3 border-t">
                                    <div class="flex justify-end">
                                        <button @click={show=false} type="button" class="bg-gray-700 text-gray-100 rounded px-4 py-2 mr-1">Close</Button>

{{--                                        <button type="submit" class="bg-blue-600 text-gray-200 rounded px-4 py-2">Saves Changes</Button>--}}
                                        <x-button class="ml-4">
                                            {{ __('Create') }}
                                        </x-button>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
                <div class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50"></div>
            </div>
        </div>
    </x-slot>

    <ol class="JwPp0e">
        @foreach($teacher_class as $teacherclass)
            <li class="gHz6xd Aopndd rZXyy">
                <div class="Tc9hUd DShyMc-MzM0MTAxMjg5MjYz">
                    <div class="O7utsb bFjUmb-Tvm9db"></div>
                    <div class="OjOEXb Gf8MK">
                        <img  class="OjOEXb Gf8MK" src="{{ asset('classroom_thumbnail.jpg') }}" alt="">
                    </div>
                    <div class="R4EiSb">
                        <a href="{{route('tclass.show', $teacherclass->teacher_class_id )}}" class="onkcGd ZmqAt"></a>
                        <h2 class="prWPdf">
                            <a href="{{route('tclass.show', $teacherclass->teacher_class_id )}}" class="onkcGd kj3hr YVvGBb" >
                                <div class="text-3xl">{{ $teacherclass->classname }}</div>
                                <div class="YVvGBb">{{ $teacherclass->room }}</div>
                            </a>
                            <a href="#" class="onkcGd Nmpzvc"></a>
                            <div class="TQYOZc"></div>
                            <div class="SZ0kZe"></div>
                        </h2>
                    </div>
                </div>
            </li>
        @endforeach
    </ol>

</x-app-layout>
@endsection
<script>
    $(document).on('keypress',function(e) {
        if(e.which == 13) {
            //
            $("p").append(" <b>Appended text</b>.");
        }
    });
</script>
