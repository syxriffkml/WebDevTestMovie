@extends('layouts.app')

@section('content')
    <h4 style="text-align:center">30 Lists Of Movies</h4>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1></h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th style="padding-right: 40px;">#</th>
                            <th style="text-align:left">Title</th>
                            <th>Favourite</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($listMovies as $index => $listMovies)
                            <tr>
                                <td>{{ $index + 1 }}</td>                 
                                <td>{{ $listMovies->title }}</td>
                                <td><button type="button" class="btn btn-info favourite-button" data-movie-title="{{ $listMovies->title }}">Favourite</button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const favouriteButtons = document.querySelectorAll('.favourite-button');

        favouriteButtons.forEach(button => {
            button.addEventListener('click', function () {
                const movieTitle = this.getAttribute('data-movie-title');
                sendFavouriteMovie(movieTitle);
            });
        });

        function sendFavouriteMovie(title) {
            fetch('/store-favourite', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ title: title })
            })
            .then(response => response.json())
            .then(data => {
                console.log(data.message);
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    });
</script>