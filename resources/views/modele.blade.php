<!DOCTYPE html>
<html>

<head>

<title>

</title>
    <style>
     .etat{background-color: red}
     .error{background-color: rgb(250,78,104);}
   </style>
</head>
 <body>



@section('menu')
@guest
    <a href="{{route('login')}}">Login</a>
    <a href="{{route('register')}}">Register</a>
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


