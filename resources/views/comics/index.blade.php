@extends('layouts.app')

@section('page-title', 'comics')

@section('main-content')
<h1>
    INDEX PAGE
</h1>

<div class="container">
    <div class="row">
        
        @foreach ($comics as $singleComic){

            <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src={{ $singleComic->thumb }} alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $singleComic->title }}</h5>
                            <ul>
                                <li>
                                    {{ $singleComic->price}}  euro
                                    {{ $singleComic->series}}
                                </li>
                                <li>
                                    {{ $singleComic->sale_date }}
                                    {{ $singleComic->type }}
                                </li>
                                <li>
                                    {{ $singleComic->description }}
                                </li>
                                <li>
                                    {{ $singleComic->writers }}
                                </li>
                            </ul>
                            <p>
                                {{ $singleComic->artists }}
                            </p>
                            
                            <a href="{{ route ('comics.show', ['comic' => $singleComic->id]) }}" class="btn btn-primary">
                                Scopri descrizione e autori
                            </a>
                            <a href="{{ route ('comics.edit', ['comic' => $singleComic->id]) }}" class="btn btn-warning">
                                Modifica
                            </a>
                            <form
                                onsubmit="return confirm('Sei sicuro di voler eliminare questo fumetto?');"
                                class="d-inline-block"
                                action="{{ route('comics.destroy', ['comic' => $singleComic->id]) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    Elimina
                                </button>
                            </form>
                        </div>
                    </div>
            </div>
        }
        @endforeach
    </div>

</div>
@endsection