<!--sidenav for creating message it include in main message page-->
<div class="hidden w-4/12 -mx-8 lg:block float-right relative top-11 mr-4 ml-4 md:max-w-full" >
    <div class="px-8">
        <div class="flex flex-col max-w-sm px-6 py-4 mx-auto bg-white rounded-lg shadow-md">
            <h2 class="mb-4 text-xl font-bold text-gray-700 ml-4">Create  Message</h2>

            <div style='border-bottom: 2px solid #eaeaea'>
                <ul class='flex cursor-pointer'>
                    <a href=""><li class='py-2 px-6 bg-white rounded-t-lg text-gray-500 bg-gray-200'>Teacher</li></a>
                    <a href="{{ route('sideNav.student') }}"><li class='py-2 px-6 bg-white rounded-t-lg '>Student</li>
                    </a>

                </ul>
            </div>
            <form action="{{ route('teacher.message.teacher.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>To:</div>

                <select name="teacher" id="" class="w-full rounded-lg mt-2 mb-2">
                    @foreach($query as $query)
                        <option value="{{ $query->teacher_id }}">{{ $query->firstname }}  {{ $query->lastname }}</option>
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
