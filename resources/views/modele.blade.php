<!DOCTYPE html>
<html>

<head>

<title>

</title>
    <style>
     .etat{background-color: red}
     .error{background-color: rgb(250,78,104);}
   </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />


</head>
 <body>



@section('menu')
@guest
    <a href="{{route('login')}}"  style="max-width:1400px;margin-top:100px; position: relative; left: 500px">Login</a>
    <a href="{{route('register')}}" style="max-width:1400px;margin-top:100px; position: relative; left: 500px">Register</a>

@endguest

     @auth
         <a href="{{route('logout')}}">Logout</a>
         <p>{{Auth::user()}} {{Auth::id()}}</p>

     @endauth

@show
 @section('etat')
     @if($errors->any())
          <div class="error">
              <ul>
              @foreach($errors->all() as $errors)
                  <li>{{$errors}}</li>
              @endforeach
              </ul>
          </div>
@endif
 @show
@yield('contents')
</body>
</html>


