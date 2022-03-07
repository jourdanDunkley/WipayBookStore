@extends('layouts.scaffold')

@section('content')
<div class="bg-white">
  <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
    <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Books</h2>
    <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
      @foreach ($books as $book)
        <div>       
          <div class="group relative">
            <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden hover:opacity-75 lg:h-80 lg:aspect-none">
              <img src="https://shadycharacters.co.uk/wp/wp-content/uploads/2016/12/Book_IMG_1754-1-e1481474081467.jpg" alt="Front of men&#039;s Basic Tee in black." class="w-full h-full object-center object-cover lg:w-full lg:h-full">
            </div>
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-sm text-gray-700">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  {{ $book->title }}
                </h3>
                <p class="mt-1 text-sm text-gray-500">{{ $book->author }}</p>
              </div>
              <div class="float-right">
                <p class="text-sm font-medium text-gray-900">${{ $book->price }}</p>
                <p class="text-sm font-medium text-gray-900">{{ $book->inventory }} left</p>
              </div>
            </div>
          </div>
          @if(Auth::check())
            <form action="/purchase/{{ $book->id }}" method="GET">
              <button type="submit" class="mt-5 w-full bg-black hover:bg-blue-700 text-white font-bold py-2 px-4 rounded justify-self-center">Purchase</button>
            </form>
          @endif
        </div>
      @endforeach
    </div>
  </div>
</div>
@endsection