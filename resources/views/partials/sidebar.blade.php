<div class="sidebar">
    <h2>Category</h2>
    <ul>
        @foreach ($category as $row)
            <li><a href="/category/{{ $row->id }}">{{ $row->category }}</a></li>
        @endforeach
    </ul>
</div>