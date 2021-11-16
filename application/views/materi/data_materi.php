<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Materi Belajar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Materi Belajar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Menu Utama</h3>
                </div><!-- /.card-header -->
                <div class="card-body">
                <div class="row">
                <?php
                $no = 1;
                foreach($row->result() as $key => $data) { ?>
                    <!-- <div class="col-md-4 col-sm-6 col-12"> -->
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info bg-gradient">   
                            <div class="inner">
                                <h3><?=$no++?></h3>
                                <p><?=$data->menu_belajar?></p>                              
                            </div>
                            <div class="icon">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                            <a href="<?=site_url('materi/view/'.$data->id_menu_belajar)?>" class="small-box-footer">
                                View <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                        <!-- /.info-box -->
                    </div>

                <?php }?>    

                    
                    
                </div>                    

                </div>
                <!-- /.card-body -->
                </div>                    
            </div>
            <!-- /.col -->

        </div>
        <!-- /.row -->


        
    </div>

</section>
<!-- /.content -->