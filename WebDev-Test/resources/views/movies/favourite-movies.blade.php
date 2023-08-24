@extends('layouts.app')

@section('content')

    <h4 style="text-align:center">Favourite Movie Titles</h4>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1></h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th style="padding-right: 40px;">#</th>
                            <th style="text-align:left">Title</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($favMovies as $index => $listMovies)
                            <tr>
                                <td>{{ ($favMovies->currentPage() - 1) * $favMovies->perPage() + $loop->index + 1 }}</td>                 
                                <td>{{ $listMovies->movie_title }}</td>       
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pagination">
                    {{ $favMovies->links() }}
                </div>
            </div>
        </div>
    </div>
    
@endsection