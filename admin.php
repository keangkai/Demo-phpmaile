<?php

require_once("inc/config.php");
require_once("inc/functions.php");

$params = fetchSearch(
    array(
        'keyword',
        'category',
        'cover',
        'author',
        'language',
        'year',
        'location'
    ),
    array(
        'location'
    )
);

$records = getRecords($params);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Forms</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/foundation.min.css">
    <link rel="stylesheet" href="css/core.css">

    <script src="./jquery-3.3.1.min.js"></script>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/header-logo.png" alt="" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/header-logo.png" alt="" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li class="active">
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="form-header" >
                               
                            </div>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Search</div>
                                    <div class="card-body">
                                        
                                        <form action="" method="get" novalidate="novalidate" id="search_form">
                                            
                                        <div class="form-group">
                                            <label for="keyword" class=" form-control-label">Name</label>
                                            <input type="text" 
                                                class="form-control" 
                                                name="keyword"
                                                id="keyword" 
                                                value="<?php echo stickyField('keyword'); ?>">
                                        </div>
										<div class="row form-group">
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="age" class=" form-control-label">Age</label>
                                                    <input type="text" id="age"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <div class="medium-12 columns">
                                                    <label for="category" class=" form-control-label">Gender</label>
                                                    
                                                        <?php echo getCategories(); ?>

                                                    </div> 
                                                   
                                                </div>
                                            </div>
											<div class="col-4">
                                                <div class="form-group">
                                                    <div class="medium-12 columns">
                                                        <label for="age" class=" form-control-label">Education</label>
                                                        <?php echo getAuthors(); ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row form-group">
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="postal-code" class=" form-control-label">Career</label>
                                                    <select name="select" id="select" class="form-control">
                                                        <option value="0"> - all - </option>
                                                        <option value="1">Accounting</option>
                                                        <option value="2">Design</option>
                                                        <option value="3">Engineering</option>
                                                    </select>
                                                </div>
                                            </div>
											<div class="col-4">
                                                <div class="form-group">
                                                    <label for="postal-code" class=" form-control-label">Country</label>
                                                    <?php echo getLanguages(); ?> 
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <div class="checkbox">
                                                            <label for="checkbox1" class="form-check-label ">
                                                                <input 
                                                                    type="checkbox" 
                                                                    id="checkbox1" 
                                                                    name="checkbox1" 
                                                                    value="option1" 
                                                                    class="form-check-input">
                                                                    &nbsp;&nbsp;&nbsp;
                                                                        User Premium
                                                                    
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
												
                                            <div>
                                                <button id="search-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-search fa-lg"></i>&nbsp;
                                                    <span id="search-button-amount">Search</span>
                                                    <span id="search-button-sending" style="display:none;">Wait…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <!-- USER DATA-->
                                <div class="user-data m-b-30">
                                    <h3 class="title-3 m-b-30">
									 <button class="au-btn au-btn-icon au-btn--green au-btn--small" style="float: right;">
                                            <i class="zmdi zmdi-plus"></i>add item</button>
                                        <i class="zmdi zmdi-account-calendar"></i>user data</h3>
										
                                   <!-- <div class="filters m-b-45">
                                        <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Products</option>
                                                <option value="">Services</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                                            <select class="js-select2 au-select-dark" name="time">
                                                <option selected="selected">All Time</option>
                                                <option value="">By Month</option>
                                                <option value="">By Day</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>-->
                                    <div class="table-responsive table-data">
                                    <?php if (!empty($records)) { ?>
                                        <table class="table" style="border-collapse: unset">
                                            <thead>
                                                <tr>
                                                    <td></td>
                                                    <td>name</td>
                                                    <td>age</td>
                                                    <td>Gender</td>
                                                    <td>Education</td>
                                                    <td>Carrer</td>
                                                    <td>Country</td>
                                                    <td>status</td>
                                                    <td>image</td>
													<!-- <td>remark</td> -->
                                                    <td></td>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                
                                            <?php foreach($records as $row) { ?>
                                                <div class="pricing-levels-3">
                                                <tr>
                                                    <td>
                                                         <!-- <label for="" class="au-checkbox">
                                                            
                                                            <span class="au-checkmark"></span>
                                                           
                                                        </label>  -->
                                                        <div class="myBox">
                                                            <?php 
                                                                $array = [
                                                                    'name' => $row['Title'],
                                                                    'age'    => $row['Age'],
                                                                    'gender'   => $row['Category'],
                                                                    'education'   => $row['Author'],
                                                                    'carrer'   => $row['Career'],
                                                                    'email'   => $row['Email'],
                                                                    'country'   => $row['Language'],
                                                                ];
                                                                
                                                                extract($array);
                                                                
                                                            ?>
                                                            <input 
                                                                class="single-checkbox" 
                                                                type = "checkbox" 
                                                                id = "Banana" 
                                                                value = 
                                                                "<?php echo("<h4>$name</h4><br> 
                                                                <p>Age : $age</p> 
                                                                <p>Gender : $gender</p>
                                                                <p>Education : $education </p>
                                                                <p>Carrer : $carrer </p>
                                                                <p>Email : $email</p>
                                                                <p>Country : $country</p>
                                                                "); ?>" 
                                                                
                                                                />
                                                                <!-- <form method="post" action="send_mail.php">
                                                                    To : <input type="text" name="mail_to" value="<?php $row['Email']?>"> <br/>
                                                                    Subject :   <input type="text" name="mail_sub" value="test">
                                                                    <br/>
                                                                    Message   <input type="text" name="mail_msg" value="from  couple">
                                                                    <br/>
                                                                    <input type="submit" value="Send Email">
                                                                </form> -->
                                                        </div>
                                                        
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6> <?php echo $row['Title']; ?> </h6>
                                                            <span>
                                                                <?php echo $row['Email']; ?>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="rs-select2--trans rs-select2--sm">
                                                            <?php echo $row['Age']; ?>
                                                        </div>
                                                    </td>
                                                    
                                                    <td>
                                                        <div class="rs-select2--trans rs-select2--sm">
                                                            <?php echo $row['Category']; ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="rs-select2--trans rs-select2--sm">
                                                            <?php echo $row['Author']; ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="rs-select2--trans rs-select2--sm">
                                                            <?php echo $row['Career']; ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="rs-select2--trans rs-select2--sm">
                                                            <?php echo $row['Language']; ?>
                                                        </div>
                                                    </td>
                                                    
													<td>
                                                        <?php if (($row['Price']) === 'Disable') { ?>
                                                            <span class="role admin"><?php echo $row['Price']; ?></span>

                                                        <?php } elseif (($row['Price']) === 'VIP')  { ?>

                                                            <span class="role user">VIP</span>

                                                        <?php } else { ?>

                                                            <span class="role member">Enabled</span>

                                                        <?php } ?>
                                                    </td>
                                                    <!-- <td>
                                                        <div class="table-data-feature">
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="zmdi zmdi-edit"></i>
                                                            </button>
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="zmdi zmdi-delete"></i>
                                                            </button>
                                                        </div>
                                                    </td> -->
                                                    <td>
                                                        <div class="rs-select2--trans rs-select2--sm">
                                                    </div>  
                                                        
                                                    </td>
                                                </tr>
                                                </div>

                                                <!-- <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox" checked="checked">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>lori lynch</h6>
                                                            <span>
                                                                <a href="#">johndoe@gmail.com</a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="role user">VIP</span>
                                                    </td>
                                                    <td>
                                                        <div class="rs-select2--trans rs-select2--sm">
                                                            <select class="js-select2" name="property">
                                                               <option >Man</option>
                                                                <option value="">Female</option>
                                                            </select>
                                                            <div class="dropDownSelect2"></div>
                                                        </div>
                                                    </td>
													<td>
														<textarea name="textarea-input" id="textarea-input" rows="1" placeholder="remark" class="form-control"></textarea>
													</td>
                                                    <td>
													<div class="table-data-feature">
                                                        
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        
                                                    </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>lori lynch</h6>
                                                            <span>
                                                                <a href="#">johndoe@gmail.com</a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="role user">VIP</span>
                                                    </td>
                                                    <td>
                                                        <div class="rs-select2--trans rs-select2--sm">
                                                            <select class="js-select2" name="property">
                                                               <option selected="selected">Female</option>
                                                                <option value="">Men</option>
                                                            </select>
                                                            <div class="dropDownSelect2"></div>
                                                        </div>
                                                    </td>
													<td>
														<textarea name="textarea-input" id="textarea-input" rows="1" placeholder="remark" class="form-control"></textarea>
													</td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                        
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        
                                                    </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>lori lynch</h6>
                                                            <span>
                                                                <a href="#">johndoe@gmail.com</a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="role member">Enabled</span>
                                                    </td>
                                                    <td>
                                                        <div class="rs-select2--trans rs-select2--sm">
                                                            <select class="js-select2" name="property">
                                                               <option selected="selected">Female</option>
                                                                <option value="">Men</option>
                                                            </select>
                                                            <div class="dropDownSelect2"></div>
                                                        </div>
                                                    </td>
													<td>
														<textarea name="textarea-input" id="textarea-input" rows="1" placeholder="remark" class="form-control"></textarea>
													</td>
                                                    <td>
													 <div class="table-data-feature">
                                                        
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        
                                                    </div>
                                                        
                                                    </td>
													
                                                </tr> -->
                                            </tbody>
                                            
                                            <?php } ?>
                                            <?php } else { ?>

                                                <p style="text-align: center;font-size: larger;font-weight: 650;">No result.</p>

                                            <?php } ?>
                                        </table>
                                        
                                    </div>
                                    
                                </div>
                                <!-- END USER DATA-->
                            </div>
							<div class="col-lg-12">
								<div class="user-data" >
									<h3 class="title-3 m-b-30">
										<i class="fa fa-heart"></i>Matchmaker
									</h3>
									<div class="row">
										<div class="col-lg-5 col-md-5 col-sm-5 couple-single">
											<div class="couple-img">
												<img src="images/admin/1.jpg" alt="">
											</div>
											<div class="couple-content  mt--30">
                                                <div id="display">
                                            </div>
												
                    
											</div>
										</div>
										<div class="col-lg-2 col-md-2 col-sm-2" style="text-align:center;">
											<img src="images/admin/2.png"  alt="">
										</div>
										<div class="col-lg-5 col-md-5 col-sm-5 couple-single">
											<div class="couple-img">
												<img src="images/admin/3.jpg" alt="">
											</div>
											<div class="couple-content  mt--30">
												<h4>HARRY WILLIAM</h4>
												<p>Age : 25</p>
												<p>Gender : Man</p>
												<p>Email : asjdfkl@gmail.com</p>
												<p>Tel : 0999999999</p>
												<p>Career : Doctor</p>
												<span class="role member">Enabled</span>
                                            </div>
                                                

										</div>
										<div class="col-lg-12 match-box">
											<button id="match-button" type="submit" class="btn btn-lg btn-info btn-block" style="margin-bottom: 0px;">
                                                    <i class="fa fa-heart fa-lg"></i>&nbsp;
                                                    <span id="match-button-amount">Match</span>
                                            </button>
										</div>
									</div>
								</div>
							</div>
						</div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 12firstdates. All rights reserved.<p>
                                    <FORM NAME="joe">
                                        <b>Pick Only Two Please!</b> 

                                        <INPUT TYPE="checkbox" NAME="dog" 
                                        onClick="return KeepCount()"> Dog

                                        <INPUT TYPE="checkbox" NAME="cat" 
                                        onClick="return KeepCount()"> Cat

                                        <INPUT TYPE="checkbox" NAME="pig" 
                                        onClick="return KeepCount()"> Pig

                                        <INPUT TYPE="checkbox" NAME="ferret" 
                                        onClick="return KeepCount()"> Ferret

                                        <INPUT TYPE="checkbox" NAME="hampster" 
                                        onClick="return KeepCount()"> Hampster

                                    </FORM>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <SCRIPT LANGUAGE="javascript">

    function KeepCount() {

    var NewCount = 0

        if (document.joe.dog.checked)
        {NewCount = NewCount + 1}

        if (document.joe.cat.checked)
        {NewCount = NewCount + 1}

        if (document.joe.pig.checked)
        {NewCount = NewCount + 1}

        if (document.joe.ferret.checked)
        {NewCount = NewCount + 1}

        if (document.joe.hampster.checked)
        {NewCount = NewCount + 1}

        if (NewCount == 3)
        {
        alert('Pick Just Two Please')
        document.joe; return false;
        }
    } 
    </SCRIPT>

    <script language="javascript">

        $('.myBox  input:checkbox').change(function(){
      var tempValue='';
      tempValue=$('.myBox  input:checkbox').map(function(n){
          if(this.checked){
                return  this.value;
              };
       }).get().join('<hr>')
            console.log(tempValue);
       $('#display').html(tempValue);
    })
            var limit = 2;
        $('input.single-checkbox').on('change', function(evt) {
            if($(this).siblings(':checked').length >= limit) {
            this.checked = false;
                }
        });
    </script>
    
    

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
