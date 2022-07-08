@extends('layouts.app')

@section('css')
    <style>
        body {
            background: linear-gradient(rgba(255, 255, 255, 0.4), rgba(255, 255, 255, 0.2));
            height: 100vh;
            min-height: 100%;
        }
    </style>
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" />
@endsection

@section('content')
    <div class="container-fluid bg-white h-100 bg-opacity-75">
        <div class="row d-flex justify-content-center px-5">
            <h2 class="ml-5">Drama Korea</h2>
            @if ($userRating->count() < 5)
                <h6 class="text-black text-center">Anda harus membuat 5 rating untuk mendapatkan rekomendasi film.
                    {{ 5 - $userRating->count() }}
                    film lagi!</h6>
            @else
                <div class="col-lg-6 col-sm-12 col-md-10">
                    <div class="card p-3">
                        <div class="card-body">
                            <h4>Rekomendasi film</h4>
                            @if ($recommededResults->count())
                                <table id="ratingTable"
                                    class="table table-bordered table-striped table-hover datatable datatable-User">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Film</th>
                                            <th>Prediksi Rating</th>
                                            <th style="width: 120px">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($recommededResults as $movie)
                                            <tr>
                                                <th>{{ $loop->iteration }}</th>
                                                <td>{{ $movie->title }}</td>
                                                <td>{{ $movie->prediction }}</td>
                                                <td><a class="btn btn-sm btn-danger text-white"
                                                        href="{{ route('movie.show', ['movie' => $movie, 'rating' => true]) }}">
                                                        Beri Rating
                                                    </a>
                                                    <a class="btn btn-sm btn-primary d-inline-block"
                                                        href="{{ route('movie.show', $movie) }}">
                                                        Detail
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                Rekomendasi tidak ditemukan, reload page untuk mendapat rekomendasi
                            @endif
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection

@section('scripts')
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script>
        $(function() {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)

            $.extend(true, $.fn.dataTable.defaults, {
                columnDefs: [{
                    targets: 0,
                    orderable: false
                }],
                order: [
                    // [2, 'desc']
                ],
                pageLength: 10,
            });
            $('#ratingTable').DataTable({
                buttons: []
            })
        })
    </script>
@endsection
