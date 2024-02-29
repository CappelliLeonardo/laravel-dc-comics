@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<h1>
    Laravel Start 1
</h1>

<a href="{{ route ('comics.index') }}"> Vai a tutti i comic </a>
<br>

<a href="{{ route ('comics.create') }}"> Crea il tuo comic da sogno </a>


@endsection
