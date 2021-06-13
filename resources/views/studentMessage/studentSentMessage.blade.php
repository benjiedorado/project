@extends('layouts.sidenav_student')
@section('content')

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
@include('studentMessage.student_message_sidenav')
    <div class="py-12 md:max-w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 ">
                    <div class="flex flex-column flex-wrap mb-4 ">
                        <a href="{{ route('student_inbox_messages') }}" class="p-2 rounded-3xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-flex" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                             Inbox
                         </a>
                        <a href="{{ route('student_sent_messages') }}" class="p-2 bg-blue-400 ml-1 rounded-3xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-flex" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>Sent Messages
                        </a>
                    </div>
                 @foreach($sent_message as $message)
                    <div class="p-8 rounded-xl mb-6" style="border:1px solid; border-radius: 10px;">
                        {{ $message->content }}
                        <hr class="w-full my-4 ">
                        Send to:{{ $message->receiver_name }} {{ $message->created_at }}

                    </div>

                        <div x-data="{open:false}"  >
                            <div class=" relative bottom-16 mt-1 left-96 m-4 "><a @click.prevent="open = true" href="" >
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-flex mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>Remove</a></div>

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
                                            <div class="sm:flex sm:items-start">
                                                <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                                    <!-- Heroicon name: outline/exclamation -->
                                                    <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                                    </svg>
                                                </div>
                                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                                        Remove Message
                                                    </h3>
                                                    <div class="mt-2">
                                                        <p class="text-sm text-gray-500">
                                                            Are you sure you want to remove this message?
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <form action="{{ route('delete_message',$message->message_sent_id ) }}" method="POST">
                                            @csrf
                                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
{{--                                            <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">--}}
{{--                                                Remove--}}
{{--                                            </button>--}}
                                            <x-button class="">
                                                {{ __('Register') }}
                                            </x-button>
                                            <button @click = "open = false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                                Cancel
                                            </button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                    @endforeach


{{--                        <div x-data="{ show: false }">--}}
{{--                            <div class="flex justify-center">--}}
{{--                                <button @click={show=true} type="button" class="leading-tight bg-blue-600 text-gray-200 rounded px-6 py-3 text-sm focus:outline-none focus:border-white">Show Modal</Button>--}}
{{--                            </div>--}}
{{--                            <div x-show="show" tabindex="0" class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed">--}}
{{--                                <div  @click.away="show = false" class="z-50 relative p-3 mx-auto my-0 max-w-full" style="width: 600px;">--}}
{{--                                    <div class="bg-white rounded shadow-lg border flex flex-col overflow-hidden">--}}
{{--                                        <button @click={show=false} class="fill-current h-6 w-6 absolute right-0 top-0 m-6 font-3xl font-bold">&times;</button>--}}
{{--                                        <div class="px-6 py-3 text-xl border-b font-bold">Create Class</div>--}}
{{--                                        <div class="p-6 flex-grow">--}}
{{--                                            @foreach($queryMessage as $message)--}}
{{--                                            <form action="{{route('reply')}}" method="POST">--}}
{{--                                                @csrf--}}

{{--                                                    <input type="text" value="{{ $message->receiver_name }}"  name="receiver_name" hidden >--}}
{{--                                                    <input type="text"  name="receiver_name" value="{{ $message->sender_name }}" hidden>--}}
{{--                                                    <input type="text"  name="receiver_id" value="{{ $message->sender_id}}" hidden>--}}
{{--                                                    <input type="text"  name="sender_name" value="{{ $message->receiver_name}}" hidden>--}}
{{--                                                @endforeach--}}
{{--                                                <div>--}}
{{--                                                    <x-label for="firstname" :value="__('Send to')" />--}}

{{--                                                    <x-input id="firstname" class="block mt-1 w-full" type="text" name="sent_to" value="gello" required autofocus />--}}
{{--                                                </div>--}}

{{--                                                <div>--}}
{{--                                                    <x-label for="firstname" :value="__('Content')" />--}}
{{--                                                    <x-input id="firstname" class="block mt-1 w-full" type="text" name="content" :value="old('firstname')" required autofocus />--}}
{{--                                                </div>--}}

{{--                                                <div class="px-6 py-3 border-t">--}}
{{--                                                    <div class="flex justify-end">--}}
{{--                                                        <button @click={show=false} type="button" class="bg-gray-700 text-gray-100 rounded px-4 py-2 mr-1">Close</Button>--}}

{{--                                                        --}}{{--                                        <button type="submit" class="bg-blue-600 text-gray-200 rounded px-4 py-2">Saves Changes</Button>--}}
{{--                                                        <x-button class="ml-4">--}}
{{--                                                            {{ __('Create') }}--}}
{{--                                                        </x-button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@endsection

