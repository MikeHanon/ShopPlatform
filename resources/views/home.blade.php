@extends('layouts.app')

@section('content')
<h1>Salut {{ auth()->user()->name}}</h1>

<div class="grid grid-cols-4">
    @foreach (auth()->user()->likes as $like)
    <livewire:shop :shop="$like">
    @endforeach
    </div>
@endsection
