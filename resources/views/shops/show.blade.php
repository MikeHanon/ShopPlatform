@extends('layouts.app')

@section('content')
    <h1 class="text-3xl text-green-500 mb-3 "> {{ $shop->name }}</h1>

 
        <div class="px-2 py-3 mb-3 shadow-sm hover:shadow-md rounded border border-gray-300"> 
        <span class="mt-1 text-sm text-gray-500">{{$shop->opening}}h00 - {{$shop->closing}}h00</span>
            <div class="my-3 flex items center">
                <span class="p-1 bg-green-300 rounded-full mr-1 text-sm"> online</span>
                <p class=" ml-2 text-sm text-gray-500">{{$shop->category}}</p>
            </div>
              
               <p class="text-md text-gray-800">{{$shop->presentation}}</p>
           
        </div>
   
@endsection