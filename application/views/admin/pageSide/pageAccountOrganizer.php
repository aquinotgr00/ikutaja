
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
                                    <li class="active">Organizer</li>
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
                                    <th>Website</th>
                                    <th>Alamat</th>
                                    <th>Telpon Kantor</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($organizations as $key => $value) : ?>
                                <tr>
                                    <td> #<?= $value->id ?> </td>
                                    <td><span class="name"><?= $value->name ?></span></td>
                                    <td><span class="product"><?= $value->website ?></span></td>
                                    <td><span class="product"><?= $value->address ?></span></td>
                                    <td><span class="product"><?= $value->office_phone ?></span></td>
                                    <td>
                                        <button type="button" class="btn btn-success mb-1 org-edit-button" data-toggle="modal" data-org-id="<?= $value->id ?>" data-target="#largeModal">
                                            EDIT
                                        </button>
                                        <button type="button" class="btn btn-danger mb-1 org-del-button" data-toggle="modal" data-org-id="<?= $value->id ?>" data-target="#confirmModal">
                                            DELETE
                                        </button>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
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
                                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="modal-body">
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Text Input</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email Input</label></div>
                                            <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" placeholder="Enter Email" class="form-control"><small class="help-block form-text">Please enter your email</small></div>
                                        </div>
                                        
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Textarea</label></div>
                                            <div class="col-12 col-md-9"><textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea></div>
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
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Confirm</button>
                                    </div>
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
                                <form action="#" method="post" id="form-del-org" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="modal-body">
                                        <h4>Anda yakin ingin menghapus Organisasi ini dengan id: <span id="org-del-id"></span> ?</h4>
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
        