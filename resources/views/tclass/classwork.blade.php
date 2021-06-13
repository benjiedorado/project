@extends('layouts.sublayouts.index')
@section('main')

    <header class="bg-white">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div x-data="{show: false}" @click.away="show = false">
                <button @click="show = ! show" class="block bg-blue-600 bg-blue-600 text-gray-200 rounded-full px-6 text-sm py-3 overflow-hidden border-2 border-gray-600 focus:outline-none focus:border-white">
                    <div class="flex">
                        <span>Create</span>
                        <svg class="fill-current text-gray-200" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M7 10l5 5 5-5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                    </div>
                </button>
                <div x-show="show" class="mt-2 py-2 w-48 bg-white rounded-lg shadow-xl">
                    <a href="{{ route('classwork.assignment') }}" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Assignment</a>
                    <a href="{{ route('classwork.quiz') }}" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Quiz</a>
{{--                    <a href="{{ route('classwork.question') }}" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Question</a>--}}
                    <a href="{{ route('classwork.materials')}}" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Materials</a>
                </div>
            </div>
        </div>
    </header>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                </div>
            </div>
        </div>
    </div>
@endsection
