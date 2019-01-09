        <footer>
            <div id="panduan" class="footer-container">
                <div class="footer-top-area black-bg pt-80 pb-45">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-md-6 col-lg-3">
                                <div class="single-footer-widget mb-30">
                                    <a class="footer-logo" href="<?php echo base_url('/');?>"><img draggable="false" src="https://res.cloudinary.com/ikutaja/image/upload/v1546102240/img/logo/logo.png" alt=""></a>
                                    <p>Mari menggalang dana dan berdonasi secara online dan transparan.</p>
                                    <h4 class="newslatter-title">Segera Berlangganan</h4>
                                    <form action="<?php echo base_url('#');?>" class="footer-subscribe-form validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll">
                                            <div id="mc-form" class="mc-form subscribe-form">
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
                                </div>
                            </div>
                            <div class="pl-20">
                                <img draggable="false" height="100" src="https://res.cloudinary.com/ikutaja/image/upload/v1546349854/img/footer/2.png" />
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
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <?php $this->load->view('scripts/scriptAuthMiddleware') ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://res.cloudinary.com/ikutaja/raw/upload/v1546085007/js/plugins.min.js"></script>
        <script src="https://res.cloudinary.com/ikutaja/raw/upload/v1546084692/js/ajax.mail.js"></script>        
        <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
        <?php isset($xscript) ? $this->load->view($xscript) : null ?>
        <script src="https://res.cloudinary.com/ikutaja/raw/upload/v1546085001/js/style.min.js"></script>
        <script src="https://res.cloudinary.com/ikutaja/raw/upload/v1546162403/js/map.js"></script>        
        
        <!-- <script type="text/javascript">
            window.__lc = window.__lc || {};
            window.__lc.license = 10466777;
            (function() {
                var b = document.createElement("script");
                b.type = "text/javascript";
                b.async = true;
                b.src = ("https:" == document.location.protocol ? "https://" : "http://") + "cdn.livechatinc.com/tracking.js";
                var a = document.getElementsByTagName("script")[0];
                a.parentNode.insertBefore(b, a)
            })();
        </script>

        <noscript>
            <a href="https://www.livechatinc.com/chat-with/10466777/">Chat with us</a>, powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener" target="_blank">LiveChat</a>
        </noscript> -->
        
    </body>

    </html>
