<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Your File</title>
    <link rel="stylesheet" href="../css/upload.css">
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
</head>
<body>
    <div>
        <button type="submit" class="head">
            <a href="menuuser">Back To Home</a>
        </button>
    </div>
    
    <form action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data">
        <h2>Masukan file berupa gambar sneaker yang 
            ingin dimasukan sebagai kandidat Top Month Selanjutnya
        </h2>
        @csrf
        <input type="file" name="file" id="file">
        {{-- textarea --}}
        <h2>Masukan keterangan berupa nama sepatu</h2>
        <textarea name="keterangan" id="keterangan" cols="30" rows="10"></textarea>
        {{-- echogetemail --}}
        <input type="hidden" name="email" value="{{ Auth::user()->email }}">
        <button type="submit">Upload</button>

        
    </form>

    
</body>

<footer>
</footer>
</html>

