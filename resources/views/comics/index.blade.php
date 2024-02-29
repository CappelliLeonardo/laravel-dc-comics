@extends('layouts.app')

@section('page-title', 'comics')

@section('main-content')
<h1>
    INDEX PAGE
</h1>

@foreach ($comic as $singleComic){
    <p> {{ $singleComic->title }}</p>
}  
@endforeach
@endsection
