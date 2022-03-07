<x-app-layout>
  <x-slot name="header">
    <div class="flex justify-start">
      <div class="mb-3 xl:w-96">
        <form class="form-inline my-2 my-lg-0 input-group relative flex flex-row items-stretch w-full mb-4" action="{{ url('/search') }}" type="get">
          <input type="search" name="query" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Search" aria-label="Search" aria-describedby="button-addon3">
          <button class="btn inline-block px-6 py-2 border-2 border-black text-black font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" type="submit" id="button-addon3">Search</button>
        </form>
      </div>
    </div>
  </x-slot> 
  @yield('content')
</x-app-layout>

