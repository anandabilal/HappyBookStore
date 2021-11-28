{{-- NIM         : 2301883725 --}}
{{-- Nama        : Ananda Bilal --}}
{{-- Jurusan     : Teknik Informatika --}}
{{-- Semester    : 5 (Odd 2021/2022) --}}
{{-- Kelas       : COMP6681001 - Web Programming LK01 --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <title>{{ $title }} - Happy Book Store</title>
</head>
<body>
    <header>
        <p>HAPPY BOOK STORE</p>
        @include('partials.navbar')
    </header>
    @yield('container')
    <footer>
        <p>&copy; Happy Book Store 2021</p>
    </footer>
</body>
</html>
