<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
            <!-- Navbar with Offcanvas for smaller screens -->
            <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary navbar-custom">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="https://img.freepik.com/free-vector/kombucha-logo-design-template_23-2150047440.jpg" alt="Restaurant Logo" class="img-responsive logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end custom-offcanvas" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./index.php"><i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./categories.php
                                "><i class="fas fa-th-list"></i> Category</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./juice.php
                                "><i class="fas fa-glass-cheers"></i> Juice</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="includes/conatct.php"><i class="fas fa-envelope"></i> Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    <!-- navbar -->
</body>
</html>