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
                                            <th class="serial">#</th>
                                            <th class="avatar">Avatar</th>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="serial">1.</td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="<?php echo base_url('assetsAdmin/img/avatar/1.jpg'); ?>" alt=""></a>
                                                </div>
                                            </td>
                                            <td> #5469 </td>
                                            <td>  <span class="name">Louis Stanley</span> </td>
                                            <td> <span class="product">iMax</span> </td>
                                            <td><span class="count">231</span></td>
                                            <td>
                                                <button type="button" class="btn btn-success mb-1" data-toggle="modal" data-target="#mediumModal">
                                                    EDIT
                                                </button>
                                                <button type="button" class="btn btn-danger mb-1">
                                                    DELETE
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="serial">2.</td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="<?php echo base_url('assetsAdmin/img/avatar/2.jpg'); ?>" alt=""></a>
                                                </div>
                                            </td>
                                            <td> #5468 </td>
                                            <td>  <span class="name">Gregory Dixon</span> </td>
                                            <td> <span class="product">iPad</span> </td>
                                            <td><span class="count">250</span></td>
                                            <td>
                                                <button type="button" class="btn btn-success mb-1" data-toggle="modal" data-target="#mediumModal">
                                                    EDIT
                                                </button>
                                                <button type="button" class="btn btn-danger mb-1">
                                                    DELETE
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="serial">3.</td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="<?php echo base_url('assetsAdmin/img/avatar/3.jpg'); ?>" alt=""></a>
                                                </div>
                                            </td>
                                            <td> #5467 </td>
                                            <td>  <span class="name">Catherine Dixon</span> </td>
                                            <td> <span class="product">SSD</span> </td>
                                            <td><span class="count">250</span></td>
                                            <td>
                                                <button type="button" class="btn btn-success mb-1" data-toggle="modal" data-target="#mediumModal">
                                                    EDIT
                                                </button>
                                                <button type="button" class="btn btn-danger mb-1">
                                                    DELETE
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="serial">4.</td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="<?php echo base_url('assetsAdmin/img/avatar/4.jpg'); ?>" alt=""></a>
                                                </div>
                                            </td>
                                            <td> #5466 </td>
                                            <td>  <span class="name">Mary Silva</span> </td>
                                            <td> <span class="product">Magic Mouse</span> </td>
                                            <td><span class="count">250</span></td>
                                            <td>
                                                <button type="button" class="btn btn-success mb-1" data-toggle="modal" data-target="#mediumModal">
                                                    EDIT
                                                </button>
                                                <button type="button" class="btn btn-danger mb-1">
                                                    DELETE
                                                </button>
                                            </td>
                                        </tr>
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
                            <!-- tambah event -->
                

                        
            
        </div>
    </div>
</div>