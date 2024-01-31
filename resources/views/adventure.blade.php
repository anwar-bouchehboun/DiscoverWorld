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
              <dd class="order-first text-3xl font-semibold tracking-tight text-white sm:text-5xl">$119 trillion</dd>
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
    <div class="mx-auto md:w-96 lg:w-1/2 xl:w-1/3">
        <input type="date" name="date" id="date" class="block w-full p-2 mt-1 border border-gray-300 rounded-md">
      </div>

    <div class="p-4" >
     <h1 class="text-5xl font-bold tracking-tight text-center text-gray-900 sm:text-6xl"><em ></em>SHOW ADVENTURES <em class=" text-cyan-500"></em></h1>
    </div>
    <div class="container flex flex-col md:flex-row">
 hhhhhhhhhhhhhhhhhhhhh
    </div>
 </section>
@endsection
