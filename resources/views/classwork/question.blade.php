@extends('layouts.sublayouts.index')
@section('main')
    <header class="bg-white">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Question') }}
            </h2>
        </div>
    </header>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('question_store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="flex flex-col w-full bg-white overflow-x-hidden overflow-y-hidden mb-14">
                            <div class="flex w-full mx-auto px-6 py-8">
                                <div class="flex flex-col w-full h-full text-gray-900 text-xl border-none">

                                   <div class="flex flex-col flex-wrap">
                                    <div class="relative z-0 w-full mb-5 inline-flex mr-5">
                                        <input type="text" name="title" placeholder="Title" required
                                               class="pt-3 pb-2 block w-full px-0 mt-0 bg-gray-100 border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
                                        />
                                        <select name="question_type" id="qtype" class="inline-flex w-3/4">
                                            @foreach($question_type as $question)
                                                <option value="{{ $question->question_type_id }}">{{ $question->question_type }}</option>
                                            @endforeach
                                        </select>
                                    </div>



                                    <div>
                                        <textarea id="textDescription" name="description" class="w-full px-3 py-2 text-gray-700  focus:outline-none resize-none overflow-hidden h-0" rows="1" ></textarea>
                                    </div>
                                       <div class="control-group">
                                           <label class="control-label" for="inputEmail"></label>
                                           <div class="controls">
                                               <div id="opt11">
                                                   A: <input type="text" name="ans1" size="60"> <input name="answer" value="A" type="radio"><br><br>
                                                   B: <input type="text" name="ans2" size="60"> <input name="answer" value="B" type="radio"><br><br>
                                                   C: <input type="text" name="ans3" size="60"> <input name="answer" value="C" type="radio"><br><br>
                                                   D: <input type="text" name="ans4" size="60"> <input name="answer" value="D" type="radio"><br><br>
                                               </div>
                                               <div id="opt12">
                                                   <input name="correctt" value="True" type="radio">True<br /><br />
                                                   <input name="correctt"  value="False" type="radio">False<br /><br />
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                    <div class="text-left mt-0">



                                        <x-button class="mt-4 ">
                                            {{ __('Assign') }}
                                        </x-button>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection



