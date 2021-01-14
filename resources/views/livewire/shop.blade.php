<div>
    <a class="mr-20 my-5" href="#">
        <div class="px-2 py-3 mr-10 my-5 mb-3 shadow-sm hover:shadow-md rounded border border-gray-300"> 

        <img class="w-96 h-auto rounded" src="{{url('/images/SHOP.png')}}" alt="">
        <div class="flex justify-between mt-2">
            <h2 class="text-xl font-bold text-green-800">{{$shop->name}}</h2> <span class="mt-1 text-sm text-gray-500">{{$shop->opening}}h00 - {{$shop->closing}}h00</span>
            <button class="h-5 w-5 text-gray-500 focus:outline-none" wire:click="addLike">
                <svg  xmlns="http://www.w3.org/2000/svg" fill="{{$shop->isLiked() ? 'green' : 'white'}}" viewBox="0 0 24 24" stroke="green">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                  </svg>
            </button>
        </div>
        
            
            <p class=" text-sm text-gray 700">{{ $shop->CP }} {{$shop->city }}</p>
            <div class="my-3 flex items center">
                <span class="p-1 bg-green-300 rounded-full mr-1 text-sm"> online</span>
                <p class=" ml-2 text-sm text-gray-500">{{$shop->category}}</p>
            </div>
              
               <p class="text-md text-gray-800">{{$shop->presentation}}</p>
           
        </div>
    </a>
</div>
