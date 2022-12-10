<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile Content</title>
    <link rel="stylesheet" href="../css/editprofile.css">
</head>
<body>
    <div>
        <button type="submit" class="head">
            <a href="menuuser">Back To Home</a>
        </button>
    </div>
    <br>
    {{-- make table for show picture in database --}}
    <table>
        <tr>
            <th>Picture</th>
            <th>Keterangan</th>
            <th>email</th>
            <th>action</th>
        </tr>
        @foreach ($data as $item)
        <tr>
            <td><img src="{{asset('storage/'.$item->image)}}" alt="" width="100px" height="100px"></td>
            <td>{{$item->keterangan}}</td>
            <td>{{$item->email}}</td>

            <td>
                {{-- editketerangan --}}
                
                <a href="/editketerangan/{{ $item->id }}">Edit</a>
                <a href="/deleteitem/{{ $item->id }}">Delete</a>
            </td>
            
        </tr>
        @endforeach
    </table>
</body>
</html>