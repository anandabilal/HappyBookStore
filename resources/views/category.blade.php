@extends('layouts.main')
@section('container')
    <main class="category">
        <div class="categoryMenu">
            <h2>Book List</h2>
            <table class="book-list-table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($bookCategory))
                        @foreach ($bookCategory as $row)
                        <tr>
                            <td><a href="/detail/{{ $row->id }}">{{ $row->title }}</a></td>
                            <td>{{ $row->author }}</td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td>No data..</td>
                            <td></td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        @include('partials.sidebar')
    </main>
@endsection
