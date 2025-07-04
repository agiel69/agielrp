<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>matakuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

<a href="{{ url('matakuliah/tambah') }}" class="btn btn-primary">Add</a>
@if(isset($matakuliah) && count($matakuliah) > 0)
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Kode Matakuliah</th>
            <th>Matakuliah</th>
            <th>Action</th>
        </tr>
        @foreach($matakuliah as $matkul)    
        <tr>
            <td>{{ $matkul->id }}</td>
            <td>{{ $matkul->kdmatakuliah }}</td>
            <td>{{ $matkul->matakuliah }}</td>
            <td>
                <a href="{{ url('matakuliah/edit/'.$matkul->id) }}">Edit</a> |
                <a href="{{ url('matakuliah/hapus/'.$matkul->id) }}" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
@else
    <p>Data matakuliah belum tersedia.</p>
@endif

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>
