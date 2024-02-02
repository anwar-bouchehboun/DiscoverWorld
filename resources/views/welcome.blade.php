@extends('layouts.home')
@section('title', 'DiscoverWorld')
{{-- section hero --}}
@section('content')
<section>
    <div class="py-3 sm:py-32 bg-gradient-to-r from-cyan-300 to-blue-100" style="background-image: url(https://readymadeui.com/dark-bg-image.webp); background-size: cover; background-repeat: no-repeat">
        {{-- <div>
            <h1 class="pb-6 text-6xl text-center text-white">DISCOVER WORLD</h1>

        </div>
        <div class="px-6 py-20 mx-auto bg-sky-950 max-w-7xl lg:px-8">
            <dl class="grid grid-cols-1 text-center gap-x-8 gap-y-16 lg:grid-cols-3">
              <div class="flex flex-col max-w-xs pb-3 px-10 mx-auto rounded shadow-[02px_10px-3px_rgba(6,81,237,0.3)]
              gap-y-4   bg-sky-900">
                <dt class="text-5xl text-white textleading-7">Adventure</dt>
                <img src="/storage/recit/icons8-trekking-100.png" width="100px" alt="" srcset="" class="mx-auto">

                <dd class="order-first text-3xl font-semibold tracking-tight text-white sm:text-5xl">{{$countRecit}}</dd>
              </div>
              <div class="flex flex-col max-w-xs pb-3 mx-6 rounded shadow-[02px_10px-3px_rgba(6,81,237,0.3)]
              gap-y-4   bg-sky-900">
                <dt class="text-5xl text-white textleading-7">Destination</dt>
                <img src="/storage/recit/d.png" width="100px" alt="" srcset="" class="mx-auto">

                <dd class="order-first text-3xl font-semibold tracking-tight text-white sm:text-5xl">{{$count}}</dd>
              </div>
              <div class="flex flex-col max-w-xs pb-3 mx-6 rounded shadow-[02px_10px-3px_rgba(6,81,237,0.3)]
              gap-y-4   bg-sky-900">
                <dt class="text-5xl text-white textleading-7">Users Actif</dt>
                <img src="/storage/recit/users.png" width="100px" alt="" srcset="" class="mx-auto">

                <dd class="order-first text-3xl font-semibold tracking-tight text-white sm:text-5xl">
                  {{$Users}}
              </dd>
              </div>
            </dl>
        </div> --}}
        <div class="relative max-w-5xl px-4 mx-auto mt-16 text-center sm:px-10"  >
            <h1 class="lg:text-7xl md:text-6xl text-4xl font-bold mb-6 md:!leading-[80px] text-white">Welcome To Platform For  Adventure</h1>
            <p class="text-base text-white">where thrilling escapades and captivating narratives await! Embark on a journey into the realms of imagination and exploration as you delve into a world brimming with excitement and wonder..</p>
            <div class="grid items-center gap-6 mt-16 sm:grid-cols-3">
              <div class="flex flex-col items-center p-5 text-center rounded bg-sky-900">
                <h5 class="mb-2 text-2xl font-bold text-blue-600">{{$countRecit}}</h5>
                <img src="/storage/recit/icons8-trekking-100.png" width="100px" alt="" srcset="" class="mx-auto">

                <p class="text-5xl text-white textleading-7">Adventure</p>
              </div>
              <div class="flex flex-col items-center p-5 text-center rounded bg-sky-900">
                <h5 class="mb-2 text-2xl font-bold text-blue-600">{{$count}}</h5>
                <img src="/storage/recit/d.png" width="100px" alt="" srcset="" class="mx-auto">

                <p class="text-5xl text-white textleading-7">Destination</p>
              </div>
              <div class="flex flex-col items-center p-5 text-center rounded bg-sky-900">
                <h5 class="mb-2 text-2xl font-bold text-blue-600"> {{$Users}}</h5>
                <img src="/storage/recit/users.png" width="100px" alt="" srcset="" class="mx-auto">

                <p class="text-5xl text-white textleading-7">Users</p>
              </div>
            </div>
     </div>
</section>
{{-- cards --}}
<section class="pt-10 lg:pt-[80px] pb-10 lg:pb-20 bg-[#F3F4F6]">
    <form action="{{ route('filter.adventures') }}" method="get">
        <div class="flex flex-col gap-2 mx-32 lg:w-1/2 xl:w-1/3 md:flex-row">
            <div>
                <select name="city" class="block w-56 p-2 mt-1 border border-gray-300 rounded-md md:w-96" onchange="this.form.submit()">
                    <option value="" selected  >Choose City</option>
                    @foreach ($destination as $recit)
                        <option value="{{ $recit->id }}" {{ old('city') == $recit->id ? 'selected' : '' }}>
                            {{ $recit->destination }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

    </form>


         <form action="{{route('filter')}}" method="get" class="">
            <div class="flex mt-4 mx-28">
              <select name="datefilter" class="block w-56 p-2 mt-1 border border-gray-300 ms-3 md:w-96">
                <option value="all">All</option>
                <option value="recentes">Recentes</option>
                <option value="anciennes">Anciennes</option>
              </select>
              <button type="submit" value="asc" class="px-4 py-2 mt-1 text-white bg-blue-500 ">Filtrer</button>
            </div>
         </form>

        </div>




    <div class="p-4" >
     <h1 class="text-5xl font-bold tracking-tight text-center text-gray-900 sm:text-6xl"><em ></em> ADVENTURES <em class=" text-cyan-500"></em></h1>
    </div>

    <div class="container flex flex-wrap">
        @if($Adventure)
        @foreach ( $Adventure as $item )


        <div class="w-full px-4 mb-8 md:w-1/2 xl:w-1/3 group">
            <div class="overflow-hidden transition-all duration-300 transform bg-white rounded-lg group-hover:scale-105 hover:bg-blue-400 hover:text-teal-900">
                <div class="p-8 text-center sm:p-9 md:p-7 xl:p-9">
                    <h3 class="mb-4 text-xl font-semibold text-dark sm:text-2xl md:text-xl lg:text-2xl xl:text-xl 2xl:text-2xl hover:text-teal-900">
                        {{$item->title}}
                    </h3>
                    {{-- <h3 class="font-bold text-cyan-800">{{$item->user->name}}</h3> --}}
                    <span class="font-medium">Paye: {{$item->paye}} $</span>
                    <h4 class="font-semibold">Destination: <em class="text-blue-950">{{$item->city->destination}}</em></h4>
                    <h5 class="mb-2 font-serif font-italic">{{$item->created_at}}</h5>
                    <a href="{{ route('adventure.show', $item) }}" class="inline-block py-2 px-7 border border-[#2f4b82] rounded-full text-base text-body-color font-medium hover:border-primary hover:bg-primary hover:text-teal-800 transition">
                        CHECK infos
                    </a>
                </div>
            </div>
        </div>


        @endforeach
        @else
        <div class="mx-auto my-8 text-center">
            <h1 class="text-3xl font-bold text-gray-800 ">No adventures available</h1>
            <p class="mt-2 text-gray-600">Sorry, there are no adventures to display at the moment.</p>
        </div>

    @endif

    </div>

 </section>
@endsection








































