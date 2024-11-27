<!-- <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Glowéra</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
		<div class=" align-items-center icon-container">
                    <a href="#" class="text-decoration-none me-3"><i class="bi bi-search fs-5"></i></a>
                    <a href="#" class="text-decoration-none me-3"><i class="bi bi-person fs-5"></i></a>
                    <a href="#" class="text-decoration-none"><i class="bi bi-cart fs-5"></i></a>
                </div> -->
                <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">

               <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Glowéra</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./shop">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
		<!-- <div class=" align-items-center icon-container">
                    <a href="#" class="text-decoration-none me-3"><i class="bi bi-search fs-5"></i></a>
                    <a href="#" class="text-decoration-none me-3"><i class="bi bi-person fs-5"></i></a>
                    <a href="#" class="text-decoration-none"><i class="bi bi-cart fs-5"></i></a>
                </div>
        </div> -->
        <div style="font-weight:bold" class="icon-container">
            <!-- Search Icon -->
            <i class="bi bi-search icon" onclick="toggleSearchBar()"></i>
            <!-- Login Icon -->
            <i class="bi bi-person-circle icon" data-bs-toggle="modal" data-bs-target="#loginModal"></i>
        </div>
        <!-- Login Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content login-modal">
                    <div class="modal-header">
                        <h5 class="modal-title" id="loginModalLabel">Login or Signup</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <button class="btn btn-primary w-100 mb-2">Login</button>
                        <button class="btn btn-outline-primary w-100">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Bar -->
        <div id="searchBar" class="container search-bar">
            <input type="text" class="form-control" placeholder="Search products..." />
        </div>
        <script>
            function toggleSearchBar() {
                const searchBar = document.getElementById("searchBar");
                searchBar.style.display = searchBar.style.display === "block" || searchBar.style.display === "" ? "none" : "block";
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    </body>
</html> 
