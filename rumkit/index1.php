<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Document</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbars/">



    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style> -->
</head>

<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
                <span class="fs-4">Rumah Sakit</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="index1.php" class="nav-link active" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="index2.php" class="nav-link">Pasien</a></li>
            </ul>
        </header>
    </div>

    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Selamat Datang!</h1>
            <p class="col-md-8 fs-4">Selamat datang di halaman website resmi Rumah Sakit
            </p>
            <a class="btn btn-primary btn-lg" type="button" href="index2.php">Cek Pasien</a>
        </div>
    </div>

    <div class="container">
        <footer class="py-3 my-4">
            <p class="text-center text-muted">&copy; 2023</p>
        </footer>
    </div>

    <div class="b-example-divider"></div>

</body>

</html>