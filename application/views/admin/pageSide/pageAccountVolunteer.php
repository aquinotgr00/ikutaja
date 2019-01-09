
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
                                            <th class="serial">#</th>
                                            <th class="avatar">Avatar</th>
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
                                            <td class="serial"><?= $no; ?></td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="<?php echo base_url('assetsAdmin/img/avatar/1.jpg'); ?>" alt=""></a>
                                                </div>
                                            </td>
                                            <td> #<?= $value->id ?> </td>
                                            <td>  <span class="name"><?= $value->first_name." ".$value->last_name ?></span> </td>
                                            <td> <span class="product"><?= $value->address ?></span> </td>
                                            <td><span class="product"><?= $value->gender == 1 ? 'pria' : 'wanita' ?></span></td>
                                            <td>
                                                <button type="button" class="btn btn-success mb-1" data-toggle="modal" data-target="#largeModal">
                                                    EDIT
                                                </button>
                                                <button type="button" class="btn btn-danger mb-1">
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
                                            <h5 class="modal-title" id="largeModalLabel">Large Modal</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">Static</label></div>
                                                    <div class="col-12 col-md-9">
                                                        <p class="form-control-static">Username</p>
                                                    </div>
                                                </div>
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
                                                    <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Disabled Input</label></div>
                                                    <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="disabled-input" placeholder="Disabled" disabled="" class="form-control"></div>
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
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Select Large</label></div>
                                                    <div class="col-12 col-md-9">
                                                        <select name="selectLg" id="selectLg" class="form-control-lg form-control">
                                                            <option value="0">Please select</option>
                                                            <option value="1">Option #1</option>
                                                            <option value="2">Option #2</option>
                                                            <option value="3">Option #3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Select Small</label></div>
                                                    <div class="col-12 col-md-9">
                                                        <select name="selectSm" id="selectSm" class="form-control-sm form-control">
                                                            <option value="0">Please select</option>
                                                            <option value="1">Option #1</option>
                                                            <option value="2">Option #2</option>
                                                            <option value="3">Option #3</option>
                                                            <option value="4">Option #4</option>
                                                            <option value="5">Option #5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="disabledSelect" class=" form-control-label">Disabled Select</label></div>
                                                    <div class="col-12 col-md-9">
                                                        <select name="disabledSelect" id="disabledSelect" disabled="" class="form-control">
                                                            <option value="0">Please select</option>
                                                            <option value="1">Option #1</option>
                                                            <option value="2">Option #2</option>
                                                            <option value="3">Option #3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="multiple-select" class=" form-control-label">Multiple select</label></div>
                                                    <div class="col col-md-9">
                                                        <select name="multiple-select" id="multiple-select" multiple="" class="form-control">
                                                            <option value="1">Option #1</option>
                                                            <option value="2">Option #2</option>
                                                            <option value="3">Option #3</option>
                                                            <option value="4">Option #4</option>
                                                            <option value="5">Option #5</option>
                                                            <option value="6">Option #6</option>
                                                            <option value="7">Option #7</option>
                                                            <option value="8">Option #8</option>
                                                            <option value="9">Option #9</option>
                                                            <option value="10">Option #10</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">Radios</label></div>
                                                    <div class="col col-md-9">
                                                        <div class="form-check">
                                                            <div class="radio">
                                                                <label for="radio1" class="form-check-label ">
                                                                    <input type="radio" id="radio1" name="radios" value="option1" class="form-check-input">Option 1
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="radio" id="radio2" name="radios" value="option2" class="form-check-input">Option 2
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label for="radio3" class="form-check-label ">
                                                                    <input type="radio" id="radio3" name="radios" value="option3" class="form-check-input">Option 3
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">Inline Radios</label></div>
                                                    <div class="col col-md-9">
                                                        <div class="form-check-inline form-check">
                                                            <label for="inline-radio1" class="form-check-label ">
                                                                <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input">One
                                                            </label>
                                                            <label for="inline-radio2" class="form-check-label ">
                                                                <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">Two
                                                            </label>
                                                            <label for="inline-radio3" class="form-check-label ">
                                                                <input type="radio" id="inline-radio3" name="inline-radios" value="option3" class="form-check-input">Three
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">Checkboxes</label></div>
                                                    <div class="col col-md-9">
                                                        <div class="form-check">
                                                            <div class="checkbox">
                                                                <label for="checkbox1" class="form-check-label ">
                                                                    <input type="checkbox" id="checkbox1" name="checkbox1" value="option1" class="form-check-input">Option 1
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label for="checkbox2" class="form-check-label ">
                                                                    <input type="checkbox" id="checkbox2" name="checkbox2" value="option2" class="form-check-input"> Option 2
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label for="checkbox3" class="form-check-label ">
                                                                    <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> Option 3
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">Inline Checkboxes</label></div>
                                                    <div class="col col-md-9">
                                                        <div class="form-check-inline form-check">
                                                            <label for="inline-checkbox1" class="form-check-label ">
                                                                <input type="checkbox" id="inline-checkbox1" name="inline-checkbox1" value="option1" class="form-check-input">One
                                                            </label>
                                                            <label for="inline-checkbox2" class="form-check-label ">
                                                                <input type="checkbox" id="inline-checkbox2" name="inline-checkbox2" value="option2" class="form-check-input">Two
                                                            </label>
                                                            <label for="inline-checkbox3" class="form-check-label ">
                                                                <input type="checkbox" id="inline-checkbox3" name="inline-checkbox3" value="option3" class="form-check-input">Three
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">File input</label></div>
                                                    <div class="col-12 col-md-9"><input type="file" id="file-input" name="file-input" class="form-control-file"></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="file-multiple-input" class=" form-control-label">Multiple File input</label></div>
                                                    <div class="col-12 col-md-9"><input type="file" id="file-multiple-input" name="file-multiple-input" multiple="" class="form-control-file"></div>
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
                            

                </div>
            </div>
        