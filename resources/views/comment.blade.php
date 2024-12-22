<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Komentar</title>
</head>
<body>
    <h1>Kirimkan Komentar Anda</h1>

    <!-- Formulir untuk input komentar -->
    <form method="POST" action="{{ route('comment.submit') }}">
        @csrf
        <textarea name="comment" placeholder="Tulis komentar kamu..." rows="4" cols="50"></textarea>
        <button type="submit">Kirim Komentar</button>
    </form>

    <!-- Menampilkan komentar yang dimasukkan pengguna -->
    @if(session('userInput'))
        <h2>Komentar Anda:</h2>
        <p>{{ session('userInput') }}</p>
    @endif
</body>
</html>
