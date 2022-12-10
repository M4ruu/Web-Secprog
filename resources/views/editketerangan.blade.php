<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UpdateKeterangan</title>
    <link rel="stylesheet" href="../css/editketerangan.css">
</head>
<body>
    <form action="/editketerangan/{{ $gambar->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h2>
            Silahkan melakukan update gambar dan keterangan
        </h2>
        
        <h2>Update Gambar</h2>
        <input type="file" name="file" id="file">
        <h2>Update keterangan nama sepatu</h2>
        <textarea name="keterangan" id="keterangan" cols="30" rows="10"></textarea>
        <input type="hidden" name="email" value="{{ Auth::user()->email }}">
        <br>
        <button type="submit">Upload</button>
    </form>
    

</body>
</html>