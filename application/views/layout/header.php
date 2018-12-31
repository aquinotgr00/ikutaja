<body>	

	<!-- wadah -->
	<div class="wrapper">

        <!-- Message notification -->
        <div class="msg-notif alert alert-success" id="msg-notif" role="alert">
            <h4 class="alert-heading" id="msg-notif-heading">Success</h4>
        </div>
        <!-- End of Message notification -->
		
		<!-- header -->
		<header>
		    <div class="default-header-area header-sticky">
		        <div class="container">
		            <div class="row align-items-center">
						
						<!--logo header-->
                        <div class="col-lg-3 col-md-6">
                            <div class="header-logo">
                                <a href="<?php echo base_url('/');?>"><img src="https://res.cloudinary.com/ikutaja/image/upload/v1546102240/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
						<!--logo header-->
						
                        <!--header menu-->
                        <div class="col-lg-7  d-none d-lg-block text-right"> 
                            <div class="header-menu-area">
								
								<!-- dropdown menu -->
								<nav>									
                                    <ul class="main-menu">										
										<li class="active">
											<a href="<?php echo base_url('/');?>">HOME</a>											                                                                                        
                                        </li>										                                                                                 
                                        <li><a href="#">PAGES</a>                                            
                                            <ul>                                                
                                                <li><a href="<?php echo base_url('jadiPelaksana');?>">Jadi Pelaksana</a></li>
                                                <li><a href="<?php echo base_url('jadiRelawan');?>">Jadi Relawan</a></li>
                                                <li><a href="<?php echo base_url('events1');?>">Events</a></li>                                                                                               
                                                <li><a href="<?php echo base_url('galeri');?>">Galeri</a></li>
                                                <li><a href="<?php echo base_url('blog');?>">Blog</a></li>                                                
                                            </ul>                                            
                                        </li>                                        
										<li><a href="#">ABOUT</a>                                            
                                            <ul>
                                                <li><a href="<?php echo base_url('about/tentang');?>">Tentang</a></li>
                                                <li><a href="#panduan">Panduan</a></li>
                                                <li><a href="<?php echo base_url('about/team');?>">Team</a></li>                                                                                                                                                                                                                                                                                               
                                            </ul>                                            
                                        </li>                                                                               
									</ul>									
								</nav>
								<!-- dropdown menu -->

                            </div>
                        </div>
						<!--header menu-->
						
                        <!--login-->
                        <div class="col-lg-2 col-md-6">
                            <div class="book-now-btn text-right">
                                <a href="<?php echo base_url('auth/login');?>">LOGIN</a>
                            </div>
                        </div>
						<!--login-->
						
					</div>				

					<!-- mobile menu -->
		            <div class="row">
                        <div class="col-12">                              
                            <div class="mobile-menu d-lg-none d-xl-none"></div>                            
                        </div>
					</div>
					<!-- mobile menu -->

		        </div>
		    </div>
		</header>
		<!-- header -->