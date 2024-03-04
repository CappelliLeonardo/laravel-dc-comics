@extends('layouts.app')

@section('page-title', $comic->title.'Edit')

@section('main-content')


<div class="row">
    <div class="col py-4">
        <div class="mb-4">
            <a href="{{ route('comics.index') }}" class="btn btn-primary">
                Torna a tutti i comic
            </a>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">

            {{-- metodo put per fare aggionramento ed inviare tutto il dato assieme, tutta una riga. --}}
            @method('PUT')
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input
                    value="{{ $comic->title }}"
                    type="text"
                    class="form-control"
                    id="title"
                    name="title"
                    placeholder="Inserisci il titolo"
                maxlength="1024">
                @error('title')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror

                
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description </label>
                <textarea name="description" id="description" placeholder="Inserisci la descrizione" class="form-control" maxlength="1024"required cols="30" rows="2">
                    {{ $comic->description }}
                </textarea>

                @error('description')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">IMG url</label>
                <input
                value="{{ $comic->thumb }}"
                type="text"
                class="form-control"
                id="thumb"
                name="thumb"
                placeholder="Inserisci il tipo..."
                maxlength="1024"
                required>
                @error('thumb')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input
                value="{{ $comic->price }}"
                type="text" class="form-control" id="price" name="price" placeholder="Inserisci l'url" min="1" max="20">
                @error('price')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input
                value="{{ $comic->series }}"
                type="text" class="form-control" id="series" name="series" placeholder="Inserisci la dserie" min="100" max="5000">
                @error('series')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di uscita</label>
                <input
                    value="{{ $comic->sale_date }}"
                    type="date" class="form-control" id="sale_date" name="sale_date"
                    rows="1"
                    placeholder="Inserisci la data">
                </input>
                @error('sale_date')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Tipologia<span class="text-danger"></span></label>
                <input
                value="{{ $comic->type }}"
                type="text" class="form-control" id="type" name="type" placeholder="Inserisci la tipologia" maxlength="64" required>
                @error('type')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                @php
                    $replaceArtist= str_replace(['[', '"', '"', ']'], '', $comic['artists']);
                    // dd($replaceArtist);
                    
                @endphp
                <label for="artists" class="form-label">Artisti<span class="text-danger"></span></label>
                <input value="{{ $replaceArtist }}" type="text" class="form-control" id="artists" name="artists" placeholder="Inserisci l'artista " maxlength="1000" required>
                    @error('artists')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
            </div>

            <div class="mb-3">
                @php
                    $replaceWriters= str_replace(['[', '"', '"', ']'], '', $comic['writers']);
                    
                @endphp
                <label for="writers" class="form-label">Scrittori<span class="text-danger"></span></label>
                <input value="{{ $replaceWriters }}" type="text" class="form-control" id="writers" name="writers" placeholder="Inserisci gli scritori" maxlength="1000" required>
                @error('writers')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div>
                <button type="submit" class="btn btn-success w-100">
                    Aggiorna
                </button>
            </div>
        </form>
    </div>
</div>
@endsection