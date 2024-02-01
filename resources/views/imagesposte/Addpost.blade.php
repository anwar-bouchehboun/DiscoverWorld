<x-app-layout>

    <div class="w-[60%] mx-auto mt-7">
        <form action="{{route('imagesposte.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-6 -mx-3 ">
            {{-- <div >
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-password">
                    Recits
                  </label>
                  <select name="recit" id="" class="block px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white w-52">
                    <option value="" selected disabled>Voir Adventure</option>
                    @foreach ($recit as $adventure)
             @if ($adventure->userid == auth()->user()->id)
                        <option value="{{ $adventure->id }}" {{ old('recit') == $adventure->id ? 'selected' : '' }}>
                            {{ $adventure->title }}
                        </option>
                        @endif
                    @endforeach
                  </select>
             </div> --}}
              <div class="px-3 md:w-1/2">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-last-name">
               Image
                </label>
                <input name="images[]" class="block w-full px-4 py-5 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="file" multiple >
                <x-input-error :messages="$errors->get('images')" class="mt-2" />

            </div>

            </div>
               <button type="submit" class="inline-flex justify-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out bg-blue-800 border border-transparent rounded-md hover:bg-cyan-300 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 w-80">Add Images</button>
          </form>

          @if(Session::has('success'))
          <div class="relative px-4 py-3 mt-3 text-green-700 bg-green-100 border border-green-400 rounded" role="alert">
              <strong class="font-bold text-green-700">Success!</strong>
              <span class="block sm:inline">{{ Session::get('success') }}</span>

          </div>
      @endif

    </div>




    </x-app-layout>
