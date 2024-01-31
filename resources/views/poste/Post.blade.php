<x-app-layout>
<div class="mt-4 ">
    <button  class="inline-flex justify-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out bg-blue-800 border border-transparent rounded-md hover:bg-cyan-300 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 w-50 ms-11"><a href="{{route('imagesposte.create')}}">Add Image</a></button>

</div>
<div class="w-[60%] mx-auto mt-7">
    <form action="{{ route('poste.store') }}" method="post">
        @csrf
        <div class="flex flex-wrap mb-6 -mx-3">
            <div class="px-3 mb-6 md:w-1/2 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-first-name">
                    Titre
                </label>
                <input name="title" class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Titre" value="{{ old('titre') }}">
                <x-input-error :messages="$errors->get('titre')" class="mt-2" />
            </div>
            <div class="px-3 mb-6 md:w-1/2 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-first-name">
                    Paye
                </label>
                <input name="paye" class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Paye" value="{{ old('paye') }}">
                <x-input-error :messages="$errors->get('paye')" class="mt-2" />
            </div>

        </div>
        <div class="flex flex-wrap mb-6 -mx-3">
            <div class="px-3 md:w-1/2">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-last-name">
                    Conseils
                </label>
                <input name="conseils" class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white" id="grid-last-name" type="text" placeholder="Conseils" value="{{ old('conseils') }}">
                <x-input-error :messages="$errors->get('conseils')" class="mt-2" />
            </div>
            <div class="px-3">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-password">
                    Destination
                </label>
                <select name="destinationID" id="destination" class="px-20 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white">
                    <option value="" selected disabled>Choose City</option>
                @dump($destination);



                    @foreach ($destination as $recit)

                            <option value="{{ $recit->id }}" {{ old('destination') == $recit->id ? 'selected' : '' }}>
                                {{ $recit->destination }}
                            </option>

                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('destination')" class="mt-2" />
            </div>
        </div>
        <button type="submit" class="inline-flex justify-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out bg-blue-800 border border-transparent rounded-md hover:bg-cyan-300 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 w-60">
            Add Post
        </button>
    </form>

    @if(Session::has('success'))
    <div class="relative px-4 py-3 mt-3 text-green-700 bg-green-100 border border-green-400 rounded" role="alert">
        <strong class="font-bold text-green-700">Success!</strong>
        <span class="block sm:inline">{{ Session::get('success') }}</span>

    </div>
@endif


</div>
</x-app-layout>
