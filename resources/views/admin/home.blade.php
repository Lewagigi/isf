@extends('modele')

@section('contents')
    <h1>Page d' accueil admin.</h1>

    <h3>Bonjour et Bienvenue vous avez la possibilité d'ajouter un artiste suprimez un artiste et aussi modifier les artistes existants
    </h3>
      <a href="{{route('artisre')}}">Liste  des Artistes</a>
@endsection
