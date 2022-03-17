<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HRSNTV</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>

<body class="layout-top-nav control-sidebar-slide-open" style="height: auto;">
  <div class="wrapper">
    <?php
    include("header.php");
    ?>
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Dashboard</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Post</span>
                <span class="info-box-number" id="postCount"></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Reporter</span>
                <span class="info-box-number" id="reporterCount"></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Uploads</span>
                <span class="info-box-number">13,648</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number">93,139</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <div class="row">
          <h3 class="mt-4 mb-2">Activity <code></code></h3>
        </div>
        <div class="row">

          <div class="col-md-3 col-sm-6 col-12">
            <a href="add_news.php">
              <div class="info-box bg-info">
                <span class="info-box-icon"><i class="fas fa-plus"></i></span>

                <div class="info-box-content">
                  <!-- <span class="info-box-text">Bookmarks</span> -->
                  <span class="info-box-number">Add News</span>

                </div>
                <!-- /.info-box-content -->
              </div>
              </a>
              <!-- /.info-box -->
          </div>
          
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <a href="all_news.php">
              <div class="info-box bg-success">
                <span class="info-box-icon"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                  <!-- <span class="info-box-text">Likes</span> -->
                  <span class="info-box-number">All News</span>

                  <!-- <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                  70% Increase in 30 Days
                </span> -->
                </div>
                <!-- /.info-box-content -->
              </div>
            </a>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <a href="addCategory.php">
              <div class="info-box bg-info">
                <span class="info-box-icon"><i class="fas fa-eye"></i></span>

                <div class="info-box-content">
                  <!-- <span class="info-box-text">Likes</span> -->
                  <span class="info-box-number">Add Category</span>

                  <!-- <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                  70% Increase in 30 Days
                </span> -->
                </div>
                <!-- /.info-box-content -->
              </div>
            </a>
            <!-- /.info-box -->
          </div>
          <div class="col-md-3 col-sm-6 col-12">
            <a href="./add_reporter.php">
              <div class="info-box bg-danger">
                <span class="info-box-icon"><i class="fas fa-plus"></i></span>

                <div class="info-box-content">
                  <!-- <span class="info-box-text">Likes</span> -->
                  <span class="info-box-number">Add Reporter</span>

                  <!-- <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                  70% Increase in 30 Days
                </span> -->
                </div>
                <!-- /.info-box-content -->
              </div>
            </a>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <a href="employe.php">
              <div class="info-box bg-warning">
                <span class="info-box-icon"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                  <!-- <span class="info-box-text">Likes</span> -->
                  <span class="info-box-number">All Reporter</span>

                  <!-- <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                  70% Increase in 30 Days
                </span> -->
                </div>
                <!-- /.info-box-content -->
              </div>
            </a>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
      </div>
    </div>
    
  </div>
  <?php
    include("footer.php");
    ?>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <script src="../scripts/request.js"></script>

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE -->
  <script src="../dist/js/adminlte.js"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="../plugins/chart.js/Chart.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="../dist/js/pages/dashboard3.js"></script>
  <script src="../scripts/request.js"></script>
  <script>
    ajaxRequest("counter.php", {}, (res) => {
      if (res.success) {
        $('#reporterCount').html(res.data.content);
        $('#postCount').html(res.data.employee);
      }
    }, true)
  </script>
</body>

</html>