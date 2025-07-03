@extends('admin.main')

@section('judul', 'Tambah Kontak')

@section('konten')
<div class="col-12">
    <form action="{{ route('kontak.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label>Nomor Telepon</label>
            <input type="text" name="nomor_telepon" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Status Publis</label>
            <select name="status_publis" class="form-control">
                <option value="1">Publis</option>
                <option value="0">Tidak Publis</option>
            </select>
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('kontak.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
