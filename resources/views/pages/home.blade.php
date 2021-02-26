    @extends('app')

@section('title', env('APP_NAME'))

<img src="/imageslaravel/flagFrance.jpg" alt="franceFlag">

    @section('content')

               <h1>Hello from Paris!</h1>

               <p>It's currently {{ date('h:i A' ) }}.</p>
   
     @endsection