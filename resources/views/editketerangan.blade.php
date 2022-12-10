<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- make a edit colomn for keterangan --}}
    <form action="/editketerangan/{{ $gambar->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" id="file">
        <h2>Masukan keterangan berupa nama sepatu</h2>
        <textarea name="keterangan" id="keterangan" cols="30" rows="10"></textarea>
        {{-- echogetemail --}}
        <input type="email" name="email" value="{{ Auth::user()->email }}">
        <button type="submit">Upload</button>
    </form>
    

</body>
</html>