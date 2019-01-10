
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1><?= $kepala ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#"><?= $kepala ?></a></li>                                    
                                    <li class="active">Volunteer</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated">
                <div class="card">                    

                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Gender</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($volunteers as $key => $value) :
                                ?>
                                <tr>
                                    <td> #<?= $value->id ?> </td>
                                    <td>  <span class="name"><?= $value->first_name." ".$value->last_name ?></span> </td>
                                    <td> <span class="product"><?= $value->address ?></span> </td>
                                    <td><span class="product"><?= $value->gender == 1 ? 'pria' : 'wanita' ?></span></td>
                                    <td>
                                        <button type="button" class="btn btn-success mb-1 vol-edit-button" data-toggle="modal" data-vol-id="<?= $value->id ?>" data-target="#largeModal">
                                            EDIT
                                        </button>
                                        <button type="button" class="btn btn-danger mb-1 vol-del-button" data-toggle="modal" data-vol-id="<?= $value->id ?>" data-target="#confirmModal">
                                            DELETE
                                        </button>
                                    </td>
                                </tr>
                                <?php $no++; endforeach; ?>
                            </tbody>
                        </table>
                    </div> <!-- /.table-stats -->

                    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="largeModalLabel">Edit Modal</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="#" method="post" id="form-edit-vol" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="modal-body">

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">First Name</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="first_name" placeholder="First Name" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Last Name</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="last_name" placeholder="Last Name" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                                            <div class="col-12 col-md-9"><textarea name="description" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Profession</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="profession" placeholder="Profession" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Address</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="address" placeholder="Address" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label">Gender</label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="gender" id="select" class="form-control">
                                                    <option value="0">Please select</option>
                                                    <option value="1">Pria</option>
                                                    <option value="2">Wanita</option>
                                                </select>
                                            </div>
                                        </div>
                                            
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <button class="btn btn-primary" type="submit">Confirm</button>
                                    </div>
                                    <input type="hidden" name="id">
                                </form>    
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="largeModalLabel">Konfirmasi Modal</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="#" method="post" id="form-del-vol" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="modal-body">
                                        <h4>Anda yakin ingin menghapus volunteer ini dengan id: <span id="vol-del-id"></span> ?</h4>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <button class="btn btn-primary" type="submit">Confirm</button>
                                    </div>
                                    <input type="hidden" name="id">
                                </form>    
                            </div>
                        </div>
                    </div>
                            
                </div>
            </div>
        