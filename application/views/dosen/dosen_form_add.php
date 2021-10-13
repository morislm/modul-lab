<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dosen</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dosen</li>
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
                <h3 class="card-title ">Tambah Data Dosen</h3>   
                <div class="float-right"">
                <a href="<?=site_url('dosen')?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i>  Back</a>   
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
                            <input type="text" class="form-control <?=form_error('fullname')? "is-invalid" : null ?>" name="fullname" id="fullname" placeholder="Full Name"  value="<?=set_value('fullname')?>">
                            <?=form_error('fullname')?>
                           
                        </div>
                        <div class="form-group">
                            <label for="nip">NIP *</label>
                            <input type="text" class="form-control <?=form_error('nip')? "is-invalid" : null ?>" name="nip" id="nip" placeholder="NIP" value="<?=set_value('nip')?>">
                            <?=form_error('nip')?>                           
                        </div>
                        <div class="form-group">
                            <label for="nidn">NIDN *</label>
                            <input type="text" class="form-control <?=form_error('nidn')? "is-invalid" : null ?> " name="nidn" id="nidn" placeholder="NIDN" value="<?=set_value('nidn')?>">
                            <?=form_error('nidn')?>                                                     
                        </div>
                        
                        <div class="form-group">
                        <label for="radio">Jenis Kelamin *</label>                        
                          <div class="form-check">
                            
                            <input class="form-check-input <?=form_error('jk')? "is-invalid" : null ?>" type="radio" name="jk" id="jk" value="L" <?=set_radio('jk', 'L', 'jk' == 'L' ? TRUE : FALSE);?>>
                            <label class="form-check-label">Laki-Laki</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input <?=form_error('jk')? "is-invalid" : null ?>" type="radio" name="jk" id="jk" value="P" <?=set_radio('jk', 'P', 'jk' == 'P' ? TRUE : FALSE);?>>
                            <label class="form-check-label">Perempuan</label>
                            <?=form_error('jk')?>
                          </div>                                                   
                        </div>

                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir*</label>
                            <input type="text" class="form-control " name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" >
                                                    
                        </div>

                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir*</label>
                            <input type="date" class="form-control " name="tgl_lahir" id="tgl_lahir" >
                                                      
                        </div>

                        <div class="form-group">
                          <label>Alamat</label>
                          <textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat ..."></textarea>
                        </div>

                        <div class="form-group">
                        <label>Jurusan</label>
                        <select class="custom-select" name="jurusan" id="jurusan">
                          <option value="1">Keperawatan</option>
                          <option value="2">Kebidanan</option>
                          <option value="3">Gizi</option>
                          <option value="4">TLM</option>
                         </select>
                        </div>

                        <div class="form-group">
                              <label for="no_hp">No. HP</label>
                              <input type="text" class="form-control " name="no_hp" id="no_hp" placeholder="No. HP" >
                                                         
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control " name="email" id="email" placeholder="E-mail" >
                                                       
                        </div>
                        <div class="form-group">
                        <label for="Status">Status*</label>
                        <select class="custom-select rounded-0 form-control" name="status" id="status">
                            <option value="">-- Pilih --</option>
                            <option value="1">Aktif</option>
                            <option value="0">Tidak Aktif</option>                   
                        </select>
                        </div>
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