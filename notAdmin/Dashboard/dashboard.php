<?php
error_reporting(0);
ini_set('display_errors', 0);
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
    <title>Dashboard</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link href="../assets/plugins/chartist/dist/chartist.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

</head>
<style>
        .hide-menu{
            color: black !important;

        }
        .fa-fw{
            color: #ffbc34 !important;

        }
        #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin6] .sidebar-nav ul .sidebar-item .sidebar-link.active {
            border-left: 3px solid black
        }
        #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin6] .sidebar-nav ul .sidebar-item .sidebar-link:hover{
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
                        <h3 class="page-title mb-0 p-0 text-dark">Dashboard</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a class="text-dark" href="#">Home</a></li>
                                    <li class="breadcrumb-item active text-warning" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="container my-5 usersTable">
                    <h1 class="d-flex justify-content-center">Users</h1>
                    <div class="table-responsive">
                        <table style="" class="table table-bordered table-striped p-10" width="100%">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include "../../backend/connection.php";
                                $sql = "SELECT * FROM users";
                                $result = mysqli_query($con, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $id = $row["user_id"];
                                    echo "<tr id='delete" . $row['user_id'] . "'>
                                        <td>" . $row['first_name'] . "</td>
                                        <td>" . $row['last_name'] . "</td>
                                        <td>" . $row['email'] . "</td>
                                        <td>" . $row['gender'] . "</td>
                                        <td class='d-flex gap-1 d-flex justify-content-center'>
                                            <button class='btn btn-warning'>
                                                <a class='text-light' href='../addUser/addUserEdit.php?updateid=" . $id . "'>Edit</a>
                                            </button>
                                            <button class='btn btn-danger' onclick='deleteUser(" . $row['user_id'] . ")'>Delete</button>
                                        </td>
                                    </tr>";
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="container my-5">
                    <h1 class="d-flex justify-content-center">Admins</h1>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped p-10" width="100%">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include "../../backend/connection.php";
                                $sql = "SELECT * FROM admin";
                                $result = mysqli_query($con, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $adminId = $row["admin_id"];
                                    echo "<tr id=delete'" . $row['admin_id'] . "'>
                                <td>" . $row['username'] . "</td>
                                <td>" . $row['email'] . "</td>
                                <td class='d-flex justify-content-center gap-1'>
                                <button class='btn btn-warning'>
                                                <a class='text-light' href='../addAdministrator/addAdministratorEdit.php?updateid=" . $adminId . "'>Edit</a>
                                            </button>
                                    <button class='btn btn-danger' onclick='deleteAdmin(" . $row['admin_id'] . ")'>Delete</button>
                                    
                                </td>
                            </tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="container my-5">
                    <h1 class="d-flex justify-content-center">Products</h1>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped p-10" width="100%">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Product Category</th>
                                    <th>Product Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include "../../backend/connection.php";
                                $sql = "SELECT * FROM products";
                                $result = mysqli_query($con, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr id=delete'" . $row['product_id'] . "'>
                                <td>" . $row['product_name'] . "</td>
                                <td>" . $row['product_category'] . "</td>
                                <td>" . $row['product_price'] . "</td>

                                <td class='d-flex justify-content-center gap-1'>
                                <button class='btn btn-warning'>
                                                <a class='text-light' href='../addProduct/addProductEdit.php?updateid=" . $row['product_id'] . "'>Edit</a>
                                            </button>
                                    <button class='btn btn-danger' onclick='deleteProduct(" . $row['product_id'] . ")'>Delete</button>
                                    
                                </td>
                            </tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="container my-5">
                    <h1 class="d-flex justify-content-center">Category</h1>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped p-10" width="100%">
                            <thead>
                                <tr>
                                    <th>Category Name</th>
                                    <th>Category Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include "../../backend/connection.php";
                                $sql = "SELECT * FROM category";
                                $result = mysqli_query($con, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr id=delete'" . $row['category_id'] . "'>
                                <td>" . $row['category_name'] . "</td>
                                <td>" . $row['category_picture'] . "</td>

                                <td class='d-flex justify-content-center gap-1'>
                                <button class='btn btn-warning'>
                                                <a class='text-light' href='../addCategory/addCategoryEdit.php?updateid=" . $row['category_id'] . "'>Edit</a>
                                            </button>
                                    <button class='btn btn-danger' onclick='deleteCategory(" . $row['category_id'] . ")'>Delete</button>
                                    
                                </td>
                            </tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
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
        <script>
            function deleteUser(userId) {
                $.ajax({
                    type: "POST",
                    url: "deleteUser.php",
                    data: {
                        id: userId,
                    },
                    success: function(response) {
                        $('#delete' + userId).hide();
                    }
                });
            }

            function updateUser(userId) {
                $.ajax({
                    type: "POST",
                    url: "addUserEdit.php",
                    data: {
                        id: userId,
                    },
                    success: function(response) {
                        window.location.href = "addUserEdit.php?id=" + userId;
                    }
                });
            }

            function deleteAdmin(adminId) {
                $.ajax({
                    type: "POST",
                    url: "deleteAdmin.php",
                    data: {
                        id: adminId,
                    },
                    success: function(response) {
                        $('#delete' + adminId).hide();
                    }
                });
            }
            function deleteProduct(productId) {
                $.ajax({
                    type: "POST",
                    url: "deleteProduct.php",
                    data: {
                        id: productId,
                    },
                    success: function(response) {
                        $('#delete' + productId).hide();
                    }
                });
            }
            function deleteCategory(categoryId) {
                $.ajax({
                    type: "POST",
                    url: "deleteCategory.php",
                    data: {
                        id: categoryId,
                    },
                    success: function(response) {
                        $('#delete' + categoryId).hide();
                    }
                });
            }
        </script>
</body>

</html>