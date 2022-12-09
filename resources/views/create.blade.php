<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kritik dan Saran</title>
</head>
<body>
    {{-- validationtitle --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
<form action="/create" method="POST">
    @csrf
    <h3>Saran dan Kritik</h3>
    <label for="title">Title</label>
    <input type="text" name="title"><br>
    <label for="body">Body</label>
    <textarea name="body" id="" cols="30" rows="5"></textarea>
    <button type="submit">send</button>
</form>
<a href="home">BackToHome</a>
</body>
</html>