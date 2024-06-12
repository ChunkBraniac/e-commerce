<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ Str::upper('e-commerce') }}</title>
    <link rel="stylesheet" href="{{ url('bootstrap/css/bootstrap.min.css') }}">
</head>

<body class="bg-light-subtle">

    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home.page') }}" style="font-size: 16px; font-weight: 600;">{{ Str::upper('e-commerce') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" style="border-radius: 0px; box-shadow: none;">
                <span class="navbar-toggler-icon" style="font-size: 15px;"></span>
            </button>

            <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">
                        Offcanvas
                    </h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Dropdown</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">Action 1</a>
                                <a class="dropdown-item" href="#">Action 2</a>
                            </div>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-0" type="search" style="border-radius: 0%;" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-outline-success" type="submit" style="border-radius: 0%;">
                            Search
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>


    <script src="{{ url('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>
