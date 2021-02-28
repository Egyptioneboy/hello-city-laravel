@extends('app')

@section('title', env('APP_NAME'))
@section('content')

       <img src="{{asset('imageslaravel/flagFrance.jpg')}}" alt="franceFlag" class=rounded mt-12 shadow-md h-32>



       <h1 class ="mt-5 text-3xl sm:text-5xl  font-semibold text-indigo-600">Hello from Paris!</h1>

        <p class="mb-5 text-lg text-gray-800">It's currently {{ date('h:i A' ) }}.</p>
   
@endsection