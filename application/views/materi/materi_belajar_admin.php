<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Materi Pembelajaran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Materi Pembelajaran</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

<section class="content">
     
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <div class="card">              
              <div class="card-header p-2">
                <?php if (($this->session->userdata('level') == 1) || ($this->session->userdata('level') == 2 )) { ?> 
                <div class="float-right">
                    <a href="<?=site_url('materi/add')?>" class="btn btn-primary btn-flat"><i class="fa fa-user-plus"></i>  Tambah Materi</a>
                </div>
                <?php } ?>
                <ul class="nav nav-pills">
                <!-- <li class="nav-item"><a class="nav-link active" href="#materi1" data-toggle="tab">Materi 1</a></li> -->
                
                <?php $no=1; foreach ($menus as $menu) {          
                    if (isset($menu->submenu)) {
                    foreach ($menu->submenu as $child) { ?>
                        <?php if ($no == 1 ){?>
                        <li class="nav-item"><a class="nav-link" href="#<?=strtok($child->sub_menu_belajar," ")?>" data-toggle="tab"><?=$child->sub_menu_belajar?></a></li>
                        <?php }else{?>
                          <li class="nav-item"><a class="nav-link" href="#<?=strtok($child->sub_menu_belajar," ")?>" data-toggle="tab"><?=$child->sub_menu_belajar?></a></li>
                         <?php } $no++;?> 
                 <?php }}}?>
                </ul>
              </div><!-- /.card-header -->
              
              <div class="card-body">
                <div class="tab-content">
                <!-- <div class="active tab-pane" id="materi1">
                    <?php //foreach($data2->result() as $key => $data){
                      //echo $data->menu_belajar;
                      //echo '<p>';
                      //echo $data->deskripsi;
                      //}?>
                  </div> -->
                
                  <?php $no=1; foreach ($menus as $menu) {          
                        if (isset($menu->submenu)) {
                            foreach ($menu->submenu as $child) { ?>
                              <div class="tab-pane" id="<?=strtok($child->sub_menu_belajar," ")?>">                    
                              <?php //echo $child->id_sub_menu_belajar; ?>

                              Pemeriksaan sistematis pada bagian tubuh untuk menilai abnormalitas struktur dengan atau tanpa alat dalam mendapatkan data akurat melalui 4 teknik yaitu inspeksi, palpasi, perkusi dan auskultasi.<p><p>
                              <h3 class="timeline-header"><a href="#">Materi 1 : Pemeriksaan Fisik Lab</h3>
                              <div class="timeline-body">
                                <i class="far fa-file"></i>
                                <a href="<?=base_url()?>/uploads/Askrening, SKM, M.Kes.pdf" target="_blank"> Pemeriksaan Fisik Lab </a>
                              </div>  
                              <h3 class="timeline-header"><a href="#">Materi 2 : Video Pemeriksaan Sistematis</h3>
                              <div class="embed-responsive embed-responsive-16by9">
                                <!-- <iframe controls="true" class="embed-responsive-item" src="<?=base_url()?>/uploads/Pemeriksaan Vocal premitus.mp4" allowfullscreen></iframe> -->
                                <video controls="true" class="embed-responsive-item" src="<?=base_url()?>/uploads/Pemeriksaan Vocal premitus.mp4" allowfullscreen></video>
                              </div>

                                                              
                              </div>
                              

                  <?php }}}?>
                  <!-- /.tab-pane -->
                  <!-- <div class="tab-pane" id="1">
                    <p>ADA DATA</p>
                  </div> -->

                  
                  
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
    </div>
    </div>    
        
    
</section>  