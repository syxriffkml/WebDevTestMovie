<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebDev Test - Movie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
<body>
    <header>
        <h1 style="text-align:center">Web Developer test (24 hours test)</h1>
    </header>

    <main>
        <div class="text-center"> <!-- Center align the buttons -->
            <a href="{{ route('list-movies') }}" class="btn btn-outline-primary">Lists of Movies</a>
            <a href="{{ route('favourite-movies') }}" class="btn btn-outline-success">Favourited Movies</a>
        </div>&nbsp;&nbsp;
        @yield('content') <!-- This is where the content from other views will be inserted -->
    </main>

    <footer>
        &nbsp;&nbsp;
        <p class="text-center">&copy; Disclaimer: This is for webdev test purposes</p>
    </footer>
    
</body>
</html>