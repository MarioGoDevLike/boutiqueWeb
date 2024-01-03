<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Register</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jqueryScripts.js"></script>
</head>

<body>
    <div class="page-wrapper p-t-100 p-b-100 form-group" style="background-color:white;">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form method="POST" action="backend/signup_action.php">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="First Name" name="txtFirstName" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Last Name" name="txtLastName" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="email" placeholder="Email" name="txtEmail" required>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="date" placeholder="BirthDate" name="txtBirthday" required>
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search" style="padding:6px">
                                        <select name="txtGender" required>
                                            <option disabled="disabled" selected="selected">Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group password-div" id="show_hide_password">
                            <input class="input--style-1" type="password" placeholder="Password" name="txtPassword" required>
                            <div class="input-group-addon show-icon-container">
                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="input-group password-div" id="show_hide_c_password">
                            <input class="input--style-1" type="password" placeholder="Confirm Password" required>
                            <div class="input-group-addon show-icon-container">
                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" style="background-color:#e3b04b;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->