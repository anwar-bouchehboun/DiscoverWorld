@extends('layouts.home')
{{-- section hero --}}
@section('content')
    <section>
        <div class="py-3 sm:py-32 bg-gradient-to-r from-cyan-300 to-blue-100">
            <div>
                <h1 class="pb-6 text-6xl text-center text-white">DISCOVER WORLD</h1>

            </div>
            <div class="px-6 py-20 mx-auto bg-sky-950 max-w-7xl lg:px-8">
                <dl class="grid grid-cols-1 text-center gap-x-8 gap-y-16 lg:grid-cols-3">
                    <div class="flex flex-col max-w-xs mx-auto gap-y-4">
                        <dt class="text-base leading-7 text-white">Transactions every 24 hours</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-white sm:text-5xl">44 million</dd>
                    </div>
                    <div class="flex flex-col max-w-xs mx-auto gap-y-4">
                        <dt class="text-base leading-7 text-white">Assets under holding</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-white sm:text-5xl">$119 trillion
                        </dd>
                    </div>
                    <div class="flex flex-col max-w-xs mx-auto gap-y-4">
                        <dt class="text-base leading-7 text-white ">New users annually</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-white sm:text-5xl">46,000</dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>
    {{-- cards --}}
    <section class="pt-10 lg:pt-[80px] pb-10 lg:pb-20 bg-[#F3F4F6]">
        <div class="p-4">
            <h1 class="text-5xl font-bold tracking-tight text-center text-gray-900 sm:text-6xl"><em></em>SHOW ADVENTURES <em
                    class=" text-cyan-500"></em></h1>
        </div>
        <div class="container p-6 mx-auto">
            <div class="mx-auto overflow-hidden bg-white rounded-lg shadow-lg ">
                <h2 class="mx-auto my-3 text-6xl font-semibold text-center border-b-4 border-l-4 border-blue-500 ">{{ $recit->title }}</h2>
                <div class="flex flex-wrap justify-center gap-2">
                    @foreach ($images as $image)
                        <img src="/storage/{{$image->image}}  " class="" width="350px" alt="adventure image">
                        @endforeach
                </div>
                <div class="p-6">

                    <p class="text-center text-gray-700 ">{{ $recit->conseils }}</p>
                    <p class="text-center text-blue-500">{{ $recit->city->destination }}</p>
                    <h3 class="text-center text-gray-800">{{ $recit->user->name }}</h3>
                </div>
            </div>
        </div>

    </section>
@endsection
