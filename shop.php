<?php
include("backend/connection.php");
session_start();
$userName = "";

if (isset($_SESSION['email'])) {
    $sessionEmail = $_SESSION['email'];
    $sql = "SELECT * FROM users WHERE email = '$sessionEmail'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        if ($row = mysqli_fetch_assoc($result)) {
            $userName = $row['first_name'];
        }
    } else {
        echo "Error in the query: " . mysqli_error($con);
    }
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Boutique</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- gLightbox gallery-->
  <link rel="stylesheet" href="vendor/glightbox/css/glightbox.min.css">
  <!-- Range slider-->
  <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
  <!-- Choices CSS-->
  <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
  <!-- Swiper slider-->
  <link rel="stylesheet" href="vendor/swiper/swiper-bundle.min.css">
  <!-- Google fonts-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="css/template/style.default.css" id="theme-stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="css/template/custom.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="images/template/favicon.png">
</head>

<body>
  <div class="page-holder">
    <!-- navbar-->
    <header class="header bg-white">
      <div class="container px-lg-3">
        <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="home.php"><span class="fw-bold text-uppercase text-dark">Boutique</span></a>
          <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <!-- Link--><a class="nav-link" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <!-- Link--><a class="nav-link active" href="shop.php">Shop</a>
              </li>


            </ul>
            <ul class="navbar-nav ms-auto">
              <li class="nav-item"><a class="nav-link" href="cart.php"> <i class="fas fa-dolly-flatbed me-1 text-gray"></i>Cart<small class="text-gray fw-normal">(<?php
              if(!empty($_SESSION['userId'])){
                                                                                                                                                                    $user_Id = $_SESSION['userId'];
                                                                                                                                                                    $sql = "SELECT * FROM user_cart WHERE user_id = '$user_Id'";
                                                                                                                                                                    $result = mysqli_query($con, $sql);
                                                                                                                                                                    $row = mysqli_num_rows($result);
                                                                                                                                                                    echo $row;
              }else{
                echo '0';
              }
             
             ?>)</small></a></li>
              <li class="nav-item"><a class="nav-link" href="#!"> <i class="far fa-heart me-1"></i><small class="text-gray fw-normal"> (<?php
              if(!empty($_SESSION['userId'])){
                $user_Id = $_SESSION['userId'];
                $sql = "SELECT * FROM user_favorite WHERE user_id = '$user_Id'";
                $result = mysqli_query($con, $sql);
                $row = mysqli_num_rows($result);
                echo $row;
              } else{
                echo "0 ";
              }
              
                                                                                                                                       
                                                                                                                                        ?>)</small></a></li>
              <?php
              if (empty($userName)) {
                echo '<li class="nav-item"><a class="nav-link" href="login.php"> <i class="fas fa-user me-1 text-black fw-bold">Login</a></i>';
              } else {
                echo "<li class='nav-item dropdown'><a class='nav-link dropdown-toggle' id='pagesDropdown' href='#' data-bs-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>$userName</a>
                                <div style='min-width: 10rem !important;' class='dropdown-menu mt-3 shadow-sm' aria-labelledby='pagesDropdown'><a class='dropdown-item border-0 transition-link' href='logout.php'>Logout</a></div>
                            </li>";
              }
              ?>

            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!--  Modal -->

    <div class="modal fade" id="productView" tabindex="-1">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content overflow-hidden border-0">
          <button class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="modal-body p-0">
            <div class="row align-items-stretch">
              <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" style="background: url(img/product-5.jpg)" href="img/product-5.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
              <div class="col-lg-6">
                <div class="p-4 my-md-4">
                  <ul class="list-inline mb-2">
                    <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                    <li class="list-inline-item m-0 1"><i class="fas fa-star small text-warning"></i></li>
                    <li class="list-inline-item m-0 2"><i class="fas fa-star small text-warning"></i></li>
                    <li class="list-inline-item m-0 3"><i class="fas fa-star small text-warning"></i></li>
                    <li class="list-inline-item m-0 4"><i class="fas fa-star small text-warning"></i></li>
                  </ul>
                  <?php
                  include("backend/connection.php");
                  $sql = "SELECT * FROM products";
                  $result = mysqli_query($con, $sql);

                  while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                    <h2 class="h4"><?php ?></h2>
                    <p class="text-muted">$250</p>
                    <p class="text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam convallis.</p>
                  <?php } ?>

                  <div class="row align-items-stretch mb-4 gx-0">
                    <div class="col-sm-7">
                      <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                        <div class="quantity">
                          <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                          <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                          <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="cart.php">Add to cart</a></div>
                  </div><a class="btn btn-link text-dark text-decoration-none p-0" href="#!"><i class="far fa-heart me-2"></i>Add to wish list</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <!-- HERO SECTION-->
      <section class="py-5 bg-light">
        <div class="container">
          <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
            <div class="col-lg-6">
              <h1 class="h2 text-uppercase mb-0">Shop</h1>
            </div>
            <div class="col-lg-6 text-lg-end">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
                  <li class="breadcrumb-item"><a class="text-dark" href="home.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Shop</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <section class="py-5">
        <div class="container p-0">
          <div class="row">
            <!-- SHOP SIDEBAR-->
            <div class="col-lg-3 order-2 order-lg-1">
              <h5 class="text-uppercase mb-4">Categories</h5>
              <div class="py-2 px-4 bg-dark text-white mb-3"><strong class="small text-uppercase fw-bold">Computers &amp; Acc</strong></div>
              <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal">
                <li class="mb-2"><a class="reset-anchor" id="monitorsLink" href="#!">Monitors</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Mother Boards</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">CPUS</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">RAM</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Hard Drive</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">GPU</a></li>
              </ul>
              <div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase fw-bold">Phones &amp; Acc</strong></div>
              <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal">
                <li class="mb-2"><a class="reset-anchor" href="#!">Earbuds</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Covers</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Screen Protection</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Adapters</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Smart Watches</a></li>
              </ul>
              <div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase fw-bold">Electronics</strong></div>
              <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal mb-5">
                <li class="mb-2"><a class="reset-anchor" href="#!">USB Flash drives</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Headphones</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Portable speakers</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Keyboards</a></li>
              </ul>


            </div>
            <!-- SHOP LISTING-->
            <div class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">
              <div class="row mb-3 align-items-center">
                <div class="col-lg-6 mb-2 mb-lg-0">
                  <p class="text-sm text-muted mb-0">Showing 1–12 of 53 results</p>
                </div>
                <div class="col-lg-6">
                  <ul class="list-inline d-flex align-items-center justify-content-lg-end mb-0">
                    <li class="list-inline-item text-muted me-3"><a class="reset-anchor p-0" href="#!"><i class="fas fa-th-large"></i></a></li>
                    <li class="list-inline-item text-muted me-3"><a class="reset-anchor p-0" href="#!"><i class="fas fa-th"></i></a></li>
                    <li class="list-inline-item">
                      <select class="selectpicker" data-customclass="form-control form-control-sm">
                        <option value>Sort By </option>
                        <option value="default">Default sorting </option>
                        <option value="popularity">Popularity </option>
                        <option value="low-high">Price: Low to High </option>
                        <option value="high-low">Price: High to Low </option>
                      </select>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="row">
                <!-- PRODUCT-->
                <?php
                include("backend/connection.php");
                $sql = "SELECT * FROM products";
                $result = mysqli_query($con, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                  <div class="col-lg-4 col-sm-6">

                    <div class="product text-center">


                      <div class="mb-3 position-relative">

                        <div class="badge text-white bg-"></div><a class="d-block" href="detail.php?product=<?php echo $row['product_id'] ?>"><img class="img-fluid w-100" src="notAdmin/addProduct/images/<?php echo $row['product_image']; ?>" alt="..."></a>
                        <div class="product-overlay">
                          <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" onclick="favoriteProduct('<?php echo $row['product_id'] ?>')" href="#!"><i class="far fa-heart"></i></a></li>
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" onclick="storeProduct('<?php echo $row['product_id'] ?>')">Add to cart</a></li>
                          </ul>
                        </div>
                      </div>
                      <h6> <a class="reset-anchor" href="detail.php"><?php echo $row['product_name'] ?></a></h6>
                      <p class="small text-muted"><?php echo $row['product_name'] ?></p>

                    </div>

                  </div>
                <?php } ?>

                <!-- PRODUCT-->

                <!-- PAGINATION-->
                <!-- <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-center justify-content-lg-end">
                    <li class="page-item mx-1"><a class="page-link" href="#!" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                    <li class="page-item mx-1 active"><a class="page-link" href="#!">1</a></li>
                    <li class="page-item mx-1"><a class="page-link" href="#!">2</a></li>
                    <li class="page-item mx-1"><a class="page-link" href="#!">3</a></li>
                    <li class="page-item ms-1"><a class="page-link" href="#!" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                  </ul>
                </nav> -->
              </div>
            </div>
          </div>
      </section>
    </div>
    <footer class="bg-dark text-white">
      <div class="container py-4">
        <div class="row py-5">
          <div class="col-md-4 mb-3 mb-md-0">
            <h6 class="text-uppercase mb-3">Customer services</h6>
            <ul class="list-unstyled mb-0">
              <li><a class="footer-link" href="#!">Help &amp; Contact Us</a></li>
              <li><a class="footer-link" href="#!">Returns &amp; Refunds</a></li>
              <li><a class="footer-link" href="#!">Online Stores</a></li>
              <li><a class="footer-link" href="#!">Terms &amp; Conditions</a></li>
            </ul>
          </div>
          <div class="col-md-4 mb-3 mb-md-0">
            <h6 class="text-uppercase mb-3">Company</h6>
            <ul class="list-unstyled mb-0">
              <li><a class="footer-link" href="#!">What We Do</a></li>
              <li><a class="footer-link" href="#!">Available Services</a></li>
              <li><a class="footer-link" href="#!">Latest Posts</a></li>
              <li><a class="footer-link" href="#!">FAQs</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h6 class="text-uppercase mb-3">Social media</h6>
            <ul class="list-unstyled mb-0">
              <li><a class="footer-link" href="#!">Twitter</a></li>
              <li><a class="footer-link" href="#!">Instagram</a></li>
              <li><a class="footer-link" href="#!">Tumblr</a></li>
              <li><a class="footer-link" href="#!">Pinterest</a></li>
            </ul>
          </div>
        </div>
        <div class="border-top pt-4" style="border-color: #1d1d1d !important">
          <div class="row">
            <div class="col-md-6 text-center text-md-start">
              <p class="small text-muted mb-0">&copy; 2021 All rights reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
              <p class="small text-muted mb-0">Template designed by <a class="text-white reset-anchor" href="https://bootstrapious.com/p/boutique-bootstrap-e-commerce-template">Bootstrapious</a></p>
              <!-- If you want to remove the backlink, please purchase the Attribution-Free License. See details in readme.txt or license.txt. Thanks!-->
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- JavaScript files-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/glightbox/js/glightbox.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="js/template/front.js"></script>
    <!-- Nouislider Config-->
    <script>
      var range = document.getElementById('range');
      noUiSlider.create(range, {
        range: {
          'min': 0,
          'max': 2000
        },
        step: 5,
        start: [100, 1000],
        margin: 300,
        connect: true,
        direction: 'ltr',
        orientation: 'horizontal',
        behaviour: 'tap-drag',
        tooltips: true,
        format: {
          to: function(value) {
            return '$' + value;
          },
          from: function(value) {
            return value.replace('', '');
          }
        }
      });
    </script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {

        var ajax = new XMLHttpRequest();
        ajax.open("GET", path, true);
        ajax.send();
        ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
        }
      }
      // this is set to BootstrapTemple website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </div>
</body>
<script>
  var anchorElements = document.querySelectorAll('.reset-anchor');
  anchorElements.forEach(function(anchorElement) {
    anchorElement.addEventListener('click', function(event) {
      event.preventDefault();
      var anchorValue = this.textContent;
    });
  });
</script>

</html>

<script>
  function storeProduct(productId) {
    $.ajax({
      type: "POST",
      url: "cartProducts/storeProduct.php",
      data: {
        id: productId,
      },
      success: function(response) {
        window.location.href = "cart.php";

      }
    });
  }
</script>
<script>
  function favoriteProduct(productId) {

    $.ajax({
      type: "POST",
      url: "cartProducts/favoriteProduct.php",
      data: {
        id: productId,
      },
      success: function(response) {
        alert("This item is marked as your favorite!");
      }
    });
  }
</script>