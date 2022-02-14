<html lang="en">
<?php require_once('config/conn.php'); ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HRSNTV</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="dist/css/style.css">
</head>

<body class="layout-top-nav control-sidebar-slide-open" style="height: auto;">
    <div class="wrapper">
        <?php
        include("header.php");
        ?>
        <section class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-12 text-center align-items-center justify-content-center">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h5><i class="fas fa-door-open"></i> Welcome To <span style="color: black;">Haryana Social News TV </span></h5>

                        </div>
                    </div>
                    <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">News</li>
            </ol>
          </div> -->
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card card-solid">
                <div class="card-body pb-0">
                    <div id="newSection" class="row">
                        <?php
                        $sql = "SELECT * FROM `contents`";
                        $res = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($res)) { ?>

                        <?php } ?>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                    <button class="btn btn-default center" id="btnSeeMore">See More</button>
                    <!-- <nav aria-label="Contacts Page Navigation">
                        <ul class="pagination justify-content-center m-0">
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                            <li class="page-item"><a class="page-link" href="#">8</a></li>
                        </ul>
                    </nav> -->
                </div>
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->

        <?php
        include("footer.php");
        ?>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard3.js"></script>
    <script src="scripts/request.js"></script>

    <script>
        var off = 9;
        loadNews(0);
        $("#btnSeeMore").on("click", () => {
            loadNews(off);

        });

        function loadNews(from) {
            const data = {
                from
            }
            ajaxRequest("news/fetch.php", data, (res) => {
                if (res.success) {
                    off = from + 9;
                    res.data.map((d) => {

                        $("#newSection").append(newsComponent(d.yt, d.title, d.description));
                    });
                } else {

                }
            }, false);
        }

        function newsComponent(yt, title, description) {
            return `<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column text-center align-items-center justify-content-center">
                                <div class="card bg-light d-flex flex-fill">
                                    <div class="card-header text-muted border-bottom-0">
                                        Category
                                    </div>

                                    <div class="card-body pt-0">
                                        <div row>
                                            <div class="col-12">
                                                <iframe width="320" height="200" src="https://www.youtube.com/embed/${yt}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top: 10px;">
                                            <div class="col-12">
                                                <h2 class="lead"><b>${title}</b></h2>
                                                <p class="text-muted text-sm"> 
                                                    ${description}
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-footer">
                                       ${sharerUI("http://hrsocialnewstv.com/",title)}
                                    </div>
                                </div>
                            </div>`;
        }
    </script>
</body>

</html>