@extends('app')

@section('title', 'About Us |' .config('app.name'))

<img src="{{asset('imageslaravel/paris.jpg') }}" alt="paris">
@section('content')
 <p>Built with &hearts; by LES TEACHERS DU NET.</p>

  <p><a href="{{route('home')}}">Revenir à la page d'accueil</a></p>
@endsection

