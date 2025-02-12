<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Task List App</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="container mx-auto px-4 mt-10 mb-10 max-w-lg">
<h1 class="text-2xl mb-4">{{$title}}</h1>
    @if(session()->has('success'))
{{--        <div>{{session('success')}}</div>--}}
<div x-data="{flash:true}" class="">
    <div x-show="flash" class="relative mb-10 rounded border border-green-400 bg-green-100 px-4 py-3 text-lg text-green-700"
         role="alert">
        <strong class="font-bold">Success!</strong>
        <div>{{session('success')}}</div>

        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
               stroke-width="1.5" @click="flash = false"
               stroke="currentColor" class="h-6 w-6 cursor-pointer">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </span>
    </div>
</div>
    @endif
<div>{{$slot}}</div>
</body>
</html>
