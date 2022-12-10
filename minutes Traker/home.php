<?php      
    include('connection.php');  
    session_start();
    $_SESSION['email'];
    $email3=$_SESSION['email'];
    $name=$sql = "select name from login where email = '$email3'"; 
    $name2=mysqli_query($con,$name);
    $row = mysqli_fetch_array($name2, MYSQLI_ASSOC);

    
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>hompeage</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Minutes Tracker (CUSAT)</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="home.php">Home</a></li>
                        <!--<li class="nav-item"><a class="nav-link" href="#!">About</a></li>-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Menu</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">Make A Group</a></li>
                                <!--<li><hr class="dropdown-divider" /></li>-->
                                <li><a class="dropdown-item" href="minutes.html">Enter Minutes</a></li>
                                <li><a class="dropdown-item" href="search.html">Search</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        
                            <a style="text-decoration:none" href="logout.php">LOGOUT</a>
                        
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Welcome <?php  echo $_SESSION['email'];?></h1>
                    <!--<p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>-->
                </div>
            </div>
        </header>
        <!-- Section-->
        <br>
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">   
                <a style="text-decoration:none" href="#">
                    <div class="col mb-5" >
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="group.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Make A Group</h5>
                                    <!-- Product price-->
                                    <!--$40.00 - $80.00-->
                                </div>
                            </div>
                            <!-- Product actions-->
                            <!--<div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Select</a></div>
                            </div>-->
                        </div>
                    </div>
                </a>
                <a style="text-decoration:none" href="minutes.html">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>-->
                            <!-- Product image-->
                            <img class="card-img-top" src="minutes.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Enter Minutes</h5>
                                    <!-- Product reviews
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>-->
                                    <!-- Product price-->
                                    <!--<span class="text-muted text-decoration-line-through">$20.00</span>
                                    $18.00-->
                                </div>
                            </div>
                            <!-- Product actions-->
                            <!--<div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Select</a></div>
                            </div>-->
                        </div>
                    </div>
                </a>
                <a style="text-decoration:none" href="search.html">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>-->
                            <!-- Product image-->
                            <img class="card-img-top" src="search.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Search</h5>
                                    <!-- Product price
                                    <span class="text-muted text-decoration-line-through">$50.00</span>
                                    $25.00-->
                                </div>
                            </div>
                            <!--Product actions-->
                            <!--<div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>-->
                        </div>
                    </div>
                </a>
                </div>
                <br>
            </div>
            
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Minutes Tracker 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
