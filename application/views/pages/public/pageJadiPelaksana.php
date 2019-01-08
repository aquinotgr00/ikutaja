<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    <h1 class="breadmome-name">Jadi Pelaksana</h1>
                    <ul>
                        <li><a href="<?php echo base_url('/');?>">Home</a></li>
                        <li class="active">Jadi Pelaksana</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="volunteer-about-area pt-50 pb-50">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 col-lg-6">
                <div class="about-img-area img-full">
                    <div class="img-title">
                        <img draggable="false" src="https://res.cloudinary.com/ikutaja/image/upload/v1546883138/img/jadi/organisasi.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="volunteer-about-content">
                    <h2>Jadi Pelaksana</h2>
                    <h3>Hai #OrangBaik!</h3>
                    <p>
                       Mari terlibat langsung dalam kegiatan seperti berbagi Inspirasi, Music, Film, dan berbagai
                       aktivitas lain yang bisa jadi Anda yang menginisiasinya.
                    </p>                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="volunteer-signup-area pt-90 pb-75 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="signup-title">
                    <h2>Daftar <span>Sekarang</span></h2>
                </div>
                
                <div class="volunteer-form">

                    <div class="volunteer-form-title">
                        <h3>Akun Pelaksana</h3>
                    </div>

                    <form action="#" id="form-jadi-pelaksana" class="registration-form">
                        <fieldset>
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>1 / 4</h3>
                                    <p>Narahubung Organisasi</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-users"></i>
                                </div>
                            </div>
                            <div class="row pb-30 pt-20">
                                <div class="col-lg-8 col-md-12 col-sm-12">
                                    <div class="volunteer-form-style mb-20">
                                        <label for="user_username">Username*</label>
                                        <input type="text" name="user_username" placeholder="Username" required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="volunteer-form-style mb-20">
                                        <label for="user_email">Email*</label>
                                        <input type="user_email" name="user_email" placeholder="Alamat Email" required>
                                    </div>
                                </div>                                
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="volunteer-form-style mb-20">
                                        <label for="user_phone">Nomor Handphone*</label>
                                        <input type="text" name="user_phone" placeholder="Nomor Handphone" required>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="volunteer-form-style mb-20">
                                        <label for="user_password">Kata Sandi*</label>
                                        <!-- pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" -->
                                        <input type="password" placeholder="Kata Sandi" id="psw" name="user_password"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="volunteer-form-style mb-20">
                                        <label for="password-confirmation">Ulangi Kata Sandi*</label>
                                        <input type="password" placeholder="Ulangi Sandi" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 pt-30">
                                    <div class="volunteer-form-style">                                        
                                        <button type="button" class="sent-btn btn-next">Lanjut</button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>                        
                    
                        <fieldset>
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>2 / 4</h3>
                                    <p>Informasi Umum Organisasi</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-building"></i>
                                </div>
                            </div>
                            <div class="row pb-30 pt-20">
                                <div class="col-lg-4 col-md-4">
                                    <div class="avatar-upload">
                                        <div class="avatar-edit">                                                
                                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />    
                                            <label for="imageUpload"></label>                                                                                            
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="imagePreview" style="background-image: url(https://store.playstation.com/store/api/chihiro/00_09_000/container/US/en/99/UP0001-BLUS31176_00-UAWATCHDOG000003//image?_version=00_09_000&platform=chihiro&w=720&h=720&bg_color=000000&opacity=100);">
                                            </div>
                                        </div>
                                    </div>                                        
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <div class="volunteer-form-style mb-20 textarea">
                                        <label for="deskripsiOrganisasi">Deskripsi Organisasi</label>
                                        <textarea name="org_description" placeholder="Ikutaja membantu organisasi dalam mencari relawan." required></textarea>
                                    </div>
                                </div> 
                                <div class="col-lg-6">
                                    <div class="volunteer-form-style mb-20">
                                        <label for="namaOrganisasi">Nama Organisasi</label>
                                        <input name="org_name" type="text" placeholder="PT Angkasa Orbit Lima" required>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="volunteer-form-style mb-20">
                                        <label for="jenisOrganisasi">Jenis Organisasi</label>
                                        <select name="org_type" class="wide" required>
                                            <option value="">- Pilih Tipe Organisasi -</option>
                                            <option value="1">Komunitas</option>
                                            <option value="2">Koperasi</option>
                                            <option value="3">Lembaga Pemerintahan</option>
                                            <option value="4">Perkumpulan</option>
                                            <option value="5">Perusahaan</option>
                                            <option value="6">Yayasan</option>
                                            <option value="7">Lain-lain</option>
                                        </select>
                                    </div>
                                </div>                                
                                <div class="col-lg-3 col-md-6">
                                    <div class="volunteer-form-style mb-20">                                            
                                        <label for="tanggalBerdiri">Tanggal Berdiri</label>
                                        <input name="org_establishment_date" type="date" required>
                                    </div>
                                </div>                                                                       
                                <div class="col-lg-12 pt-30">
                                    <div class="volunteer-form-style">                                        
                                        <button type="button" class="sent-btn btn-previous">Balik</button>
                                        <button type="button" class="sent-btn btn-next">Lanjut</button>
                                    </div>
                                </div>
                            </div>                                
                        </fieldset>

                        <fieldset>
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>3 / 4</h3>
                                    <p>Informasi Kontak Organisasi</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-globe"></i>
                                </div>
                            </div>
                            <div class="row pb-30 pt-20">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="volunteer-form-style mb-20">
                                        <label for="lokasi">Lokasi</label>
                                        <input name="org_address" type="text" placeholder="Jalan Candi Gebang" required>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="volunteer-form-style mb-20 pt-30">                                            
                                        <select name="org_state_id" class="wide" required>
                                            <option value="">- Provinsi -</option>
                                            <option value="Semarang">Semarang</option>
                                            <option value="Yogyakarta">Yogyakarta</option>
                                            <option value="Salatiga">Salatiga</option>
                                            <option value="Surabaya">Surabaya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="volunteer-form-style mb-20 pt-30">                                            
                                        <select name="org_location_id" class="wide" required>
                                            <option value="">- Kabupaten -</option>
                                            <option value="1">Klaten</option>
                                            <option value="2">Sragen</option>
                                            <option value="3">Sleman</option>
                                            <option value="4">Boyolali</option>
                                        </select>
                                    </div>
                                </div>                                
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="volunteer-form-style mb-20">
                                        <label for="kodePos">Kode Pos</label>
                                        <input name="org_postal_code" type="text" placeholder="53417" required>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="volunteer-form-style mb-20">
                                        <label for="teleponKantor">Telepon Kantor</label>
                                        <input name="org_office_phone" type="text" placeholder="+62 812 5567 0911">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="volunteer-form-style mb-20">
                                        <label for="website">Website</label>
                                        <input name="org_website" type="text" placeholder="https://www.aol.com">
                                    </div>
                                </div>
                                <div class="col-lg-12 pt-30">
                                    <div class="volunteer-form-style">                                        
                                        <button type="button" class="sent-btn btn-previous">Balik</button>
                                        <button type="button" class="sent-btn btn-next">Lanjut</button>
                                    </div>
                                </div>
                            </div>                                
                        </fieldset>

                        <fieldset>
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>4 / 4</h3>
                                    <p>Pratinjau</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-fire"></i>
                                </div>
                            </div>
                            <div class="row pb-30 pt-20">
                                <div class="col-lg-12">
                                    <div class="volunteer-form-style mb-20">
                                        <p>
                                        Pastikan semua Informasi tentang organisasi sudah benar, klik selesai untuk
                                        melanjutkan proses registrasi atau kembali untuk mengedit informasi.
                                        </p>
                                    </div>
                                </div>                                   
                                <div class="col-lg-12 pt-30">
                                    <div class="volunteer-form-style">                                        
                                        <button type="button" class="sent-btn btn-previous">Balik</button>
                                        <button type="submit" class="sent-btn" value="Konfirmasi">Konfirmasi</button>
                                    </div>
                                </div>
                            </div>                                
                        </fieldset>
                        <input type="hidden" name="user_type" value="2">
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>