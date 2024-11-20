<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>


</head>

<body>
    <!-- header -->
    <?php include 'includes/header.php';?>
    
    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="juice-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



<!-- Categories Section Starts Here -->
<section class="categories">
    <div class="container">
        <h2 class="text-center">Explore Juices</h2>

        <div class="row">
            <div class="col-md-4 col-sm-6 mb-4">
                <a href="category-juice.php">
                    <div class="card h-100" style="width: 100%;">
                        <img src="https://media.istockphoto.com/id/904617420/photo/fresh-mango-smoothie-in-the-glass.webp?a=1&b=1&s=612x612&w=0&k=20&c=owVY4fKM9_0n5MNTJ32JpUX7R39Uk0OW2v3OToswNi0=" class="card-img-top" alt="Mango Juice">
                        <div class="card-body">
                            <h5 class="card-title text-center">Mango Juice</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-6 mb-4">
                <a href="category-juice.php">
                    <div class="card h-100" style="width: 100%;">
                        <img src="https://images.unsplash.com/photo-1507120366498-4656eaece7fa?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fHBvbWdyYW5hdGUlMjBqdWljZXxlbnwwfHwwfHx8MA%3D%3D" class="card-img-top" alt="Mango Juice">
                        <div class="card-body">
                            <h5 class="card-title text-center">Pomegranate Juice</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-6 mb-4">
                <a href="category-juice.php">
                    <div class="card h-100" style="width: 100%;">
                        <img src="https://plus.unsplash.com/premium_photo-1667543228378-ec4478ab2845?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fG9yYW5nZSUyMGp1aWNlfGVufDB8fDB8fHww" class="card-img-top" alt="Mango Juice">
                        <div class="card-body">
                            <h5 class="card-title text-center">Orange Juice</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="clearfix"></div>
    </div>
</section>
<!-- Categories Section Ends Here -->

    <!-- carousel -->
    <?php include 'includes/carousel.php';?>

    <!-- menu section -->
    <?php include 'includes/menu.php';?>

    <!-- footer Section Starts Here -->
    <?php include 'includes/footer.php';?>

</body>
</html>