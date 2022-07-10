@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            Edit Film {{ $movie->title }}
        </div>

        @if ($errors->any())
            <div class="alert alert-danger mx-3 mt-2">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card-body">
            <form method="POST" action="{{ route('admin.movies.update', $movie) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="form-label" for="title">Judul</label>
                    <input type="text" name="title" value="{{ $movie->title }}" id="title"
                        class="form-control @error('title') is-invalid @enderror" required autofocus
                        placeholder="Masukkan judul">
                </div>
                <div class="form-group">
                    <label class="form-label" for="description">Deskripsi Film</label>
                    <textarea name="description" placeholder="Deskripsi Film" id="description" cols="10" rows="5"
                        class="form-control">{{ $movie->description }}</textarea>
                </div>
                <div class="form-group">
                    <label class="form-label" for="show_date">Tanggal Tayang</label>
                    <input type="text" name="show_date" value="{{ $movie->show_date }}" id="show_date"
                        class="form-control @error('show_date') is-invalid @enderror" required
                        placeholder="Masukkan Tanggal Tayang">
                </div>
                <div class="form-group">
                    <label class="form-label" for="duration">Durasi</label>
                    <input type="text" name="duration" value="{{ $movie->duration }}" id="duration"
                        class="form-control @error('duration') is-invalid @enderror" required placeholder="Masukkan Durasi">
                </div>
                <div class="form-group">
                    <label class="form-label" for="director">Sutradara</label>
                    <input type="text" name="director" value="{{ $movie->director }}" id="director"
                        class="form-control @error('director') is-invalid @enderror" required
                        placeholder="Masukkan Sutradara">
                </div>
                <div class="form-group">
                    <label class="form-label" for="artist">Artis</label>
                    <input type="text" name="artist" value="{{ $movie->artist }}" id="artist"
                        class="form-control @error('artist') is-invalid @enderror" required placeholder="Masukkan Artis">
                </div>
                <div class="form-group">
                    <label class="form-label" for="episode">Episode</label>
                    <input type="number" name="episode" value="{{ $movie->episode }}" id="episode"
                        class="form-control @error('episode') is-invalid @enderror" min="0" required
                        placeholder="Masukkan Episode">
                </div>
                <div class="form-group">
                    <label class="form-label" for="image">Poster</label>
                    <input type="text" name="image" value="{{ $movie->image }}" id="image"
                        class="form-control @error('image') is-invalid @enderror" required
                        placeholder="Masukkan link gambar/poster">
                </div>
                <div class="form-group">
                    <button class="btn btn-danger" type="submit">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
