<body>	

	<!-- wadah -->
	<div class="wrapper">
		
		<!-- header -->
		<header>
		    <div class="default-header-area header-sticky">
		        <div class="container">
		            <div class="row align-items-center">
						
						<!--logo header-->
                        <div class="col-lg-3 col-md-6">
                            <div class="header-logo">
                                <a href="<?php echo base_url('/');?>"><img src="<?php echo base_url('assets/img/logo/logo.png');?>" alt=""></a>
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
                                                <li><a href="<?php echo base_url('Ikutaja/jadiRelawan');?>">Jadi Relawan</a></li>
                                                <li><a href="<?php echo base_url('Ikutaja/eventsAll');?>">Events</a></li>                                                                                               
                                                <li><a href="<?php echo base_url('Ikutaja/galeri');?>">Galeri</a></li>
                                                <li><a href="<?php echo base_url('Ikutaja/blog');?>">Blog</a></li>                                                
                                            </ul>                                            
                                        </li>                                        
										<li><a href="#">ABOUT</a>                                            
                                            <ul>
                                                <li><a href="<?php echo base_url('Ikutaja/tentang');?>">Tentang</a></li>
                                                <li><a href="<?php echo base_url('Ikutaja/team');?>">Team</a></li>                                                                                                
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
                                <a href="<?php echo base_url('Ikutaja/login');?>">LOGIN</a>
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