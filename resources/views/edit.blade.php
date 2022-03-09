@extends('layouts.scaffold')

@section('content')
<div class="m-auto w-4/8 pt-20">
  <div class="text-center">
    <h1 class="text-5xl uppercase bold">
      Update Listing
    </h1>
  </div>
</div>
<div class="flex justify-center pt-20">
  <form action="/dashboard/inventory/{{ $book->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="block">
      <input 
        type="text" 
        name="title" 
        value="{{ $book->title }}"
        class="block shadow-5xl mb-5 p-2 w-80 italic placeholder-gray-400">
      <input 
        type="text" 
        name="author" 
        value="{{ $book->author }}" 
        class="block shadow-5xl mb-5 p-2 w-80 italic placeholder-gray-400">
      <input 
        type="text" 
        name="price" 
        value="{{ $book->price }}" 
        class="block shadow-5xl mb-5 p-2 w-80 italic placeholder-gray-400">
      <input 
        type="text" 
        name="ISBN" 
        value="{{ $book->ISBN }}"
        class="block shadow-5xl mb-5 p-2 w-80 italic placeholder-gray-400">
      <input 
        type="text" 
        name="inventory" 
        value="{{ $book->inventory }}"
        class="block shadow-5xl mb-5 p-2 w-80 italic placeholder-gray-400">
      <button class="bg-black text-white block shadow-5xl mb-10 p-2 w-80 uppercase font-bold" type="submit">Submit</button>
    </div>
  </form>
</div>
@endsection