
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Submitted Work') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    @if (session('grade'))
                        <div class="px-4 py-3 leading-normal text-green-700 bg-green-100 rounded-lg" role="alert">
                            <p class="font-bold"> {{ session('grade') }}</p>

                        </div>
                    @endif
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">File Name</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Submitted by</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Grade</th>


                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Delete</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">

                        @foreach($query as $query)
                            <tr>

                               <td class="px-6 py-4 whitespace-nowrap"> <a href="{{  route('download.submit.work',$query->fname) }}">{{ $query->fname }}</a> </td>
                                <td>{{ $query->firstname }} {{ $query->lastname }}</td>

                                <form action="{{ route('submit.grade',$query->assignment_id) }}" method="POST">
                                    @csrf
                                 <td class="px-6 py-4 whitespace-nowrap"><input type="text" name="grade"
                                    class="w-12 rounded-md" value="{{ $query->grade }}"/></td>
                                <td>
                                <x-button class="ml-4">
                                    {{ __('Submit') }}
                                </x-button>

                                </form>
                            </td>
                            </tr>

                        </tbody>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>


