        <!-- footer -->
		<footer>
		    <div id="panduan" class="footer-container">
		        
		        <div class="footer-top-area black-bg pt-80 pb-45">
		            <div class="container">
		                <div class="row justify-content-between">
                
		                    <div class="col-md-6 col-lg-3">
		                        <div class="single-footer-widget mb-30">
                                    <a class="footer-logo" href="<?php echo base_url('/');?>"><img src="https://res.cloudinary.com/ikutaja/image/upload/v1546102240/img/logo/logo.png" alt=""></a>
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
										<li><a href="<?php echo base_url('panduanPelaksana');?>">Panduan Pelaksana</a></li>
										<li><a href="<?php echo base_url('cariPelaksana');?>">Cari Pelaksana</a></li>		                                	                                		                                                                																				
										<li><a href="<?php echo base_url('panduanRelawan');?>">Panduan Relawan</a></li>		                                	                                
										<li><a href="<?php echo base_url('profilRelawan');?>">Profil Relawan</a></li>		                                	                                
										
		                            </ul>
		                        </div>
							</div>

							<div class="col-md-6 col-lg-3">
		                        <div class="single-footer-widget mb-30 footer-menu">
		                            <h3 class="footer-title">Informasi</h3>
		                            <ul>
		                                <li><a href="<?php echo base_url('kontak');?>">Kontak</a></li>
										<li><a href="<?php echo base_url('policy');?>">Policy</a></li>
										<li><a href="<?php echo base_url('karir');?>">Karir</a></li>		                                
		                                <li><a href="<?php echo base_url('faq');?>">FAQ</a></li>
		                            </ul>
		                        </div>
							</div>
							
							
		                    <div class="col-md-6 col-lg-3">
		                        <div class="single-footer-widget mb-30 footer-menu">
		                            <h3 class="footer-title">Kantor Ikutaja</h3>
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
		               <p><span>Copyright</span> &copy; - 2018 PT. Ikut Aja Indonesia All right reserved</p>
		            </div>
		        </div>
		       
		    </div>
		</footer>
		<!-- footer -->

	</div>
	<!-- wadah -->

	<?php isset($authMiddleware) ? $this->load->view('scripts/scriptAuthMiddleware') : null ?>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>	
	<script src="https://res.cloudinary.com/ikutaja/raw/upload/v1546085007/js/plugins.min.js"></script>	
	<script src="https://res.cloudinary.com/ikutaja/raw/upload/v1546084692/js/ajax.mail.js"></script>	
	<script src="https://res.cloudinary.com/ikutaja/raw/upload/v1546085001/js/main.min.js"></script>
	<script src="https://res.cloudinary.com/ikutaja/raw/upload/v1546085001/js/style.min.js"></script>
	<script src="https://res.cloudinary.com/ikutaja/raw/upload/v1546162403/js/map.js"></script>
	
	<!-- <?php $xscript ? $this->load->view($xscript) : null ?> -->

</body>
</html>
