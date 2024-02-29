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
                                {{ $singleComic->price}}
                                {{ $singleComic->series}}
                            </li>
                            <li>
                                {{ $singleComic->sale_date }}
                                {{ $singleComic->type }}
                            </li>
                        </ul>
                        <p>
                            {{ $singleComic->artists }}
                        </p>
                        
                        <a href="{{ route ('comics.show', ['comic' => $singleComic->id]) }}" class="btn btn-primary">Scopri descrizione e autori</a>
                        </div>
                    </div>
            </div>
        }
        @endforeach
    </div>

</div>
@endsection