@extends('modele')
<style>
    table,
    td {
        border: 1px solid #333;
    }
    thead,
    tfoot {
        background-color: #333;
        color: #fff;
    }
</style>
@section('contents')
    <table>
        <thead>
        <tr>
            <th colspan="2">Liste des Artistes</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <a href="{{route('artiste')}}">Ajouter Un Artiste</a>
            @foreach($artistes as $artiste )
         <tr><td>{{$artiste->Nom}},{{$artiste->Titre}}<td>

                <a href="{{route('modeart',['id'=>$artiste->id])}}">Modifier</a>
                <a href="{{route('supart',['id'=>$artiste->id])}}">Suprimmer</a></td>
            @endforeach
        </tr>
        </tbody>
    </table>



@endsection

