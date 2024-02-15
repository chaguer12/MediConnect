<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome {{$doc->User->username}}!
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <div class="flex items-center space-x-4">
                    <img class="h-16 shadow-lg rounded-md" src="{{asset('images/storage/'.$doc->image)}}" alt="profile image">
                    <div>
                        <h1 class="ml-4 text-xl font-bold">{{$doc->User->username}}</h1>
                        <p class="ml-4 text-gray-600">{{$doc->User->email}}</p>
                        <p class="ml-4 text-gray-600">{{$doc->Speciality->speciality_name}}</p>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-lg font-semibold">{{$doc->disponibility}}</p>
                    <p class="mt-2">{{$doc->description}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>