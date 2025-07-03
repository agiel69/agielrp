<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Matakuliah</title>
</head>

<body>
    @foreach($matakuliah as $matkul)
    <form action="{{route('matakuliah.update')}}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $mhs->id }}"> <br />
        id <input type="text" required="required" name="txtid" value="{{ $matkul->id }}"> <br />
        kdmatakuliah <input type="text" required="required" name="txtkdmatakuliah" value="{{ $matkul->kdmatakuliah }}"> <br />
        matakuliah <input type="text" required="required" name="txtmatakuliah" value="{{ $matkul->matakuliah }}"> <br />
        <input type="submit" value="Edit Data">
    </form>
    @endforeach
</body>

</html>