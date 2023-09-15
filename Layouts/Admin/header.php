<?php 

   if (!isset($_COOKIE["username"])) {
      header("Location:http://localhost/Health_Ora/loginn.php");
   }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo "http://localhost/Health_Ora/Layouts/Admin/vendors/simple-line-icons/css/simple-line-icons.css" ?>">
    <link rel="stylesheet" href="<?php echo "http://localhost/Health_Ora/Layouts/Admin/vendors/flag-icon-css/css/flag-icon.min.css" ?>">
    <link rel="stylesheet" href="<?php echo "http://localhost/Health_Ora/Layouts/Admin/vendors/css/vendor.bundle.base.css" ?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?php echo "http://localhost/Health_Ora/Layouts/Admin/./vendors/daterangepicker/daterangepicker.css" ?>">
    <link rel="stylesheet" href="<?php echo "http://localhost/Health_Ora/Layouts/Admin/./vendors/chartist/chartist.min.css" ?>">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo "http://localhost/Health_Ora/Layouts/Admin/./css/style.css" ?>">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo "http://localhost/Health_Ora/Layouts/Admin/./images/favicon.png" ?>" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="<?php echo "http://localhost/Health_Ora/HRM/AdminDashboard.php" ?>">
            <img src="images/logo.svg" alt="logo" class="logo-dark" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="<?php echo "http://localhost/Health_Ora/HRM/AdminDashboard.php" ?>"><img src="<?php echo "http://localhost/Health_Ora/Layouts/Admin/images/logo-mini.svg" ?>" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome Admin dashboard!</h5>
          <ul class="navbar-nav navbar-nav-right ml-auto">
            <form class="search-form d-none d-md-block" action="#">
              <i class="icon-magnifier"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-basket-loaded"></i></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-chart"></i></a></li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator message-dropdown" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="icon-speech"></i>
                <span class="count">7</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="<?php echo "http://localhost/Health_Ora/Layouts/Admin/images/faces/face10.jpg" ?>" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="<?php echo "http://localhost/Health_Ora/Layouts/Admin/images/faces/face12.jpg" ?>" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="<?php echo "http://localhost/Health_Ora/Layouts/Admin/images/faces/face1.jpg" ?>" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
              </div>
            </li>
         
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle ml-2" src="<?php echo "http://localhost/Health_Ora/Layouts/Admin/images/faces/face8.jpg" ?>" alt="Profile image"> <span class="name_user"><?php echo $_COOKIE["fullname"]; ?></span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="<?php echo "http://localhost/Health_Ora/Layouts/Admin/images/faces/face8.jpg" ?>" alt="Profile image">
                  <p class="mb-1 mt-3"><?php echo $_COOKIE["fullname"]; ?></p>
                  <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
                </div>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-speech text-primary"></i> Messages</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-energy text-primary"></i> Activity</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-question text-primary"></i> FAQ</a>
                <a class="dropdown-item" href="<?php echo "http://localhost/Health_Ora/LogOutScript.php" ?>"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="<?php echo "http://localhost/Health_Ora/Layouts/Admin/images/faces/face8.jpg" ?>" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?php echo $_COOKIE["fullname"]; ?></p>
                  <p class="designation">Admin</p>
                </div>
                <div class="icon-container">
                  <i class="icon-bubbles"></i>
                  <div class="dot-indicator bg-danger"></div>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Dashboard</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo "http://localhost/Health_Ora/HRM/AdminDashboard.php" ?>">
                <span class="menu-title">Dashboard</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">Info</span></li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Contact's Info</span>
                <i class="icon-layers menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="<?php echo "http://localhost/Health_Ora/HRM/Contacts.php" ?>">Contacts</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo "http://localhost/Health_Ora/HRM/Feedbacks.php" ?>">feedbacks</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo "http://localhost/Health_Ora/HRM/Appointments.php" ?>">
                <span class="menu-title">Appointment's</span>
                <i class="icon-envelope-letter menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo "http://localhost/Health_Ora/HRM/Certificate.php" ?>">
                <span class="menu-title">Text</span>
                <i class="icon-cup menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo "http://localhost/Health_Ora/HRM/Certificateresult.php" ?>">
                <span class="menu-title">Certificate's</span>
                <i class="icon-cup menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo "http://localhost/Health_Ora/HRM/Recipes.php" ?>">
                <span class="menu-title">Recipes</span>
                <i class="icon-cup menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo "http://localhost/Health_Ora/HRM/Breakfastreceipe.php" ?>">
                <span class="menu-title">Break-Fast Receipe</span>
                <i class="icon-emotsmile menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo "http://localhost/Health_Ora/HRM/Lunchreceipe.php" ?>">
                <span class="menu-title">Lunch Receipe</span>
                <i class="icon-emotsmile menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo "http://localhost/Health_Ora/HRM/Dinnerreceipe.php" ?>">
                <span class="menu-title">Dinner Receipe</span>
                <i class="icon-emotsmile menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo "http://localhost/Health_Ora/HRM/Snacksreceipe.php" ?>">
                <span class="menu-title">Snacks Receipe</span>
                <i class="icon-emotsmile menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo "http://localhost/Health_Ora/HRM/youth.php" ?>">
                <span class="menu-title">Youth</span>
                <i class="icon-emotsmile menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo "http://localhost/Health_Ora/HRM/adult.php" ?>">
                <span class="menu-title">Adult</span>
                <i class="icon-emotsmile menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo "http://localhost/Health_Ora/HRM/senior.php" ?>">
                <span class="menu-title">Senior</span>
                <i class="icon-emotsmile menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo "http://localhost/Health_Ora/HRM/Latestnews.php" ?>">
                <span class="menu-title">Latest News</span>
                <i class="icon-emotsmile menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo "http://localhost/Health_Ora/HRM/comments.php" ?>">
                <span class="menu-title">Comments</span>
                <i class="icon-emotsmile menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">Shop</span></li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo "http://localhost/Health_Ora/HRM/Shop.php" ?>">
                <span class="menu-title">Inventory</span>
                <i class="icon-present menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo "http://localhost/Health_Ora/HRM/Orders.php" ?>">
                <span class="menu-title">Order's</span>
                <i class="icon-basket-loaded menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo "http://localhost/Health_Ora/HRM/Products.php" ?>">
                <span class="menu-title">Product's</span>
                <i class="icon-basket menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">Sample Pages</span></li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">General Pages</span>
                <i class="icon-doc menu-icon"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="<?php echo "http://localhost/Health_Ora/loginn.php" ?>"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo "http://localhost/Health_Ora/HRM/Create.php" ?>"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo "http://localhost/Health_Ora/Layouts/Admin/pages/samples/blank-page.html" ?>"> Blank Page </a></li>
                </ul>
              </div>
            </li>
           
          </ul>
        </nav>
        