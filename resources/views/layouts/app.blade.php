<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="/storage/recit/DiscoverWorld-removebg-preview.png" type="image/x-icon">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="bg-gray-100 ">
            @include('layouts.navigation')

            <!-- Page Heading -->
            {{-- @if (isset($header)) --}}
                {{-- <header class="bg-white shadow">
                    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header> --}}
            {{-- @endif --}}
   </div>
            <!-- Page Content -->
            <main >
                {{ $slot }}
            </main>

    </body>
    <script>
  var container = document.getElementById('image-container');

function addImage() {
  var newInput = document.createElement('input');
  newInput.type = 'file';
  newInput.name = 'images[]'; // Use 'images[]' to match the existing input
  newInput.required = true;
  newInput.classList.add('block', 'py-[8px]', 'outline-none', 'w-full', 'bg-white', 'rounded-lg', 'text-sm', 'text-slate-500', 'file:mr-4', 'file:py-2', 'file:ml-2', 'file:px-4', 'file:rounded-md', 'file:border-0', 'file:text-sm', 'file:font-semibold', 'file:bg-blue-50', 'file:text-blue-700', 'hover:file:bg-blue-100');

  container.appendChild(newInput);
}
    </script>


</html>
