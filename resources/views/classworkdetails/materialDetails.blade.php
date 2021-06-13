<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Details') }}
        </h2>
    </x-slot>

    <div class="py-11 max-w-4xl ml-24 mr-24 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 ">
                    @foreach($material as $material)
                        <div class="" style="font-size: 2rem; line-height: 2.5rem;">
                            {{ $material->title }}
                        </div>
                        <div class="divide-y-4 divide-black divide-opacity-25">
                            <div class="" style="font-size: 0.875rem; line-height: 1.25rem; font-weight: 400;" >
                                {{ $material->firstname }}  {{ $material->lastname }}
                            </div>
                            <div>

                                {!! $material->desc  !!} </div>
                        </div>
                        @if($material->fname !== '')
                            <a href="{{ url('downloadfile',$material->fname) }}">
                                <div><svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    <p>{{ $material->fname }}</p>
                                </div>
                            </a>
                        @endif


                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{--    <div class="hidden w-4/12 -mx-8 lg:block float-right">--}}
    {{--        <div class="px-8">--}}
    {{--            <div class="flex flex-col max-w-sm px-6 py-4 mx-auto bg-white rounded-lg shadow-md">--}}
    {{--                <h1 class="mb-4 text-xl font-bold text-gray-700 ml-4">Private Message</h1>--}}
    {{--                <form action="{{ route('message.sent',$id) }}" method="POST" enctype="multipart/form-data">--}}
    {{--                    @csrf--}}
    {{--                    <x-input id="email" class="block mt-1 w-full ml-4" type="email" name="email" :value="old('email')" required />--}}
    {{--                    <br>--}}
    {{--                    <x-button class="ml-4">--}}
    {{--                        {{ __('Submit') }}--}}
    {{--                    </x-button>--}}
    {{--                </form>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

</x-app-layout>


