<?php
session_start();
if (!isset($_SESSION['emailAdmin'])) {
    header('location:../admin.php');
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Monsterlite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Monster admin lite design, Monster admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Monster Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Add Category</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link href="../assets/plugins/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../Dashboard/css/style.min.css" rel="stylesheet">
    <link href="../Dashboard/css/style.css" rel="stylesheet" media="all">



    <link href="../../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

</head>
<style>
    .hide-menu {
        color: black !important;

    }

    .fa-fw {
        color: #ffbc34 !important;

    }

    #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin6] .sidebar-nav ul .sidebar-item .sidebar-link.active {
        border-left: 3px solid black
    }

    #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin6] .sidebar-nav ul .sidebar-item .sidebar-link:hover {
        border-left: 3px solid black;
    }
</style>

<body>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <header class="topbar navbar-edit" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">

                    <a class="navbar-brand" href="index.html" style="width: 250px !important;">
                        <div class="img-container">
                            <img src="../../images/logo.jpg" alt="homepage" class="dark-logo" />
                        </div>
                    </a>

                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>

                <div class="navbar-collapse collapse navbar-edit" id="navbarSupportedContent" data-navbarbg="skin5">

                    <ul class="navbar-nav me-auto mt-md-0">
                    </ul>

                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark font-weight-bold" style="font-size: 20px
                            ;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Administrator:
                                <?php if (isset($_COOKIE["firstname"])) {
                                    echo $_COOKIE["firstname"];
                                } ?>
                            </a>
                            <ul class="dropdown-menu show" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar" data-sidebarbg="skin6">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                <ul id="sidebarnav">
                        <li class="sidebar-item custom-anim">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../Dashboard/dashboard.php" aria-expanded="false">
                                <i class="me-3 far fa-clock fa-fw" aria-hidden="true"></i>
                                <span class="hide-menu dashboard-color">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item custom-anim"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../Profile/profile.php" aria-expanded="false">
                                <i class="me-3 fa fa-user-circle fa-fw" aria-hidden="true"></i><span class="hide-menu dashboard-color">Profile</span></a>
                        </li>
                        <li class="sidebar-item custom-anim"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../addUser/addUser.php" aria-expanded="false"><i class="me-3 fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Add User</span></a></li>
                        <li class="sidebar-item custom-anim"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../addAdministrator/addAdministrator.php" aria-expanded="false"><i class="me-3 fa fa-user-plus fa-fw" aria-hidden="true"></i><span class="hide-menu">Add Administrator</span></a></li>
                        <li class="sidebar-item custom-anim "> <a class="sidebar-link waves-effect waves-dark sidebar-link d-flex gap-3" href="../addCategory/addCategory.php" aria-expanded="false"><i class="bi bi-box fa-fw"></i><span class="hide-menu">Add Category</span></a></li>

                        <li class="sidebar-item custom-anim"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../addProduct/addProduct.php" aria-expanded="false"><i class="bi bi-bag-fill mr-3 fa-fw"></i><span class="hide-menu">Add Product</span></a></li>
                        <li class="sidebar-item custom-anim "> <a class="sidebar-link waves-effect waves-dark sidebar-link d-flex gap-3" href="../Logout/Logout.php" aria-expanded="false"><i class="fa-fw bi bi-backspace-fill"></i><span class="hide-menu">Logout</span></a></li>
                        <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="404.html" aria-expanded="false"><i class="me-3 fa fa-info-circle" aria-hidden="true"></i><span class="hide-menu">Error 404</span></a></li> -->
                    </ul>   

                </nav>
            </div>
        </aside>

        <div class="page-wrapper" style="min-height:100vh;">

            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0 text-dark">Add Category</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a class="text-dark" href="#">Home</a></li>
                                    <li class="breadcrumb-item active text-warning" aria-current="page">Add Category</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
            <div style="padding: 20px;">
                <p style="width: 550px;">Passionate about organization and clarity, our Add Category page simplifies the process of categorizing products. With an intuitive design and user-friendly interface, efficiently manage and structure your product catalog with ease.</p>
            </div>
            <div class="d-flex" style="justify-content:start;">
                <form method="POST" action="addCategory_action.php" enctype="multipart/form-data">
                    <div class="d-flex justify-content-between" style="gap:3rem; margin-left:20px">
                        <div class="mb-3">
                            <label for="username" class="form-label">Category Name</label>
                            <input value="" type="text" autocomplete="off" name="categoryName" placeholder="Category Name" class="form-control" id="username" aria-describedby="usernameHelp">
                        </div>
                    </div>
                    <div class="mb-3" style="margin-left:20px;">
                        <label for="productImage" class="form-label">Category Image</label>
                        <input type="file" name="image" class="form-control" id="productImage">
                    </div>
                    <div class="d-flex justify-content-start" style="margin-left:20px;">
                        <button name="submit" type="submit" class="btn btn-warning d-flex justify-content-start">Add Category</button>
                    </div>
                </form>
            </div>

        </div>






        <script src="../assets/plugins/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="../assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/app-style-switcher.js"></script>
        <!--Wave Effects -->
        <script src="js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="js/custom.js"></script>
        <!--This page JavaScript -->
        <!--flot chart-->
        <script src="../assets/plugins/flot/jquery.flot.js"></script>
        <script src="../assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
        <script src="js/pages/dashboards/dashboard1.js"></script>
</body>

</html>
<?php
if (isset($_GET['error']) && $_GET['error'] == 1) {
    echo "<script>alert('Make sure it's not empty');</script>";
} else if (isset($_GET["error"]) && $_GET["error"] == 2) {
    echo "<script>alert('Category already exists.');</script>";
} ?>