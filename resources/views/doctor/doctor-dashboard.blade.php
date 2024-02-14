<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome doctor!
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight pb-8">
                                We need more things ...
                        </h2>
                        <form action="{{route('doctor.store')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="pb-2">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload an image</label>
                                <input name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                            </div>
                            <div class="pb-2">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Write a brief description for your gig</label>
                                <textarea name="description" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">keep it simple</p>
                            </div>
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Choose a speciality</label>
                                <select id="countries" name="speciality" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Choose a speciality</option>
                                @foreach($specialities as $speciality)
                                <option value="{{$speciality->id}}">{{$speciality->speciality_name}}</option>
                               @endforeach
                                </select>
                            </div>
                            <button type="submit" class="mt-8 w-16 h-6 shadow-lg rounded-md bg-[#4338ca] px-2.5 text-white">-></button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>