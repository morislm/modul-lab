<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Mahasiswa</li>
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
                <h3 class="card-title">Data Mahasiswa</h3>
                <div class="float-right">
                    <a href="<?=site_url('mahasiswa/add')?>" class="btn btn-primary btn-flat"><i class="fa fa-user-plus"></i>  Create</a>
                </div>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>JK</th>
                    <th>TTL</th>                    
                    <th>Tahun Masuk</th>
                    <th>Prodi</th>
                    <th>Alamat</th>
                    <th>HP</th>
                    <th>E-mail</th>                   
                    <th>Action</th>                   
                  </tr>
                  </thead>
                  <tbody>

                  <?php
                  $no = 1; 
                  foreach($row->result() as $key => $data) {?>

                    <tr>
                        <td><?=$no++?></td>
                        <td><?=$data->nama?></td>
                        <td><?=$data->nim?></td>
                        <td><?=$data->jk?></td>
                        <td><?=$data->tempat_lahir?>,&nbsp<?=$data->tanggal_lahir?>
                        <td><?=$data->tahun_masuk?></td>
                        <td></td>
                        <td><?=$data->alamat?></td>
                        <td><?=$data->no_hp?></td>
                        <td><?=$data->email?></td>
                        <td class="text-center" widht="160px">
                          <form action="<?=site_url('mahasiswa/del')?>" method="post">
                            <a href="<?=site_url('mahasiswa/edit/'.$data->id_mahasiswa)?>" class="btn btn-primary btn-xs"><i class="fa fa-pen"></i>
                            Edit
                            </a>
                      
                            <input type="hidden" name="id_mahasiswa" value="<?=$data->id_mahasiswa?>">
                            <button onclick="return confirm('Apakah data akan dihapus ?')"class="btn btn-danger btn-xs">
                              <i class="fa fa-trash"></i>Delete
                            </button>
                          </form>
                        </td>
                          
                    </tr>
                    
                    <?php }?>

                  </tbody>
                  
                  <tfoot>
                  <tr>
                  <th>#</th>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>NIDN</th>
                    <th>Jenis Kelamin</th>
                    <th>TTL</th>                    
                    <th>Alamat</th>
                    <th>Jurusan</th>
                    <th>HP</th>
                    <th>E-mail</th>                   
                    <th>Action</th> 
                  </tr>
                  </tfoot>
                </table>
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