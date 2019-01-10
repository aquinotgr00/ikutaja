    <body>
        <div class="wrapper">
            <div class="msg-notif alert alert-success" <?= isset($_GET['success']) ? 'style="display:block;"': null ?> id="msg-notif" role="alert">
                <h4 class="alert-heading" id="msg-notif-heading"><?= isset($_GET['success']) ? $_GET['success'] : 'success' ?></h4>
            </div>
            <header>
                <div class="default-header-area header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-6">
                                <div class="header-logo">
                                    <a href="<?php echo base_url('/');?>"><img draggable="false" src="https://res.cloudinary.com/ikutaja/image/upload/v1546102240/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-7 d-none d-lg-block text-right">
                                <div class="header-menu-area">
                                    <nav>
                                        <ul class="main-menu">
                                            <li class="active">
                                                <a href="<?php echo base_url('/');?>">HOME</a>
                                            </li>
                                            <li><a href="#">PAGES</a>
                                                <ul>
                                                    <li><a href="<?php echo base_url('jadiPelaksana');?>">Jadi Pelaksana</a></li>
                                                    <li><a href="<?php echo base_url('jadiRelawan');?>">Jadi Relawan</a></li>
                                                    <li><a href="<?php echo base_url('events');?>">Events</a></li>
                                                    <li><a href="<?php echo base_url('galeri');?>">Galeri</a></li>                                                    
                                                </ul>
                                            </li>
                                            <li><a href="#">ABOUT</a>
                                                <ul>
                                                    <li><a href="#panduan">Lebih Lanjut</a></li>
                                                    <li><a href="<?php echo base_url('tentang');?>">Tentang</a></li>
                                                    <li><a href="<?php echo base_url('manual');?>">Manual</a></li>
                                                    <li><a href="<?php echo base_url('teams');?>">Team</a></li>
                                                </ul>
                                            </li>
                                                                                   
                                            <li id="loggedin-user-links" class="active loggedin-user-links"><a id="loggedin-user-name" href="#">User</a>
                                                <ul id="loggedin-user-ul">
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="book-now-btn text-right">
                                    <a id="login-btn" href="<?php echo base_url('auth/login');?>">LOGIN</a>
                                    <a id="logout-btn" style="display: none" href="#">LOGOUT</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="mobile-menu d-lg-none d-xl-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>