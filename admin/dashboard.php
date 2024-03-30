<?php include('../includes/config.php') ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="small-box bg-info">
              <div class="inner">
                
                <h4><strong class="info-box-number">2000</strong></h4>
                <h5><strong>Total Students</strong></h5>
                <div class="icon">
                  <i class="fas fa-graduation-cap"></i>
                </div>
                <a class="small-box-footer"></a>            
              </div>
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="small-box bg-info">
              
              <div class="inner">
              <h4><strong class="info-box-number">50</strong></h4>
              <h5><strong>Total Teachers</strong></h5>
              <div class="icon">
                  <i class="fas fa-users"></i>
                </div>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="small-box bg-success">
              
              <div class="inner">
              <h4><strong class="info-box-number">100</strong></h4>
                <h5><strong>Total Courses</strong></h5>
                <div class="icon">
                  <i class="fas fa-book-open"></i>
                </div>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="small-box bg-success">
              <div class="inner">
              <h4><strong class="info-box-number">10</strong></h5>
              <h5><strong>New Inquiries</strong></h4>
              <div class="icon">
                  <i class="fas fa-question"></i>
                </div>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
<?php include('footer.php') ?>