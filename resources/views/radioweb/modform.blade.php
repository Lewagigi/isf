@extends('modele')

@section('contents')

    <form action="{{route('modeart',['id'=>$artistes->id])}}" method="post" class="form-example">
        @csrf
        <div class="form-example">
            <label for="Nom">Modifier L'Artiste </label>
            <input type="text" name="Nom" id="id" required>
        </div>
        <div class="form-example">
            <label for="name">Modifier Titre </label>
            <input type="text" name="Titre" id="id" required>
        </div>

        <div class="form-example">
            <input type="submit" value="Enregistrez!">
        </div>

    </form>

@endsection

