@extends('layouts.app')

@section('page-title', $comic->title)

@section('main-content')

<div class=" container">
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src={{ $comic->thumb }} alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">{{ $comic->title }}</h5>
            <ul>
                <li>
                    {{ $comic->price}}  euro
                    {{ $comic->series}}
                </li>
                <li>
                    {{ $comic->sale_date }}
                    {{ $comic->type }}
                </li>
                <li>
                    {{ $comic->description }}
                </li>
                <li>
                    {{ $comic->writers }}
                </li>
            </ul>
            <p>
                {{ $comic->artists }}
            </p>
            
            </div>
        </div>
</div>

    <a href="{{ route ('comics.index') }}"> Torna a tutti i comic </a>

</div>
@endsection
