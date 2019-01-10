<!--Breadcrumb Area Start-->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    <h1 class="breadmome-name">Dashboard</h1>
                    <ul>
                        <li><a href="<?php echo base_url('/'); ?>">Home</a></li>
                        <li class="active">Pelaksana</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb Area End-->

<div class="jumbotron-user-area mt-5">
    <div class="container">
        <div class="jumbotron bg-white shadow-sm p-0">
            
            <div class="row m-0">
                <div class="col-lg-4 p-0">
                    <div class="vol-user-card card border-0 rounded-0">
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>
                                    <i class="fa fa-bell text-white"></i>
                                </li>
                                <li class="text-center mt-80 mb-80">
                                    <img class="vol-user-picture rounded-circle mb-3" src="https://s14-eu5.startpage.com/cgi-bin/serveimage?url=https%3A%2F%2Fwww.squ.edu.om%2FPortals%2F85%2Fuser_icon.png&sp=dd64109a31bfb53a355c8d9fa4658b60" alt="user profile">
                                    <h3 class="text-white">Organizer name</h3>
                                    <h5 class="text-white">Organizer title</h5>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer text-white">
                            <ul class="list-inline text-center">
                                <li class="list-inline-item mr-2 pr-5">
                                    <i class="fa fa-comment"></i>
                                    2.5k
                                </li>
                                <li class="list-inline-item ml-2 pl-5">
                                    <i class="fa fa-heart"></i>
                                    1.2k
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 p-0">
                    <div class="card border-0 rounded-0">
                        <div class="card-body p-0">
                            <div class="vol-map-outer">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15813.090661504151!2d110.3964295!3d-7.76088065!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1546673883431" width="600" height="464" frameborder="0" style="border:0;width:100%;" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- tambah event -->                                    
            <div class="navbar-nav mx-auto">
                <button type="button" class="col-2 offset-5 btn btn-primary mb-1" data-toggle="modal" data-target="#largeModal">
                    ADD EVENT
                </button>                        
            </div>                
            <!-- tambah event -->                                
        
            <div class="table-stats order-table">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>Alamat</th>
                            <th>Kuota</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="tbody-org-event">

                    </tbody>
                </table>
            </div> <!-- /.table-stats -->                          
            
            <!-- edit event -->
            <div class="modal fade pt-120" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mediumModalLabel">Edit Event</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">                                                
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Text Input</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email Input</label></div>
                                    <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" placeholder="Enter Email" class="form-control"><small class="help-block form-text">Please enter your email</small></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="password-input" class=" form-control-label">Password</label></div>
                                    <div class="col-12 col-md-9"><input type="password" id="password-input" name="password-input" placeholder="Password" class="form-control"><small class="help-block form-text">Please enter a complex password</small></div>
                                </div>                                                                                                                                                 
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Select</label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="select" id="select" class="form-control">
                                            <option value="0">Please select</option>
                                            <option value="1">Option #1</option>
                                            <option value="2">Option #2</option>
                                            <option value="3">Option #3</option>
                                        </select>
                                    </div>
                                </div>                                                
                            </form>    
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary">Confirm</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- edit event -->
            
            <!-- tambah event -->
            <div class="modal fade pt-120" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="largeModalLabel">Tambah Event</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="#" id="org-add-event" method="post" enctype="multipart/form-data" class="form-horizontal">                                                
                            <div class="modal-body">
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class="form-control-label">Judul Event</label></div>
                                    <div class="col-12 col-md-9"><input type="text" name="name" placeholder="Judul Event" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class="form-control-label">Alamat</label></div>
                                    <div class="col-12 col-md-9"><input type="text" name="address" placeholder="Alamat" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class="form-control-label">Kuota</label></div>
                                    <div class="col-12 col-md-9"><input type="text" name="kuota" placeholder="kuota" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class="form-control-label">Tanggal</label></div>
                                    <div class="col-12 col-md-9"><input type="date" name="date" placeholder="tanggal" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class="form-control-label">Gambar</label></div>
                                    <div class="col-12 col-md-9"><input type="text" name="date" placeholder="Link ke gambar" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Keterangan</label></div>
                                    <div class="col-12 col-md-9"><textarea name="description" id="textarea-input" rows="9" placeholder="Keterangan" class="form-control"></textarea></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Bidang</label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="field_id" class="form-control">
                                            <option value="0">Please select</option>
                                            <option value="1">Seni Budaya</option>
                                            <option value="2">Budaya</option>
                                            <option value="3">Musik</option>
                                        </select>
                                    </div>
                                </div> 
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Lokasi</label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="location_id" class="form-control">
                                            <option value="0">Please select</option>
                                            <option value="1">Klaten</option>
                                            <option value="2">Sragen</option>
                                            <option value="3">Sleman</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Confirm</button>
                            </div>
                            <input type="hidden" name="organization_id" id="form-org-id">
                        </form>
                    </div>
                </div>
            </div>
            <!-- tambah event -->
            
        </div>
    </div>
</div>