<x-app-layout>
<div class="mt-4 ">
    <button  class="inline-flex justify-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out bg-blue-800 border border-transparent rounded-md hover:bg-cyan-300 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 w-50 ms-11"><a href="{{route('poste.create')}}">Add Image</a></button>

</div>
<div class="w-[60%] mx-auto mt-7">
    <form class="">
        <div class="flex flex-wrap mb-6 -mx-3">
          <div class="px-3 mb-6 md:w-1/2 md:mb-0">
            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-first-name">
            Paye
            </label>
            <input name="Paye" class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Paye">
          </div>
          <div class="px-3 md:w-1/2">
            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-last-name">
             Conseils
            </label>
            <input name="Conseils" class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Conseils">
          </div>
        </div>
        <div class="flex flex-wrap mb-6 -mx-3">
            <div class="px-3 mb-6 md:w-1/2 md:mb-0">
              <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-first-name">
             Date Creation
              </label>
              <input name="date" class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white" id="grid-first-name" type="date" >
            </div>
            <div class="px-3 ">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-password">
                  Destination
                </label>
                <select name="Destination" id="" class="px-20 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white">
                    <option value="">SAFI</option>
                    <option value="">CASA</option>
                    <option value="">KECH</option>
                </select>

              </div>
          </div>
          <button type="submit" class="inline-flex justify-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out bg-blue-800 border border-transparent rounded-md hover:bg-cyan-300 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 w-60">Add Post</button>
        </form>
</div>




</x-app-layout>
{{-- <form action="">
    <div class="flex flex-wrap mb-6 -mx-3">
    <div >
        <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-password">
            Poste
          </label>
          <select name="Destination" id="" class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border border-red-500 rounded appearance-none focus:outline-none focus:bg-white">
              <option value="">SAFI</option>
              <option value="">CASA</option>
              <option value="">KECH</option>
          </select>
     </div>
      <div class="px-3 md:w-1/2">
        <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-last-name">
       Image
        </label>
        <input name="images[]" class="block w-full px-4 py-5 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="file" placeholder="Doe">
      </div>
    </div>
       <button type="submit" class="inline-flex justify-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out bg-blue-800 border border-transparent rounded-md hover:bg-cyan-300 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 w-80">Add Post</button>
  </form> --}}
