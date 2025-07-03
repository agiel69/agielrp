@extends('admin.main')
@section('judul', 'Edit Data Post')
@section('konten')

<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="card border-0 shadow rounded-lg">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Edit Data Post</h4>
                </div>
                <div class="card-body bg-light">
                    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        {{-- Preview Gambar Lama --}}
                        @if($post->image)
                        <div class="mb-3 text-center">
                            <img src="{{ asset('assets/img/'.$post->image) }}" class="img-thumbnail" style="max-width: 200px;" alt="{{ $post->title }}">
                            <p class="text-muted mt-2 mb-0" style="font-size: 0.9em;">Gambar saat ini</p>
                        </div>
                        @endif

                        <div class="form-group">
                            <label class="font-weight-bold">GAMBAR</label>
                            <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image">
                            @error('image')
                                <div class="alert alert-danger mt-2 py-1 px-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">JUDUL</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $post->title) }}" placeholder="Masukkan Judul Post">
                            @error('title')
                                <div class="alert alert-danger mt-2 py-1 px-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">KONTEN</label>
                            <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" rows="6" placeholder="Masukkan Konten Post">{{ old('content', $post->content) }}</textarea>
                            @error('content')
                                <div class="alert alert-danger mt-2 py-1 px-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Kembali</a>
                            <div>
                                <button type="reset" class="btn btn-warning mr-2">RESET</button>
                                <button type="submit" class="btn btn-primary">UPDATE</button>
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>

{{-- CKEditor & Bootstrap JS --}}
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content');
</script>
@endpush

@endsection
