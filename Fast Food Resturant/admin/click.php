
<?
session_start(); 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fast Food Resturant</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    
    <link href="img/favicon.ico" rel="icon">

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Setting Admin Panel</h1>
                    
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="dashboard.php" class="nav-item nav-link active">Dashboard</a>
                        <a href="manage_menu.php" class="nav-item nav-link">Menu</a>
                        <a href="manage_orders.php" class="nav-item nav-link">Orders</a>
                        <a href="manage_customers.php" class="nav-item nav-link">Customers</a>
                        <a href="admin_contact.php" class="nav-item nav-link">Contact</a>

                    </div>
                    <a href="../connect/logout.php" class="btn btn-danger py-2 px-4">Sign Out</a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                
            </div>
        </div>
        
        <div class="container-xxl py-5">
            <div class="container">
                
                <h2>Setting Admin Panel</h2>
                <p>You can manage your restaurant's menu, orders, and customers from here.</p>
            </div>
        </div>
        
    </div>


<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <a href="logo.php" class="text-decoration-none">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-list-alt text-primary mb-4"></i>
                            <h5>update logo</h5>
                            <p>Add, update, or delete items from the menu.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <a href="contact us management.php" class="text-decoration-none">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-clipboard-check text-primary mb-4"></i>
                            <h5>contact us</h5>
                            <p>View and manage customer orders.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <a href="About us management.php" class="text-decoration-none">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-users text-primary mb-4"></i>
                            <h5>about us</h5>
                            <p>Manage customer information and preferences.</p>
                        </div>
                    </div>
                </a>
            </div><div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <a href="homepage image.php" class="text-decoration-none">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-clipboard-check text-primary mb-4"></i>
                            <h5>home page image</h5>
                            <p>you can customized homepage images</p>
                        </div>
                    </div>
                </a>
            </div>
            
            <!-- <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <a href="manage_payments.php" class="text-decoration-none">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-money-bill text-primary mb-4"></i>
                            <h5>Manage Payments</h5>
                            <p>Track and process customer payments.</p>
                        </div>
                    </div>
                </a>
            </div> -->
        </div>
    </div>
</div>


    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/counterup/counterup.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    
    <script src="../js/main.js"></script>
</body>

</html>


    