@extends('app')

@section('title', 'About Us |' .config('app.name'))
@section('content')
<img src="{{asset('imageslaravel/paris.jpg') }}" alt="paris" class="my-12 rounded-full 
shadow-md">


 <h2 class="mb-5 text-gray-700">
      Built with <span class="text-pink-600">&hearts;</span> by LES TEACHERS DU NET.
 </h2>

  <p>
      <a href="{{route('home')}}" class="text-indigo-400 hover:text-indigo-700 underline">
      Revenir à la page d'accueil</a>
  </p>
@endsection

