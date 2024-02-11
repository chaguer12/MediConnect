<!-- @include('includes.head') -->
<body class="bg-[#f3f4f6]">
<!-- @include('includes.nav') -->
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
  <p >Create a speciality</p>
    <input type="text" name="speciality" placeholder="speciality" class="border rounded py-2 px-4">
    
    <button type="submit" class="bg-[#4338ca] hover:shadow-lg text-white font-bold py-2 px-4 rounded">
      Create
    </button>
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
      <tr>
        <td class="border px-4 py-2">1</td>
        <td class="border px-4 py-2">Item 1</td>
       
        <td class="border px-4 py-2">
          <!-- CRUD actions -->
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Edit
          </button>
          <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
            Delete
          </button>
        </td>
      </tr>
      <tr>
        <td class="border px-4 py-2">2</td>
        <td class="border px-4 py-2">Item 2</td>
        <td class="border px-4 py-2">
          <!-- CRUD actions -->
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Edit
          </button>
          <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
            Delete
          </button>
        </td>
      </tr>
      <!-- Add more rows as needed -->
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
  <p >Create a medicine</p>
    <input type="text" name="medicine" placeholder="medicine" class="border rounded py-2 px-4">
    
    <button type="submit" class="bg-[#4338ca] hover:shadow-lg text-white font-bold py-2 px-4 rounded">
      Create
    </button>
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
      <tr>
        <td class="border px-4 py-2">1</td>
        <td class="border px-4 py-2">Item 1</td>
       
        <td class="border px-4 py-2">
          <!-- CRUD actions -->
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Edit
          </button>
          <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
            Delete
          </button>
        </td>
      </tr>
      <tr>
        <td class="border px-4 py-2">2</td>
        <td class="border px-4 py-2">Item 2</td>
        <td class="border px-4 py-2">
          <!-- CRUD actions -->
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Edit
          </button>
          <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
            Delete
          </button>
        </td>
      </tr>
      <!-- Add more rows as needed -->
    </tbody>
  </table>
</div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

</body>