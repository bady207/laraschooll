<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
  <style>
    .navbar-brand img {
      border-radius: 50%;
    }
    .nav-link {
      font-size: 1.1em;
      margin-right: 10px;
    }
    .nav-link:hover {
      color: #007BFF !important;
    }
    .navbar-light .navbar-toggler {
      border-color: rgba(0, 0, 0, 0.1);
    }
    .navbar-light .navbar-toggler-icon {
      background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%280, 0, 0, 0.5%29' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="https://smkassalaambandung.sch.id/img/logo-custom.png" width="70" height="70" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="/">ARTIKEL</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('tampil_eskul')}}">EKTRAKULIKULER</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('tampil_fasilitas')}}">FASILITAS</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('tampil_jurusan')}}">JURUSAN</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('tampil_industri')}}">INDUSTRI</a></li>
        <li class="nav-item"><a class="nav-link btn btn-primary text-white" href="{{url('login')}}">LOGIN</a></li>
      </ul>
    </div>
  </nav>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
