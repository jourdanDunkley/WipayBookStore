@extends('layouts.scaffold')

@section('content')
<div class="m-auto w-4/5 py-24">
  <div class="text-center">
    <h1 class="text-5xl uppercase bold text-gray-500">
      Sales
    </h1>
  </div>
  <div class="w-5/6 py-10">
    @foreach ($sales as $sale)
      <div class="m-auto">
        <span class="uppercase text-blue-500 font-bold text-xs italic">    
          Card: {{ $sale->card }}
        </span>
        <h2 class="text-gray-500 text-5xl">       
          Total: ${{ $sale->total }} {{ $sale->currency }}
        </h2>
        <p class="text-lg text-gray-700 py-6">
          Status: {{ $sale->status }} 
        </p>
        <p class="text-lg text-gray-700">
          Transaction ID: {{ $sale->transaction_id }}
        </p>
        <hr class="mt-4 mb-8">
      </div>
    @endforeach
  </div>
</div>
@endsection