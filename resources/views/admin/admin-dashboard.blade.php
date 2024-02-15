@include("../includes/head")
<body class="bg-[#f3f4f6]">

  <x-app-layout>


    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Welcome admin
      </h2>
    </x-slot>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900">
            <div class="container mx-auto ">
              <!-- Create Form -->
              <div class="mb-4">
                <p>Create a speciality</p>
                <form action="{{ route('Speciality.store')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <input type="text" name="speciality" placeholder="speciality" class="border rounded py-2 px-4">

                  <button type="submit" class="bg-[#4338ca] hover:shadow-lg text-white font-bold py-2 px-4 rounded">
                    Create
                  </button>
                </form>
              </div>

              <!-- Table -->
              <table class="min-w-full">
                <!-- Table header -->
                <thead>
                  <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Actions</th>
                  </tr>
                </thead>
                <!-- Table body -->
                <tbody>
                  <!-- Table rows -->

                  @foreach($specialities as $speciality)
                  <tr>
                    <td class="border px-4 py-2">{{$speciality->id}}</td>
                    <td class="border px-4 py-2">{{$speciality->speciality_name}}
                      <input hidden id="spec_input" type="text" name="id" value="{{$speciality->speciality_name}}">
                    </td>
                    <td class="border px-4 py-2">
                      <!-- CRUD actions -->
                      <button href="" value="{{$speciality->id}}" class="edit-btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Edit
                      </button>
                      <form class="" action="{{ route('Speciality.destroy',['Speciality' => $speciality->id])}}" method="post">
                        @csrf
                        @method('DELETE')

                        <input hidden id="spec_input" type="text" name="id" value="{{$speciality->speciality_name}}">
                        <button  onclick="return confirm('Are you sure to delete?')" class="bg-[#ef4444] text-white font-bold py-2 px-4 rounded">
                          Delete
                        </button>
                      </form>
                    </td>
                  </tr>
                  @endforeach


                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900">
            <div class="container mx-auto ">
              <!-- Create Form -->
              <div class="mb-4">
                <p>Create a medicine</p>
             <form action="{{route('medicine.store')}}" enctype="multipart/form-data" method="post">
              @csrf
              
             <input type="text" name="medicine" placeholder="medicine" class="border rounded py-2 px-4">

            <button type="submit" class="bg-[#4338ca] hover:shadow-lg text-white font-bold py-2 px-4 rounded">
              Create
            </button>
             </form>
              </div>

              <!-- Table -->
              <table class="min-w-full">
                <!-- Table header -->
                <thead>
                  <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Name</th>

                    <th class="px-4 py-2">Actions</th>
                  </tr>
                </thead>
                <!-- Table body -->
                <tbody>
                  <!-- Table rows -->
                 @foreach($medicines as $medicine)
                  <tr>
                    <td class="border px-4 py-2">{{$medicine->id}}</td>
                    <td class="border px-4 py-2">{{$medicine->medic_name}}</td>

                    <td class="border px-4 py-2">
                      <!-- CRUD actions -->
                      <button  value="{{$medicine->id}}" class="edit-btn1 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Edit
                      </button>
                      <form action="{{route('medicine.destroy',['medicine' => $medicine->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure to delete?')" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            Delete
                        </button>
                      </form>
                    </td>
                  </tr>
                  @endforeach

                  <!-- Add more rows as needed -->
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div id="modal1" class="hidden min-w-screen h-screen animated fadeIn faster   fixed  left-0 top-0  inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover">
      <form id="edit-form1" action="{{ route('medicine.update',['medicine' => $medicine->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="absolute border border-[#4338ca] z-20 md:w-1/3 sm:w-full rounded-lg shadow-lg bg-white mx-auto ">
          <div class="flex justify-between border-b border-gray-100 px-5 py-4">
            <div>
              <i class="fas fa-exclamation-circle text-blue-500"></i>
              <span class="font-bold text-[#4338ca] text-lg">Edit</span>
            </div>

          </div>

          <div class="px-10 py-5 text-gray-600">
            <input hidden id="targeted_spec1" type="text" name="id" value="">
            <input type="text" name="medicine" placeholder="medicine" class="border rounded py-2 px-4">
          </div>

          <div class="px-5 py-4 flex justify-end">
            <button type="submit" id="saveChanges" class="text-sm py-2 px-3 text-gray-500 hover:text-gray-600 transition duration-150">Save</button>
      </form>
      <a href="{{route('medicine.index')}}" id="closeModalBtn1" class="text-sm py-2 px-3 text-gray-500 hover:text-gray-600 transition duration-150">Close</a>
    </div>
    </div>
    </div>
    <div id="modal" class="hidden min-w-screen h-screen animated fadeIn faster   fixed  left-0 top-0  inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover">
      <form id="edit-form" action="{{ route('Speciality.update',['Speciality' => $speciality->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="absolute border border-[#4338ca] z-20 md:w-1/3 sm:w-full rounded-lg shadow-lg bg-white mx-auto ">
          <div class="flex justify-between border-b border-gray-100 px-5 py-4">
            <div>
              <i class="fas fa-exclamation-circle text-blue-500"></i>
              <span class="font-bold text-[#4338ca] text-lg">Edit</span>
            </div>

          </div>

          <div class="px-10 py-5 text-gray-600">
            <input hidden id="targeted_spec" type="text" name="id" value="">
            <input type="text" name="Speciality" placeholder="speciality" class="border rounded py-2 px-4">
          </div>

          <div class="px-5 py-4 flex justify-end">
            <button type="submit" id="saveChanges" class="text-sm py-2 px-3 text-gray-500 hover:text-gray-600 transition duration-150">Save</button>
      </form>
      <a href="{{route('Speciality.index')}}" id="closeModalBtn" class="text-sm py-2 px-3 text-gray-500 hover:text-gray-600 transition duration-150">Close</a>
    </div>
    </div>
    </div>


    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/main1.js') }}"></script>
  </x-app-layout>
</body>