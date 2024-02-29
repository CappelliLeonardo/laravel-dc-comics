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
                        <p class="card-text">{{ $singleComic->description }}</p>
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
                        <p>
                            {{ $singleComic->writers }}
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
            </div>
        }
        @endforeach
    </div>

</div>
@endsection