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
        <section class="content container">
            <div class="row" style="margin-top: 20px;">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">News</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label for="newsTitle"> News Title</label>
                                        <input type="text" id="newsTitle" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="newsDescription">Description</label>
                                        <textarea id="newsDescription" class="form-control" rows="4"></textarea>
                                    </div>

                                </div>
                                <div class="col-12 col-sm-6 col-md-6">

                                    <div class="form-group">
                                        <label for="newsCategory">Category</label>
                                        <select id="newsCategory" class="form-control custom-select">
                                            <option selected="" disabled="">Select</option>
                                            <option>Common</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="newsYT">YouTube Link</label>
                                        <textarea id="newsYT" class="form-control" rows="4"></textarea>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>
            <div class="row" style="margin-bottom: 20px;">
                <div class="col-12">
                    <a href="#" class="btn btn-secondary">Cancel</a>
                    <input type="submit" id="btnAddNews" value="Add News" class="btn btn-success float-right">
                </div>
            </div>
        </section>
        <?php
        include("footer.php");
        ?>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

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
        $("#btnAddNews").on("click", (e) => {
            e.preventDefault();
            const title = $("#newsTitle").val() != "" ? $("#newsTitle").val() : null;
            const description = $("#newsDescription").val() != "" ? $("#newsDescription").val() : null;
            const category = $("#newsCategory").val() != "" ? $("#newsCategory").val() : null;
            const yt = $("#newsYT").val() != "" ? $("#newsYT").val() : null;
            // if (yt == null || title == null)return;
            data = {
                title,
                description,
                category,
                yt
            }
            ajaxRequest("../api/news/add.php", data, (res) => {
                if (res.success) {
                    swal("Post Added", "New Post Successfully added", "success");
                } else {
                    swal("error", res.error, 'error');
                }
            });
        });
    </script>
</body>

</html>