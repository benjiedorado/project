

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div>

    <div class="flex flex-col w-full bg-white overflow-x-hidden overflow-y-hidden mb-14">
        <div class="flex w-full mx-auto px-6 py-8">
            <div class="flex flex-col w-full h-full text-gray-900 text-xl border-none">

                <div class="relative z-0 w-full mb-5">
                    <input type="text" name="title" placeholder="Title" required
                           class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
                    />
                    <span class="text-sm text-red-600 hidden" id="error">Name is required</span>
                </div>

                <div>
                    <textarea id="textDescription" name="description" class="w-full px-3 py-2 text-gray-700  focus:outline-none resize-none overflow-hidden h-0" rows="1" ></textarea>
                </div>

                <div class="text-left mt-0">

                    <input type="file"/>

                    <x-button class="mt-4 ">
                        {{ __('Assign') }}
                    </x-button>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="container">
    @yield('classwork')
</div>
</body>
</html>

