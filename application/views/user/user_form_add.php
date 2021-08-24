<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add User</li>
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
                <h3 class="card-title ">Add New Data</h3>   
                <div class="float-right"">
                <a href="<?=site_url('user')?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i>  Back</a>   
                </div>
              </div>    
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                    <?php // echo validation_errors(); ?>                        
                    <form action="" method="post">
                        <div class="card-body">
                        <div class="form-group ">
                            <label for="fullname">Nama *</label>
                            <input type="text" class="form-control <?=form_error('fullname')? "is-invalid" : null ?>" name="fullname" id="fullname" placeholder="Full Name" value="<?=set_value('fullname')?>" >
                            <?=form_error('fullname')?>
                        </div>
                        <div class="form-group">
                            <label for="username">Username *</label>
                            <input type="text" class="form-control <?=form_error('username')? "is-invalid" : null ?>" name="username" id="username" placeholder="Username" value="<?=set_value('username')?>">
                            <?=form_error('username')?>
                        </div>
                        <div class="form-group">
                            <label for="Password1">Password *</label>
                            <input type="password" class="form-control <?=form_error('Password1')? "is-invalid" : null ?>" name="Password1" id="Password1" placeholder="Password" >
                            <?=form_error('Password1')?>                            
                        </div>
                        <div class="form-group">
                            <label for="PasswordConf">Password Confirmation *</label>
                            <input type="password" class="form-control <?=form_error('PasswordConf')? "is-invalid" : null ?>" name="PasswordConf" id="PasswordConf" placeholder="Repeat Password">
                            <?=form_error('PasswordConf')?>   
                        </div>
                        <div class="form-group">
                        <label for="Level">Level *</label>
                        <select class="custom-select rounded-0 form-control <?=form_error('level')? "is-invalid" : null ?>" name="level" id="level">
                            <option value="">-- Pilih --</option>
                            <option value="2" <?=set_value('level') == 2 ? "selected" : null?>>Admin</option>
                            <option value="3" <?=set_value('level') == 3 ? "selected" : null?>>Dosen</option>
                            <option value="4" <?=set_value('level') == 4 ? "selected" : null?>>Mahasiswa</option>                                                  
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
                        <button type="submit" class="btn btn-primary">Save</button>
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