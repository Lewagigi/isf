@extends('modele')

@section('contents')

    <form action="{{route('listedespersonnesavecledesirdetrecontacter')}}" method="post" class="form-example">
        @csrf
        <div class="form-example">
            <label for="Nom">Nom </label>
            <input type="text" name="Nom" id="id" required>
        </div>
        <div class="form-example">
            <label for="name">Email</label>
            <input type="email" name="email" id="id" required>
        </div>

        <div class="form-example">
            <input type="submit" value=" Ajouter Une personne">
        </div>

    </form>


@endsection

