<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    
                    <li>
                        <a href="<?php echo base_url('dashboard/admin'); ?>"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>

                    <li class="menu-title">Kelola Volunteer</li><!-- /.menu-title -->
                        <li>
                            <a href="<?php echo base_url('admin/accountVolunteer'); ?>"> <i class="menu-icon fa fa-user"></i>Akun Volunteer</a>                                                                                                                                                         
                        </li>
                        <li>
                            <a href="<?php echo base_url('admin/eventVolunteer'); ?>"> <i class="menu-icon fa fa-wheelchair"></i>Events Diikuti</a>                                                                                                                                                         
                        </li>

                    <li class="menu-title">Kelola Organisasi</li><!-- /.menu-title -->
                        <li>
                            <a href="<?php echo base_url('admin/accountOrganizer'); ?>"> <i class="menu-icon fa fa-users"></i>Akun Organisasi</a>                                                                                                                                                         
                        </li>
                        <li>
                            <a href="<?php echo base_url('admin/eventOrganizer'); ?>"> <i class="menu-icon fa fa-wheelchair-alt"></i>Events Dibuat</a>                                                                                                                                                         
                        </li>

                    <li class="menu-title">Kelola Admin</li><!-- /.menu-title -->                        
                        <li>
                            <a href="<?php echo base_url('admin/settingAdmin'); ?>"> <i class="menu-icon fa fa-cogs"></i>Setting</a>                                                                                                                                                         
                        </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url('/'); ?>"><img src="https://res.cloudinary.com/ikutaja/image/upload/v1546102240/img/logo/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="<?php echo base_url('/'); ?>"><img src="https://res.cloudinary.com/ikutaja/image/upload/v1546101683/img/fav/1.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">3</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">Ada 3 notifikasi untukmu!</p>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Server #1 ramai banyak pengunjung.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-info"></i>
                                    <p>Server #2 gak ramai & gak sepi juga.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-warning"></i>
                                    <p>Server #3 sepi sedikit pengunjung.</p>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="count bg-primary">4</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">Ada 4 email untukmu!</p>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="<?php echo base_url('assetsAdmin/img/avatar/1.jpg'); ?>"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Siti Kiraki</span>
                                        <span class="time float-right">Sekarang</span>
                                        <p>Halo, saya ingin berkonstribusi</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="<?php echo base_url('assetsAdmin/img/avatar/2.jpg'); ?>"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Lusi Sumarni</span>
                                        <span class="time float-right">5 menit tadi</span>
                                        <p>Apa bisa berdonasi secara transparan?</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="<?php echo base_url('assetsAdmin/img/avatar/3.jpg'); ?>"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Nanasa Karin</span>
                                        <span class="time float-right">10 menit tadi</span>
                                        <p>Saya puas dengan kinerja website ini</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="<?php echo base_url('assetsAdmin/img/avatar/4.jpg'); ?>"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Putri Salju</span>
                                        <span class="time float-right">15 minutes ago</span>
                                        <p>Semoga organisasiku segera di acc</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="https://res.cloudinary.com/ikutaja/image/upload/v1546492336/img/about/team.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="<?php echo base_url('admin/settingAdmin'); ?>"><i class="fa fa -cog"></i>Settings</a>

                            <a class="nav-link" href="<?php echo base_url('dashboard/logout'); ?>"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->