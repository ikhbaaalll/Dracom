@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            List Movies
        </div>

        <div class="card-body">
            <a href="{{ route('admin.movies.create') }}" class="btn btn-primary ml-2 my-2">Tambah Film</a>
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                    <thead>
                        <tr>
                            <th style="width:5px"></th>
                            <th>Title</th>
                            <th>Show Date</th>
                            <th>Episode</th>
                            <th>Director</th>
                            <th>Artists</th>
                            <th>Rating</th>
                            <th>User Rating</th>
                            <th style="width: 100px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($movies as $movie)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    {{ $movie->title ?? '' }}
                                </td>
                                <td>
                                    {{ $movie->show_date ?? '' }}
                                </td>
                                <td class="text-center">
                                    {{ $movie->episode ?? '' }}
                                </td>
                                <td>
                                    {{ $movie->director }}
                                </td>
                                <td>
                                    {{ $movie->artist }}
                                </td>
                                <td class="text-center">
                                    {{ number_format($movie->ratings_avg_rating, 2) }}
                                </td>
                                <td>
                                    <a href="{{ route('admin.movies.rating', $movie) }}" class="btn btn-sm btn-info">User
                                        Rating</a>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="{{ route('admin.movies.edit', $movie) }}">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.movies.destroy', $movie) }}" method="POST"
                                        class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Yakin ingin menghapus?')"
                                            class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
