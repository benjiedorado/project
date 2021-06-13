@extends('layouts.sublayouts.index')
@section('main')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   @foreach($people as $people)
                      <div class="flex flex-col flex-wrap ">
                          <div class="m-4">
                          @if(Auth::user()->avatar == 'default_avatars.jpg')
                              <svg xmlns="http://www.w3.org/2000/svg" class="rounded-full border border-gray-100 shadow-sm overflow-hidden w-9 h-9" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                          @else
                              <img class="rounded-full border border-gray-100 shadow-sm overflow-hidden w-9 h-9" src="{{ asset('storage/image/'. Auth::user()->avatar) }}" alt="user image" />
                          @endif
                         <div class="inline-flex">{{ $people->firstname }}</div>
                         <div class="inline-flex">{{ $people->lastname }}</div>
                          </div>
                      </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

@endsection


