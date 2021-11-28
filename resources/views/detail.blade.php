@extends('layouts.main')
@section('container')
    <main class="detail">
        <div class="detailMenu">
            <h2>Book Detail</h2>
            <p>Title: {{ $bookDetail[0]->title }}</p>
            <p>Author: {{ $bookDetail[0]->author }}</p>
            <p>Publisher: {{ $bookDetail[0]->publisher }}</p>
            <p>Year: {{ $bookDetail[0]->year }}</p>
            <p>Description:</p>
            <p>{{ $bookDetail[0]->description }}</p>
        </div>
        @include('partials.sidebar')
    </main>
@endsection
