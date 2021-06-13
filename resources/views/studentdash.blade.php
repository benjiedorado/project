@extends('layouts.sidenav_student')
@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
        <a href="{{ route('joins.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">JOIN</a><br><br>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <ol class="JwPp0e">
                        @foreach($student as $students)
                            <li class="gHz6xd Aopndd rZXyy">
                                <div class="Tc9hUd DShyMc-MzM0MTAxMjg5MjYz">
                                    <div class="O7utsb bFjUmb-Tvm9db"></div>
                                    <div class="OjOEXb Gf8MK">
                                        <img  class="OjOEXb Gf8MK" src="{{ asset('classroom_thumbnail.jpg') }}" alt="">
                                    </div>
                                    <div class="R4EiSb">
                                        <a href="{{  route('stream.stream',$students->teacher_class_id )}}" class="onkcGd ZmqAt"></a>
                                        <h2 class="prWPdf">
                                            <a href="{{  route('stream.stream',$students->teacher_class_id )}}" class="onkcGd kj3hr YVvGBb" >
                                                <div class="YVvGBb csjh4b"><h1>{{ $students->classname }}</h1></div>

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

{{--                 @foreach($student as $students)--}}
{{--                  --}}{{-- <img src ="{{ asset('thumbnail.jpg') }}" width="200" height="200" class="img-polaroid"> --}}
{{--                     <a href="{{  route('stream.stream',$students->teacher_class_id )}}">--}}
{{--                     <div class="box">--}}
{{--                  <img src ="{{ asset('thumbnail.jpg') }}" width="200" height="200" class="img-polaroid">--}}
{{--                  <div class="text">--}}
{{--                  <h1>{{ $students->classname }}</h1>--}}
{{--                      </div>--}}
{{--                </div>--}}

{{--                     </a>--}}
{{--                     <br>--}}
{{--                    @endforeach--}}
{{--                </div>--}}


            </div>
        </div>
    </div>

</x-app-layout>
@endsection
