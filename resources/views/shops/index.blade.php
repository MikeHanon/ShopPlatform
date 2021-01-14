@extends('layouts.app')

@section('content')
    <h1 class="text-3xl text-green-500 mb-3 "> Nos Magasins</h1>

    <div class="grid grid-cols-4">
    @foreach ($shops as $shop)
    <livewire:shop :shop="$shop">
    @endforeach
    </div>
@endsection