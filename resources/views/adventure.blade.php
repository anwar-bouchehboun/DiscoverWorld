@extends('layouts.home')
@section('title', 'Adventure')
{{-- section hero --}}
@section('content')
    <section>
        <div class="py-3 sm:py-32 bg-gradient-to-r from-cyan-300 to-blue-100">

            <div>
                <h1 class="pb-6 text-6xl text-center text-white">Welcome to Our Awesome Website</h1>
                <h4 class="pb-6 text-2xl text-center text-white">Discover amazing features and services that await you.</h4>

            </div>

        </div>
        {{-- <div class="relative max-w-5xl px-4 mx-auto mt-16 text-center sm:px-10">
            <h1 class="lg:text-7xl md:text-6xl text-4xl font-bold mb-6 md:!leading-[80px]">Build Landing Pages with Typeform
              Integration</h1>
            <p class="text-base text-gray-400">Embark on a gastronomic journey with our curated dishes, delivered promptly
              to your doorstep. Elevate your dining experience today. Lorem ipsum dolor sit amet, consectetur adipiscing
              elit.</p>
            <div class="grid items-center gap-6 mt-16 sm:grid-cols-3">
              <div class="flex flex-col items-center text-center">
                <h5 class="mb-2 text-2xl font-bold text-blue-600">10+</h5>
                <p>Years Experience</p>
              </div>
              <div class="flex flex-col items-center text-center">
                <h5 class="mb-2 text-2xl font-bold text-blue-600">890</h5>
                <p>Cases Solved</p>
              </div>
              <div class="flex flex-col items-center text-center">
                <h5 class="mb-2 text-2xl font-bold text-blue-600">250</h5>
                <p>Business Partners</p>
              </div>
            </div>

          </div>
        </div> --}}
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
                    <img src="/storage/{{ $image->image }}" class="object-cover h-60 w-60" alt="adventure image">
                    @endforeach
                </div>
                <div class="p-6">
                   <h2>Desination: <span class="text-blue-500 ">  {{ $recit->city->destination }}</span></h2>
                    <h3 class="text-gray-800 ">Auteur:  <span class="text-blue-500">{{ $recit->user->name }}</span></h3>
                    <p class="font-bold text-gray-700 ">{{ $recit->conseils }}</p>

                </div>
            </div>
        </div>

    </section>
@endsection
