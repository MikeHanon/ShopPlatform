<div class="inline-block relative w-60 mr-20">
   <input class="bg-gray-200 text-gray-700 border-2 focus:outline-none placeholder-gray-500 px-2 py-1 rounded-full w-60" 
   placeholder="Rechercher un magasin " type="text" wire:model="query"
   wire:keydown.arrow-down.prevent='incrementIndex'
   wire:keydown.arrow-up.prevent='decrementIndex'
   >

   <svg class="w-5 h-5 text-gray-500 absolute top-0 right-0 mr-3 mt-2 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
  </svg>

  
    @if (strlen($query) > 2)
    <div class="absolute border rounded bg-gray-100 text-md w-60 mt-1">
        @if (count($shops) > 0)
            
       
        @foreach ($shops as $index => $shop)
        <p class="p-1 {{ $index === $selectedIndex ? 'text-green-500' : ' ' }}">
            {{ $shop->name }}
        </p>
            
        @endforeach
    @else 
    <span class="text-yellow-500 p-1"> 0 résultat pour {{ $query }}</span>
@endif
 </div>
 @endif
  
</div>
