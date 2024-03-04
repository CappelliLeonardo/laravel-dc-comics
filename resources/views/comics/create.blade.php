@extends('layouts.app')

@section('page-title', 'Create il tuo comic')

@section('main-content')

{{-- @dd($errors); --}}

<div class="row">
    <div class="col py-4">
        <div class="mb-4">
            <a href="{{ route('comics.index') }}" class="btn btn-primary">
                Torna a tutti i comics
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
        
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo" maxlength="64" value="{{ old('title') }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description </label>
                <input value="{{ old('description') }}" type="text" class="form-control" id="description" name="description" placeholder="Inserisci la descrizione" maxlength="1024" required>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">IMG url</label>
                <input value="{{ old('thumb') }}" type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci il tipo..." maxlength="1024" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input value="{{ old('price') }}" type="text" class="form-control" id="price" name="price" placeholder="Inserisci l'url" min="1" max="20">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input value="{{ old('series') }}" type="text" class="form-control" id="series" name="series" placeholder="Inserisci la dserie" max="64">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di uscita</label>
                <textarea  type="date" class="form-control" id="sale_date" name="sale_date" rows="1" placeholder="Inserisci la data">value="{{ old('sale_date') }}"</textarea>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Tipologia<span class="text-danger"></span></label>
                <input value="{{ old('type') }}" type="text" class="form-control" id="type" name="type" placeholder="Inserisci la tipologia" maxlength="64" required>
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artisti<span class="text-danger"></span></label>
                <input value="{{ old('artists') }}" type="text" class="form-control" id="artists" name="artists" placeholder="Inserisci l'artista " maxlength="1000" required>
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Scrittori<span class="text-danger"></span></label>
                <input value="{{ old('writers') }}" type="text" class="form-control" id="writers" name="writers" placeholder="Inserisci gli scritori" maxlength="1000" required>
            </div>

            <div>
                <button type="submit" class="btn btn-success w-100">
                    + Aggiungi
                </button>
            </div>

        </form>
    </div>
</div>
@endsection