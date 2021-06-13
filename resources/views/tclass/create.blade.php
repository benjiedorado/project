
<x-app-layout>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form action="{{route('tclass.store')}}" method="POST">
                            @csrf
                            <div class="mt-4">
                                <x-label for="class" :value="__('Class')" />
                                <select name="class" class="block mt-1 w-full" id="state">
                                    <option value="">Class </option>
                                    @foreach ($classes as $class)
                                        <option value="{{ $class->class_id }}"> {{ $class->classname }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-4">
                                <x-label for="subject" :value="__('Subject')" />
                                <select name="subject" class="block mt-1 w-full" id="state">
                                    <option value="">Subject </option>
                                    @foreach ($subjects as $subject)
                                        <option value="{{ $subject->subject_id }}">{{  $subject->subject_title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <x-button class="ml-3">
                                {{ __('Save') }}
                            </x-button>
                        </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
