<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DiscoverWorld</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .social-container {
        margin: 20px 0;
    }

    .social-container a {
        border: 1px solid #1a1818;
        border-radius: 50%;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        margin: 0 5px;
        height: 40px;
        width: 40px;
    }
    </style>
</head>

<body>
    @if (Route::has('login'))
    <nav>
        <div class="flex flex-wrap items-center justify-between bg-emerald-50 md:p-0">
            <div class="px-4 w-[20%]"><a href="{{ url('/') }}"> <img src="/storage/recit/DiscoverWorld-removebg-preview.png" width="60px" alt="logo"></a></div>
            <div class="p-3 md:hidden">
                <img id="btn" class="h-6 transition-opacity duration-500 ease-in-out cursor-pointer hover:opacity-50" src="/storage/recit/Hamburger_icon.svg.png" alt="list icon">
            </div>
            <div id="menu" class="hidden md:block">
                <ul class="items-center w-screen md:w-auto md:flex">
                    <li class="p-4 border-b border-gray-600 md:border-0"><a href="{{ url('/') }}" class="font-semibold hover:text-teal-950">Home</a></li>
                    @auth
                    <li class="p-4 font-semibold hover:text-teal-950 md:border-0">
                        <a href="{{ route('poste.index') }}">Post</a>
                    </li>
                    @else
                    <li id="drp-btn" class="p-2 hover:text-teal-950">
                        <a href="{{ route('login') }}" class="inline-flex items-center px-4 py-2 font-semibold rounded ps-0">
                            <span class="pr-[0.25rem]">login</span>
                        </a>
                    </li>
                    @if (Route::has('register'))
                    <li class="p-2">
                        <a href="{{ route('register') }}" type="button" class="inline-flex items-center px-4 py-2 font-semibold rounded ps-0 hover:text-teal-950">
                            <span class="pr-[0.25rem]">Register</span>
                        </a>
                    </li>
                    @endif
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    @endif

    {{-- Section hero --}}
    @yield('content')

    <section class="bg-emerald-50">
        <div class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
            <!-- Your existing social media links -->
            <div class="text-center social-container">
                <a href="#" class=" social"><i class="text-teal-900 fab fa-facebook-f"></i></a>
                <a href="#" class=" social"><i class="text-red-900 fab fa-google-plus-g"></i></a>
                <a href="#" class=" social"><i class=" text-cyan-600 fab fa-linkedin-in"></i></a>
            </div>
            <p class="mt-8 text-base leading-6 text-center text-black">
                © 2024 DISCOVER WORLD, Inc. All rights reserved.
            </p>
        </div>
    </section>

    <script>
        const btn = document.getElementById('btn');
        const menu = document.getElementById('menu');
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        const drpbtn = document.getElementById('drp-btn');
        const drpList = document.getElementById('drp-list'); // Add id to the dropdown list
        drpbtn.addEventListener('click', () => {
            drpList.classList.toggle('hidden');
        });
    </script>
</body>
</html>
