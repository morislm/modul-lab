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
    <?php foreach($row->result() as $key => $data) { ?>

        <!-- Default box -->
        <div class="card">
        <div class="card-header bg-warning">
            <h2 class="card-title"><?=$data->sub_menu_belajar?></h2>

            <div class="card-tools">
            <button type="button" class="btn btn-tool bg-white" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                    <div class="row">
                        <div class="col-12">
                            <h3><?=$data->nama_materi?></h3>
                            <div class="post">
                                <p>
                                <?=$data->deskripsi?>
                                </p>

                                <p>
                                <h6><a href="<?=$data->path?>" class="stretched-link text-danger"><i class="fas fa-link mr-1"></i>Download File</a></h6>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                    <h3 class="text-primary"><i class="fas fa-paint-brush"></i> AdminLTE v3</h3>
                    <p class="text-muted">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>
                    <br>
                    <div class="text-left mt-5 mb-3">
                    <a href="#" class="btn btn-sm btn-primary">Add files</a>
                    <a href="#" class="btn btn-sm btn-warning">Report contact</a>
                    </div>
                </div> -->
            </div>
            <div class="row">
                <div class="text-left mt-5 mb-3">
                    <a href="#" class="btn btn-sm btn-primary">Add files</a>
                    <!-- <a href="#" class="btn btn-sm btn-warning">Report contact</a> -->
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        </div>
        <!-- /.card -->
    <?php } ?>    

        
</section>
<!-- /.content -->