<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widht=device-width , initial-scale=1 , shrink-to-fit=yes">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Latihan Laravel</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="#">Laravel</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltHarkup" aria-controls="navbarHavAltMarkup"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"Wspan>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" href="{{ route('index') }}">Beranda <span class="sr-only">(current)</span></a>
                            <a class="nav-link" href="{{ route('mahasiswa')}}">Mahasiswa
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                         </div>
                    </div> 
                </nav>
            </div>
    </div>
    <div class--row->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body"> 
                    @yield('content')
                </div> 
            </div>
        </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
</body>
</html>