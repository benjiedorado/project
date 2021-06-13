@extends('layouts.sublayouts.index')
@section('main')
<header class="bg-white">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Class') }}
        </h2>
    </div>
</header>



<div class="py-11 max-w-5xl ml-24 mr-24 ">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200 h-60 bg-cover">
                <img src="{{ asset('classroom_thumbnail.jpg') }}" alt="" class="w-full bg-blend-color">
            </div>
        </div>
    </div>
</div>

<div class="max-w-5xl ml-24 mr-24 ">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200 bg-cover">
{{--                <h1>{{ $teacher_class->class_id }}</h1>--}}
{{--                <h1>{{ $teacher_class->teacher_class_id }}</h1>--}}
                @foreach($show as $show)
                    <div class="mdc-card mdc-card--outlined w-full mb-6 " style="border:.0625rem solid #dadce0">
                        <div class="text-lg text-justify">
                            <a href="{{ route('view.submit.work',$show->assignment_id) }}">
                                <div class="py-2 ">
                                <div class="flex flex-wrap tracking-wider font-semibold">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-4 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    {{ $show->firstname }} {{ $show->lastname }}
                                     posted new assignment: {{ $show->title }}
                                </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
                @foreach($quiz as $quiz)
                    <div class="mdc-card mdc-card--outlined w-full mb-6 " style="border:.0625rem solid #dadce0">
                        <div class="text-lg text-justify">
                            <a href="">
                                <div class="py-2 ">
                                    <div class="flex flex-wrap tracking-wider font-semibold">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-4 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        {{ $quiz->firstname }} {{ $quiz->lastname }}
                                        posted new quiz: {{ $quiz->title }}
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
                @foreach($question as $question)
                    <div class="mdc-card mdc-card--outlined w-full mb-6 " style="border:.0625rem solid #dadce0">
                        <div class="text-lg text-justify">
                            <a href="">
                                <div class="py-2 ">
                                    <div class="flex flex-wrap tracking-wider font-semibold">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-4 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        {{ $question->firstname }} {{ $question->lastname }}
                                        posted new question: {{ $question->question_title }}
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach


                @foreach($material as $material)
                    <div class="mdc-card mdc-card--outlined w-full mb-6 " style="border:.0625rem solid #dadce0">
                        <div class="text-lg text-justify">
                            <a href="">
                                <div class="py-2 ">
                                    <div class="flex flex-wrap tracking-wider font-semibold">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-4 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        {{ $material->firstname }} {{ $material->lastname }}
                                        posted new materials : {{ $material->title }}
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>

{{--<form action="{{ route('classwork.announcement.store') }}" class="class">--}}
{{--    <div class="w-3/4 ">--}}
{{--        <x-label for="title" :value="__('Announcement')" />--}}

{{--        <textarea name="title" id="textDescription" cols="30" rows="10"></textarea>--}}
{{--    </div>--}}
{{--    <br>--}}

{{--    <x-button class="ml-4">--}}
{{--        {{ __('Post') }}--}}
{{--    </x-button>--}}
{{--</form>--}}


@endsection
