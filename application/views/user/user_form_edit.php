<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">

              <div class="card-header">             
                <h3 class="card-title ">Edit Data User</h3>   
                <div class="float-right"">
                <a href="<?=site_url('user')?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i>  Back</a>   
                </div>
              </div>    
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                                           
                    <form action="" method="post">
                        <div class="card-body">
                        <div class="form-group ">
                            <label for="fullname">Nama *</label>
                            <input type="hidden" name="user_id" value="<?=$row->user_id?>">
                            <input type="text" class="form-control <?=form_error('fullname')? "is-invalid" : null ?>" name="fullname" id="fullname" placeholder="Full Name" value="<?=$this->input->post('fullname') ?? $row->name?>" >
                            <?=form_error('fullname')?>
                        </div>
                        <div class="form-group">
                            <label for="username">Username *</label>
                            <input type="text" class="form-control <?=form_error('username')? "is-invalid" : null ?>" name="username" id="username" placeholder="Username" value="<?=$this->input->post('fullname') ?? $row->username?>">
                            <?=form_error('username')?>
                        </div>
                        <div class="form-group">
                            <label for="Password1">Password</label><small>(Kosongkan jika tidak diganti)</small>
                            <input type="password" class="form-control <?=form_error('Password1')? "is-invalid" : null ?>" name="Password1" id="Password1" placeholder="Password"  value="<?=$this->input->post('Password1')?>">
                            <?=form_error('Password1')?>                            
                        </div>
                        <div class="form-group">
                            <label for="PasswordConf">Password Confirmation</label>
                            <input type="password" class="form-control <?=form_error('PasswordConf')? "is-invalid" : null ?>" name="PasswordConf" id="PasswordConf" placeholder="Repeat Password" value="<?=$this->input->post('PasswordConf')?>">
                            <?=form_error('PasswordConf')?>   
                        </div>
                        <div class="form-group">
                        <label for="Level">Level *</label>
                        <select class="custom-select rounded-0 form-control <?=form_error('level')? "is-invalid" : null ?>" name="level" id="level">
                            <?php $level = $this->input->post('level') ? $this->input->post('level') : $row->level ?>
                            <option value="2" <?= $level == 2 ? "selected" : null?>>Admin</option>
                            <option value="3" <?= $level == 3 ? "selected" : null?>>Dosen</option>
                            <option value="4" <?= $level == 4 ? "selected" : null?>>Mahasiswa</option>                                                  
                        </select>
                        <?=form_error('level')?>
                        <!-- </div>
                                <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                            </div>
                        </div> -->
                        <!-- <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div> -->
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Edit</button>
                        <button type="reset" class="btn btn-flat">Reset</button>
                        </div>
                    </form>
                    </div>
                </div>

                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->