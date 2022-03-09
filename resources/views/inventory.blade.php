@extends('layouts.scaffold')

@section('content')
<div class="m-auto w-4/5 py-12">
  <div class="text-center">
    <h1 class="text-5xl uppercase bold text-gray-500">
      Books
    </h1>
  </div>

  <div class="pt-10">
    <a href="inventory/create" class="border-b-2 pb-2 border-dotted italic text-gray-500">
      New Listing &rarr;
    </a>
  </div>
  <div class="w-5/6 py-10">
    @foreach ($books as $book)
      <div class="m-auto">
        <div class="float-right">
          <a 
            href="inventory/{{ $book->id }}/edit" 
            class="border-b-2 pb-2 border-dotted italic text-gray-500">
            Edit &rarr;
          </a>
          <form 
            action="inventory/{{ $book->id }}"
            method="POST"
            >
            @csrf
            @method('delete')
            <button type="submit" class="border-b-2 pb-2 border-dotted italic text-gray-500 pt-3">Delete &rarr;</button>

          </form>
        </div>
        <span class="uppercase text-blue-500 font-bold text-xs italic">    
          Author: {{ $book->author }}
        </span>
        <h2 class="text-gray-500 text-5xl">
          {{ $book->title }}
        </h2>
        <p class="text-lg text-gray-500 py-3">
          Price: ${{ $book->price }}
        </p>
        <p class="text-lg text-gray-500">
          ISBN: {{ $book->ISBN }}
        </p>
        <hr class="mt-4 mb-8">
      </div>
    @endforeach
  </div>
</div>
@endsection