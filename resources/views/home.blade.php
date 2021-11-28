@extends('layouts.main')
@section('container')
    <main class="home">
        <div class="homeMenu">
            <h2>Book List</h2>
            <table class="book-list-table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookTitleAuthor as $row)
                    <tr>
                        <td><a href="/detail/{{ $row->id }}">{{ $row->title }}</a></td>
                        <td>{{ $row->author }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('partials.sidebar')
    </main>
@endsection
