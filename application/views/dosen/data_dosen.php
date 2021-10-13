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
                <h3 class="card-title">Data Dosen</h3>
                <div class="float-right">
                    <a href="<?=site_url('dosen/add')?>" class="btn btn-primary btn-flat"><i class="fa fa-user-plus"></i>  Create</a>
                </div>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>NIDN</th>
                    <th>JK</th>
                    <th>TTL</th>                    
                    <th>Alamat</th>
                    <th>Jurusan</th>
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
                    <td><?=$data->nip?></td>
                    <td><?=$data->nidn?></td>
                    <td><?=$data->jk?></td>
                    <td><?=$data->tempat_lahir?>,&nbsp<?=$data->tgl_lahir?>
                    </td>                    
                    <td><?=$data->alamat?></td>
                    <td><?=
                            $data->id_jurusan == 1 
                            ? 'Keperawatan' 
                            : ( $data->id_jurusan == 2
                                ? 'Kebidanan' 
                                : ( $data->id_jurusan  == 3
                                ? 'Gizi' 
                                : 'TLM'
                                ) 
                                );      
                        ?>
                
                    </td>
                    <td><?=$data->no_hp?></td>
                    <td><?=$data->email?></td>
                    <td class="text-center" widht="160px">
                      <form action="<?=site_url('dosen/del')?>" method="post">
                          <a href="<?=site_url('dosen/edit/'.$data->id_dosen)?>" class="btn btn-primary btn-xs"><i class="fa fa-pen"></i>
                          Edit
                          </a>
                    
                          <input type="hidden" name="id_dosen" value="<?=$data->id_dosen?>">
                          <button onclick="return confirm('Apakah data akan dihapus ?')"class="btn btn-danger btn-xs">
                            <i class="fa fa-trash"></i>Delete
                          </button>

                          </td>
                    </form>
                    
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