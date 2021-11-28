<nav>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="#">Category</a>
            <ul>
                @foreach ($category as $row)
                    <li><a href="/category/{{ $row->id }}">{{ $row->category }}</a></li>
                @endforeach
            </ul>
        </li>
        <li><a href="/contact">Contact</a></li>
    </ul>
</nav>