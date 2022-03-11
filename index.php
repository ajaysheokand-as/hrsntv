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
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="layout-top-nav control-sidebar-slide-open" style="height:auto; ">
    <div class="wrapper">
        <?php
        include("header.php");
        ?>

        <div class="row m-1">
            <div class="col-12 col-sm-6 col-md-6 text-center d-flex  justify-content-center">
                <div class="m-3">
                    <h3>Welcome To</h3>
                    <img src="img/logo.png" height="150px" width="150px">
                    <h2>Haryana Social<strong>News TV</strong></h2>
                    <!-- <p>hrsntv.com</p> -->
                    <p class="lead mb-5">Cheeka Baipas Gali No. 2 Kaithal (HR) INDIA<br>
                        Phone: +91 93500-12253
                    </p>
                    <div class="text-center" style="margin-bottom: 10px;">
                        <a href="mailto:haryanasocialnewstv@gmail.com" target="_blank" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i> Email
                        </a>
                        <a href="https://wa.me/919350012253" target="_blank" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i> WhatsApp
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6">
                <div id="carouselExampleInterval" class="carousel slide m-3" data-bs-ride="carousel" style="height: 80%;">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img src="img/carosol/hr.jpeg" class="d-block w-100 rounded" alt="..." height="100%">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="img/carosol/pic.jpeg" class="d-block w-100 rounded" alt="..." height="100%">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="img/carosol/ln.jpeg" class="d-block w-100 rounded" alt="..." height="100%">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>

        

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
                <div class="card-footer text-center ">
                    <button class="btn btn-default center" id="btnSeeMore">See More</button>
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
            return `<div class="col-8 col-sm-6 col-md-4 d-flex align-items-stretch flex-column text-center align-items-center justify-content-center">
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

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>