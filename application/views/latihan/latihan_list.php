<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Latihan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Latihan</a></li>
              <li class="breadcrumb-item active">Latihan Praktikum</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

<section class="content">     
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Pemeriksaan Fisik</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Dosen</th>
                      <th>Latihan</th>
                      <th>Status</th>
                      <th>Aksi</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Ns. Prishilla Sulupadang, S.Kep., M.Kep., Sp.Kep.An</td>
                      <td>Pemeriksaan Inspeksi Mata</td>
                      <td><span class="tag tag-success">Selesai</span></td>
                      <td>
                        <a href="<?=site_url('drag_drop')?>" class="btn btn-primary btn-xs"><i class="fa fa-pen"></i>
                            Mulai
                            </a>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Nurfantri, S.Kep.,Ns.,M.Sc</td>
                      <td>Pemeriksaan Hidung dan Sinus</td>
                      <td><span class="tag tag-warning">Belum</span></td>
                      <td>
                        <a href="<?=site_url('latihan/soal')?>" class="btn btn-primary btn-xs"><i class="fa fa-pen"></i>
                            Mulai
                            </a>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Dewi Sartiya Rini, S.Kep.Ners., Sp.Kep.M.B.</td>
                      <td>Pemeriksaan Mulut dan Paring</td>
                      <td><span class="tag tag-success">Selesai</span></td>
                      <td>
                        <a href="<?=site_url('latihan/soal')?>" class="btn btn-primary btn-xs"><i class="fa fa-pen"></i>
                            Mulai
                            </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->


        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Pemeriksaan Tanda-Tanda Vital</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                      <th>No</th>
                      <th>Dosen</th>
                      <th>Latihan</th>
                      <th>Status</th>
                      <th>Aksi</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Ns. Prishilla Sulupadang, S.Kep., M.Kep., Sp.Kep.An</td>
                      <td>Pengukuran Suhu Tubuh Sublingual</td>
                      <td><span class="tag tag-success">Selesai</span></td>
                      <td>
                        <a href="<?=site_url('latihan/soal')?>" class="btn btn-primary btn-xs"><i class="fa fa-pen"></i>
                            Mulai
                            </a>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Indriono Hadi, S.Kp, M.Kes</td>
                      <td>Pemeriksaan Denyut Nadi</td>
                      <td><span class="tag tag-warning">Belum</span></td>
                      <td>
                        <a href="<?=site_url('latihan/soal')?>" class="btn btn-primary btn-xs"><i class="fa fa-pen"></i>
                            Mulai
                            </a>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Dewi Sartiya Rini, S.Kep.Ners., Sp.Kep.M.B.</td>
                      <td>Pemeriksaan Pernafasan</td>
                      <td><span class="tag tag-success">Selesai</span></td>
                      <td>
                        <a href="<?=site_url('latihan/soal')?>" class="btn btn-primary btn-xs"><i class="fa fa-pen"></i>
                            Mulai
                            </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
</div>
</section>
