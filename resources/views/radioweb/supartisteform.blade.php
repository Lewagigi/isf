@extends('modele')

@section('contents')

    <form action="{{route('supart',['id'=>$artistes->id])}}" method="post" class="form-example">
        @csrf
        <div class="form-example">
            <input type="submit" value="Supprimez!">
        </div>

    </form>


@endsection

