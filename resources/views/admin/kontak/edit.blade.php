@extends('admin.main')

@section('judul', 'Edit Kontak')

@section('konten')
<div class="col-12">
    <form action="{{ route('kontak.update', $kontak->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required>{{ $kontak->alamat }}</textarea>
        </div>
        <div class="form-group">
            <label>Nomor Telepon</label>
            <input type="text" name="nomor_telepon" value="{{ $kontak->nomor_telepon }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{ $kontak->email }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Status Publis</label>
            <select name="status_publis" class="form-control">
                <option value="1" {{ $kontak->status_publis == 1 ? 'selected' : '' }}>Publis</option>
                <option value="0" {{ $kontak->status_publis == 0 ? 'selected' : '' }}>Tidak Publis</option>
            </select>
        </div>
        <button class="btn btn-success">Update</button>
        <a href="{{ route('kontak.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
