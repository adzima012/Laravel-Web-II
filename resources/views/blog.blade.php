<!-- resources/views/blog.blade.php
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Artikel</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
<div class="container mt-5">
    <h1>Daftar Artikel</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul Artikel</th>
                <th>Isi Artikel</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Artikel1</td>
                <td><a href="/blog">artikel1.blade.php</a></td>
            </tr>
            <tr>
                <td>Artikel1</td>
                <td><a href="/artikel1">artikel1.blade.php</a></td>
            </tr>
            <tr>
                <td>Artikel2</td>
                <td><a href="/artikel2">artikel2.blade.php</a></td>
            </tr>
        </tbody>
    </table>
</div>
</body>
</html> -->

@extends('templating.navbar')

@section('content')
<h1>Halaman Artikel 1</h1>
    
@endsection
