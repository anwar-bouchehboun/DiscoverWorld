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
              <dt class="text-base leading-7 text-white">Adenture "Poste"</dt>
              <dd class="order-first text-3xl font-semibold tracking-tight text-white sm:text-5xl">{{$countRecit}}</dd>
            </div>
            <div class="flex flex-col max-w-xs mx-auto gap-y-4">
              <dt class="text-base leading-7 text-white">Destination</dt>
              <dd class="order-first text-3xl font-semibold tracking-tight text-white sm:text-5xl">{{$count}}</dd>
            </div>
            <div class="flex flex-col max-w-xs mx-auto gap-y-4">
              <dt class="text-base leading-7 text-white ">Users Actif</dt>
              <dd class="order-first text-3xl font-semibold tracking-tight text-white sm:text-5xl">
                {{$Users}}
            </dd>
            </div>
          </dl>
        </div>
     </div>
</section>
{{-- cards --}}
<section class="pt-10 lg:pt-[80px] pb-10 lg:pb-20 bg-[#F3F4F6]">
    <div class="mx-auto md:w-96 lg:w-1/2 xl:w-1/3">
        <input type="date" name="date" id="date" class="block w-full p-2 mt-1 border border-gray-300 rounded-md">
      </div>

    <div class="p-4" >
     <h1 class="text-5xl font-bold tracking-tight text-center text-gray-900 sm:text-6xl"><em ></em> ADVENTURES <em class=" text-cyan-500"></em></h1>
    </div>

    <div class="container flex flex-wrap">
        @foreach ($Adventure as $item)
            <div class="w-full px-4 mb-8 md:w-1/2 xl:w-1/3">
                <div class="overflow-hidden bg-white rounded-lg">
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
    </div>

 </section>
@endsection







































    <script>
        const menubtn = document.getElementById('menu-button');
        const menu = document.getElementById('menu');
        menubtn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        const drpbtn = document.getElementById('drp-btn');
        const drpList = document.getElementById('drp-list');
        drpbtn.addEventListener('click', () => {
            drpList.classList.toggle('hidden');
        });
    </script>



