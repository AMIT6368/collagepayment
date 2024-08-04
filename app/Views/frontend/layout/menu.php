<body class="indexfourteen">
    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <!-- Header -->
        <header class="header headerfourteen">
            <nav class="navbar navbar-expand-lg header-nav header-inner-nav">
                <div class="container">
                    <div class="navbar-header">
                        <a id="mobile_btn" href="javascript:void(0);">
                            <span class="bar-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </a>
                        <a href="index.html" class="navbar-brand logo">
                            <img src="public/frontend/assets/img/home14/logo.png" class="img-fluid" alt="Logo">
                        </a>
                    </div>
                    <div class="main-menu-wrapper">
                        <div class="menu-header">
                            <a href="index.html" class="menu-logo">
                                <img src="public/frontend/assets/img/home14/logo.png" class="img-fluid" alt="Logo">
                            </a>
                            <a id="menu_close" class="menu-close" href="javascript:void(0);">
                                <i class="fas fa-times"></i>
                            </a>
                        </div>
                        <ul class="main-nav">
                            <li class="has-submenu active">
                                <a href="<?php echo base_url('/') ?>">Home </a>
                            </li>
                            <li class="has-submenu ">
                                <a href="#">About Us </a>
                            </li>
                            <li class="has-submenu ">
                                <a href="#">Our Service </a>
                            </li>
                            <li class="has-submenu ">
                                <a href="#">Contact Us </a>
                            </li>
                            <li class="has-submenu ">
                                <a href="<?php echo base_url('checkpaymentstatus') ?>">Check Payment Status </a>
                            </li>

                            <li class="login-link">
                                <a href="<?php echo base_url('signin') ?>">Login / Signup</a>
                            </li>
                        </ul>
                    </div>
                    <ul class="nav header-navbar-rht">
                        <li class="nav-item">
                            <a href="<?php echo base_url('signin') ?>">Log in</a>
                        </li>
                        <li class="nav-item  contact-item">
                            <a href="<?php echo base_url('signup') ?>">Sign up</a>
                        </li>

                        <?php // if(){   ?>
                        <li class="nav-item d-flex">
                            <a href="booking.html" class="nav-booking me-2">
                                <img src="assets/img/home14/course.png" width="22" alt="">
                            </a>
                            <a href="booking.html" class="nav-book-content">
                                <span>Amit Patel</span>
                                <p>Unverifyed</p>
                            </a>
                        </li>

                        <?php //  }  ?>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- /Header -->