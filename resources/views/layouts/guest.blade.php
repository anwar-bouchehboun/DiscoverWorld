<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
        <title>@yield('title')</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
<style>
    .social-container {
	margin: 20px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}
</style>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-gray-900">
        <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
            <div class="">
                <a href="/">
                    <x-application-logo class="text-gray-500 fill-current" />
                </a>
            </div>
            <div class="flex flex-col justify-center w-full mb-2 sm:flex-row ">

                <div class="bg-sky-800 w-full sm:max-w-md  px-6 py-[10%] shadow-md ">
                    <h1 class="pb-2 text-5xl text-center text-white bold font-weight-bold"><strong> Welcome </strong></h1>
                    <div class="text-center social-container">
                        <a href="#" class=" social"><i class="text-white fab fa-facebook-f"></i></a>
                        <a href="#" class=" social"><i class="text-white fab fa-google-plus-g"></i></a>
                        <a href="#" class=" social"><i class="text-white fab fa-linkedin-in"></i></a>
                    </div>
                <p class="font-serif text-center text-white text-1xl">To keep connected with us please login with your personal info</p>
                <a href="{{url('/')}}" class="text-xl font-bold text-center ml-[45%] border-l-4 border-b-4 px-3 text-white border-neutral-300">Home</a>


                </div>

                <div class="w-full sm:max-w-md  px-6 py-[4%] bg-white shadow-md overflow-hidden">
                    <!-- Content for the second column (white background) -->
                    {{ $slot }}
                </div>

            </div>

        </div>
        </div>
    </body>
</html>
