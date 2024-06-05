<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        /* Custom CSS for full-width image header */
        .reduced-height {
            height: 80%; /* 30% less than the original height */
        }

        .sidebar {
            width: 23%; /* Increase by 23% */
            background-color: #597552 !important; /* Custom sidebar background color */
            color: #fff!important;/* Custom text color */
        }

        .nav-link {
            padding: 1rem 0; /* Adjust padding to increase height */
            color: #fff!important;/* Custom text color */
            margin-bottom: 10px;
            padding: 1rem 0;
        }
        body {
            background-color: #D9E7C1; /* Custom background color */
        }
    </style>
</head>
<body>
    
<header>
    <div class="container-fluid"><!-- Header -->
        <div class="row">
            <div class="col">
                <img src="{{ asset('images/KAFAmsheader.png') }}" alt="Logo" class="img-fluid w-100 reduced-height">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Registradddtion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">KAFA Activities</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Report
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Activities</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">User</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
    
            <!-- Page content -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <!-- Your main content goes here -->
                <h1>Main Content Area</h1>
            </main>
        </div>
    </div>
</header>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
