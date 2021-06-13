@extends('layouts.sidenav_teacher')
@section('content')

    <x-app-layout>

        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <!--sidenav for creating message it include in main message page-->
        <div class="hidden w-4/12 -mx-8 lg:block float-right relative top-11 mr-4 ml-4 md:max-w-full" >
            <div class="px-8">
                <div class="flex flex-col max-w-sm px-6 py-4 mx-auto bg-white rounded-lg shadow-md">
                    <h2 class="mb-4 text-xl font-bold text-gray-700 ml-4">Create  Message</h2>

                    <div style='border-bottom: 2px solid #eaeaea'>
                        <ul class='flex cursor-pointer'>
                            <a href="{{ route('return.teacher') }}"><li class='py-2 px-6 bg-white rounded-t-lg '>Teacher</li></a>
                            <a href=""><li class='py-2 px-6 bg-white rounded-t-lg text-gray-500 bg-gray-200'>Student</li></a>
                        </ul>
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>To:</div>

                        <select name="teacher" id="" class="w-full rounded-lg mt-2 mb-2">
                            @foreach($student as $student)
                            <option value="{{ $student->student_id }}">{{ $student->firstname }}  {{ $student->lastname }}</option>
                            @endforeach
                        </select>

                        <div class="mt-2 mb-2">Content:</div>
                        <textarea name="content" id="" cols="30" rows="2" class="w-full"></textarea>
                        <br>
                        <x-button class="ml-4">
                            {{ __('Send') }}
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="flex flex-column flex-wrap mb-4 ">
                            <a href="" class="p-2 bg-blue-400 rounded-3xl">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-flex" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                Inbox
                            </a>
                            <a href="{{ route('teacher_sent_messages') }}" class="p-2 ml-1 rounded-3xl">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-flex" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>Sent Messages
                            </a>
                        </div>

                            <div class="border-solid border-black" style="border:1px solid; border-radius: 10px;">
                                <div class="p-8 rounded-xl mb-6  " >


                                    <hr class="w-full my-4 ">
                                    Send by:
                                </div>
                            </div>
                            <div x-data="{open:false}"  >
                                <div class=" relative bottom-16 mt-1 left-96 m-4 "><a @click.prevent="open = true" href="" >
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-flex mr-1" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M7.707 3.293a1 1 0 010 1.414L5.414 7H11a7 7 0 017 7v2a1 1 0 11-2 0v-2a5 5 0 00-5-5H5.414l2.293 2.293a1 1 0 11-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>Reply</a></div>

                                <div class="fixed z-auto inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="yourModal" x-show="open" >
                                    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                        <!--
                                          Background overlay, show/hide based on modal state.

                                          Entering: "ease-out duration-300"
                                            From: "opacity-0"
                                            To: "opacity-100"
                                          Leaving: "ease-in duration-200"
                                            From: "opacity-100"
                                            To: "opacity-0"
                                        -->
                                        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

                                        <!-- This element is to trick the browser into centering the modal contents. -->
                                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                                        <!--
                                          Modal panel, show/hide based on modal state.

                                          Entering: "ease-out duration-300"
                                            From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            To: "opacity-100 translate-y-0 sm:scale-100"
                                          Leaving: "ease-in duration-200"
                                            From: "opacity-100 translate-y-0 sm:scale-100"
                                            To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                        -->

                                        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                <div class="sm:flex sm:items-start ">
                                                    {{--                                                <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">--}}
                                                    {{--                                                    <!-- Heroicon name: outline/exclamation -->--}}
                                                    {{--                                                    <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
                                                    {{--                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />--}}
                                                    {{--                                                    </svg>--}}
                                                    {{--                                                </div>--}}
                                                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                                                        {{--                                                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">--}}
                                                        {{--                                                        Remove Message--}}
                                                        {{--                                                    </h3>--}}
                                                        {{--                                                    <div class="mt-2">--}}
                                                        {{--                                                        <p class="text-sm text-gray-500">--}}
                                                        {{--                                                            Are you sure you want to remove this message?--}}
                                                        {{--                                                        </p>--}}
                                                        {{--                                                    </div>--}}

                                                        <form action="" method="POST">
                                                            @csrf
                                                            <div class="mt-2 ">
                                                                <x-label for="firstname" :value="__('To:')" />

                                                                <x-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" value="" required autofocus readonly/>
                                                            </div>
                                                            <x-label for="firstname" :value="__('Content:')" />
                                                            <div>
                                                                <textarea name="content" id="" cols="20" rows="3" class="w-full" ></textarea>
                                                            </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                                <x-button class="">
                                                    {{ __('Send') }}
                                                </x-button>
                                                <button @click = "open = false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm mr-2">
                                                    Cancel
                                                </button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                            </div>
                    </div>
                </div>
            </div>
    </x-app-layout>

@endsection






