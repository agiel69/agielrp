@extends('admin.main')

@section('judul', 'Data Kontak')

@section('konten')
<div class="col-12">
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('kontak.create') }}" class="btn btn-primary mb-3">Tambah Kontak</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kontaks as $kontak)
            <tr>
                <td>{{ $kontak->alamat }}</td>
                <td>{{ $kontak->nomor_telepon }}</td>
                <td>{{ $kontak->email }}</td>
                <td>{{ $kontak->status_publis ? 'Publis' : 'Tidak Publis' }}</td>
                <td>
                    <a href="{{ route('kontak.edit', $kontak->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('kontak.destroy', $kontak->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
