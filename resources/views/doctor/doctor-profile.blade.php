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
                        
                    <img class="h-16 shadow-lg rounded-md" src="{{asset('images/storage/'.$doc->image)}}" alt="profile image"> 
                    <h1>{{$doc->User->username}}</h1>
                    <p>{{$doc->User->email}}</p>
                    <p class="text-green-400">{{$doc->disponibility}}</p>
                    <p>{{$doc->description}}</p>
                    

                       
                </div>
            </div>
        </div>
    </div>
</x-app-layout>