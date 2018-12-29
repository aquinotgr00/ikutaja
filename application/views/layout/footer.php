        <!-- footer -->
		<footer>
		    <div class="footer-container">
		        
		        <div class="footer-top-area black-bg pt-80 pb-45">
		            <div class="container">
		                <div class="row justify-content-between">
                
		                    <div class="col-md-6 col-lg-3">
		                        <div class="single-footer-widget mb-30">
                                    <a class="footer-logo" href="<?php echo base_url('/');?>"><img src="<?php echo base_url('assets/img/logo/logo.png'); ?>" alt=""></a>
		                            <p>IkutAja.id adalah situs web yang dibangun khusus untuk menggalang dana dan berdonasi secara online dan transparan. .</p>
		                            <h4 class="newslatter-title">Segera Berlangganan</h4>
		                            <form action="<?php echo base_url('#');?>" class="footer-subscribe-form validate" target="_blank" novalidate>
                                       <div id="mc_embed_signup_scroll">
                                          <div id="mc-form" class="mc-form subscribe-form" >
                                            <input id="mc-email" type="email" autocomplete="off" placeholder="Masukkan Emailmu" />
                                            <button id="mc-submit">KIRIM</button>
                                          </div>
                                       </div>
                                   </form>
		                        </div>
		                    </div>
		                    		                    
		                    <div class="col-md-6 col-lg-3">
		                        <div class="single-footer-widget mb-30 footer-menu">
		                            <h3 class="footer-title">Pelajari</h3>
		                            <ul>
		                                <li><a href="<?php echo base_url('#');?>">Tentang Kami</a></li>
		                                <li><a href="<?php echo base_url('#');?>">Causes</a></li>
		                                <li><a href="<?php echo base_url('#');?>">Events</a></li>
		                                <li><a href="<?php echo base_url('#');?>">Blog</a></li>
		                                <li><a href="<?php echo base_url('#');?>">Pages</a></li>
		                                <li><a href="<?php echo base_url('#');?>">Shop</a></li>
		                            </ul>
		                        </div>
		                    </div>
		                    		                    
		                    <div class="col-md-6 col-lg-3">
		                        <div class="single-footer-widget mb-30 footer-menu">
		                            <h3 class="footer-title">Informasi</h3>
		                            <ul>
		                                <li><a href="about.html">Our Volunteer</a></li>
		                                <li><a href="<?php echo base_url('#');?>">Donation</a></li>
		                                <li><a href="<?php echo base_url('#');?>">Login/Register</a></li>
		                                <li><a href="<?php echo base_url('#');?>">Support</a></li>
		                                <li><a href="<?php echo base_url('#');?>">Policy</a></li>
		                                <li><a href="<?php echo base_url('#');?>">FAQ</a></li>
		                            </ul>
		                        </div>
							</div>
							
		                    <div class="col-md-6 col-lg-3">
		                        <div class="single-footer-widget mb-30 footer-menu">
		                            <h3 class="footer-title">Kontak</h3>
		                            <p class="ft-address"><span>Alamat:</span>Jl. Candi Gebang 2, Sleman, Yogyakarta, Indonesia</p>
		                            <p class="ft-contact-info ds-inline">
                                        <span>Telefon:</span>
		                                <a href="<?php echo base_url('#');?>">+0274 123 4567</a>,
		                                <a href="<?php echo base_url('#');?>">+0274 321 7654</a>
		                            </p>
		                            <p class="ft-contact-info">
                                        <span>Situs:</span>
		                                <a href="<?php echo base_url('#');?>">ikutaja@ikutaja.id</a>
		                                <a href="<?php echo base_url('#');?>">www.ikutaja.com</a>
		                            </p>
		                        </div>
		                    </div>
		                   
		                </div>
		            </div>
		        </div>
		        
		        <div class="footer-bottom-area pt-20 pb-20">
		            <div class="container text-center">
		               <p><span>Copyright</span> &copy; - 2018 <a href="<?php echo base_url('#');?>">PT. Ikut Aja Indonesia </a>All right reserved</p>
		            </div>
		        </div>
		       
		    </div>
		</footer>
		<!-- footer -->

	</div>
	<!-- wadah -->

	<script src="<?php echo base_url('assets/js/jquery-1.12.4.min.js');?>"></script>	
	<script src="<?php echo base_url('assets/js/popper.min.js');?>"></script>	
	<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>	
	<script src="<?php echo base_url('assets/js/plugins.js');?>"></script>	
	<script src="<?php echo base_url('assets/js/ajax.mail.js');?>"></script>	
	<script src="<?php echo base_url('assets/js/main.js');?>"></script>
	<script src="<?php echo base_url('assets/js/style.js');?>"></script>
	<?php isset($xscript) ? $this->load->view($xscript) : null; ?>

</body>
</html>
