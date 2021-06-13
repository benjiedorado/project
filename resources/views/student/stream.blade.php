<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Stream') }}
        </h2>
    </x-slot>

    <div class="py-12 max-w-5xl ml-24 mr-24">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 h-60 ">
                        <img src="{{ asset('classroom_thumbnail.jpg') }}" class="w-full" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-5xl ml-24 mr-24">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 h-60 bg-cover">

{{--                    @foreach ( $announcement as $announcements )--}}
{{--                        <div class="mdc-card mdc-card--outlined w-full mb-6 " style="border:.0625rem solid #dadce0">--}}
{{--                            <div class="text-lg text-justify">--}}
{{--                                <a href="">--}}

{{--                                    <div class="py-2 ">--}}
{{--                                        <div class="flex flex-wrap tracking-wider font-semibold">{ !!$announcements->firstname!! } { !!$announcements->lastname!! }--}}
{{--                                            posted new assignment:{!! $announcements->content !!}  <i class='fas fa-file-alt' style='font-size:48px;color:red'></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}

                        @foreach ( $assignment as $assignment )
                        <div class="mdc-card mdc-card--outlined w-full mb-6 " style="border:.0625rem solid #dadce0">
                            <div class="text-lg text-justify">
                                <a href="{{ route('stream.details', ['assignment_id'=>$assignment->assignment_id, 'id'=>$id]) }}">
                                    <div class="py-2 ">
                                        <div class="flex flex-wrap tracking-wider font-semibold">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-4 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                            {{ $assignment->firstname }} {{ $assignment->lastname }}
                                            posted new assignment:{{ $assignment->title}}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach


                    @foreach($quiz as $quiz)
                            <div class="mdc-card mdc-card--outlined w-full mb-6 " style="border:.0625rem solid #dadce0">
                                <div class="text-lg text-justify">
                                    <a href="{{ route('quiz.details',['quiz_id'=>$quiz->quiz_id, 'id'=>$id])}}">
                                        <div class="py-2 ">
                                            <div class="flex flex-wrap tracking-wider font-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-4 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                                {{ $quiz->firstname }}{{ $quiz->lastname }}
                                                posted new quiz:{{ $quiz->title }}
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                    @endforeach

                    @foreach($material as $material)
                            <div class="mdc-card mdc-card--outlined w-full mb-6 " style="border:.0625rem solid #dadce0">
                                <div class="text-lg text-justify">
                                    <a href="{{ route('material.details',['material_id'=>$material->material_id, 'id'=>$id]) }}">
                                        <div class="py-2 ">
                                            <div class="flex flex-wrap tracking-wider font-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-4 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                                {{ $material->firstname }}{{ $material->lastname }}
                                                posted new material: {{ $material->title }}
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                    @endforeach

                    @foreach($question as $question)
                            <div class="mdc-card mdc-card--outlined w-full mb-6 " style="border:.0625rem solid #dadce0">
                                <div class="text-lg text-justify">
                                    <a href="{{ route('question.details',$question->question_id,$id) }}">
                                        <div class="py-2 ">
                                            <div class="flex flex-wrap tracking-wider font-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-4 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                                {{ $question->firstname }}{{ $question->lastname }}
                                                posted new question:{{ $question->title }}
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
</x-app-layout>

