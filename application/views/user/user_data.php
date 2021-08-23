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
              <li class="breadcrumb-item active">DataTables</li>
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
              <div class="pull-left">
                    <a href="<?=site_url('user/add')?>" class="btn btn-primary btn-flat"><i class="fa fa-user-plus"></i>  Create</a>
                </div><br>
                <h3 class="card-title">DataTable with default features</h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Name</th>
                    <th>Level</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $no = 1; 
                  foreach($row->result() as $key => $data) {?>    
                  <tr>
                    <td><?=$no++?></td>
                    <td><?=$data->username?></td>
                    <td><?=$data->name?></td>
                    <td><?=$data->level?></td>
                    <td class="text-center" widht="160px">
                    <a href="<?=site_url('user/edit')?>" class="btn btn-primary btn-xs"><i class="fa fa-pen"></i>Edit</a>
                    <a href="<?=site_url('user/delete')?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>Delete</a>

                    </td>
                    
                  </tr>
                  <?php }?>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Name</th>
                    <th>Level</th>
                    <th>Actions</th>
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