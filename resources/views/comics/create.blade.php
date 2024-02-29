@extends('layouts.app')

@section('page-title', 'Create il tuo comic')

@section('main-content')


<div class="row">
    <div class="col py-4">
        <div class="mb-4">
            <a href="{{ route('comics.index') }}" class="btn btn-primary">
                Torna a tutti i comics
            </a>
        </div>
        
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo" maxlength="1024">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description </label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Inserisci la descrizione" maxlength="64" required>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">IMG url</label>
                <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci il tipo..." maxlength="1024" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Inserisci l'url" min="1" max="20">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la dserie" min="100" max="5000">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di uscita</label>
                <textarea type="date" class="form-control" id="sale_date" name="sale_date" rows="1" placeholder="Inserisci la data"></textarea>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Tipologia<span class="text-danger"></span></label>
                <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci la tipologia" maxlength="64" required>
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artisti<span class="text-danger"></span></label>
                <input type="text" class="form-control" id="artists" name="artists" placeholder="Inserisci l'artista " maxlength="1000" required>
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Scrittori<span class="text-danger"></span></label>
                <input type="text" class="form-control" id="writers" name="writers" placeholder="Inserisci gli scritori" maxlength="1000" required>
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