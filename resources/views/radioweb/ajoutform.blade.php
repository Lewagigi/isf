@extends('modele')

@section('contents')

    <form action="{{route('artiste')}}" method="post" class="form-example">
        @csrf
        <div class="form-example">
            <label for="Nom">Entrer un Nom de L'artiste </label>
            <input type="text" name="Nom" id="id" required>
        </div>
        <div class="form-example">
            <label for="name">Entrer un Prenom </label>
            <input type="text" name="Titre" id="id" required>
        </div>

        <div class="form-example">
            <input type="submit" value=" Ajouter Un Artiste">
        </div>

    </form>


@endsection

