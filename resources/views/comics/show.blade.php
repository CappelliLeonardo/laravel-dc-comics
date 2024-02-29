@extends('layouts.app')

@section('page-title', $comic->title)

@section('main-content')

<div class=" container">
    <h2>
        Descrizione
    </h2>

    <p class="card-text">{{ $comic->description }}</p>

    <h2>
        Writers
    </h2>
    <p>
        {{ $comic->writers }}
    </p>

    <a href="{{ route ('comics.index') }}"> Torna a tutti i comic </a>

</div>
@endsection
