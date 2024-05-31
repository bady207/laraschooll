<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Berita Terbaru</title>

    <!-- Custom CSS -->
    <style>
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            flex-direction: column;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card img {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 20px;
        }

        .section {
            padding: 80px 0;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #333;
        }

        .card-text {
            font-size: 1rem;
            color: #666;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .navbar {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <!-- navbar -->
    @include('layouts.navbar')
    <!-- /navbar -->

    <!-- content -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h1 class="mb-5">Ekstrakulikuler</h1>
                </div>
            </div>
            <div class="row">
                @foreach ($eskul as $data)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('/storage/eskuls/'. $data->image) }}" alt="{{ $data->judul }}" class="card-img-top">
                        <div class="card-body d-flex flex-column">
                            <div>
                                <h5 class="card-title">{{ $data->nama_eskul }}</h5>
                                <p class="card-text"> {{ $data->deskripsi }}</p>
                            </div>
                           
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- /content -->

    <!-- footer -->
    @include('layouts.footer')
    <!-- /footer -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>
