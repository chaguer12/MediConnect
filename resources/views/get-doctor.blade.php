@include('includes.head')
<body class="bg-[#f3f4f6]">
@include('includes.nav')

<section class="py-16 flex justify-center">
    <div class="w-3/4 flex justify-between">
        <div class="w-3/4">
            @if($message)
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 flex">
                            <marquee class="font-bold" direction="left">{{ $message }}</marquee>
                            <marquee class="font-bold" direction="left">{{ $message }}</marquee>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <div class="py-12">
                @foreach($doctors as $doctor)
                
                    <div class="max-w-xl p-4 sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900 flex">
                                <div>
                                    <img class="h-16 shadow-lg rounded-md" src="{{ asset('images/storage/'.$doctor->image) }}" alt="profile image">
                                    <h1 class="font-bold">{{ $doctor->User->username }}</h1>
                                    <p>{{ substr($doctor->description, 0, 100) }}...</p>
                                    <p class="text-gray-500">{{ $doctor->User->email }}</p>
                                    <p class="text-sm">Member since: <span class="text-gray-500">{{ $doctor->created_at }}</span></p>
                                    <div class="flex justify-between">
                                        <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#B197FC" d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z"/></svg>
                                        <a href="{{route('doctor.show',['doctor' => $doctor->id])}}" class="text-[#4338ca] hover:border-bottom">Consult</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                @endforeach
            </div>
        </div>
        
        <div class="w-1/4">
            <!-- Section for favorite doctors -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h2 class="text-lg font-semibold mb-4">Favorite Doctors</h2>
                <!-- Add your favorite doctors list here -->
            </div>
        </div>
    </div>
</section>
@include('includes/footer')
</body>
