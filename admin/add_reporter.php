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
                            <h3 class="card-title">Add Reporter</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="reporterForm" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label for="reporterName"> Name</label>
                                            <input type="text" id="reporterName" name="reporterName" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="reporterDesignation"> Designation</label>
                                            <input type="text" id="reporterDesignation" name="reporterDesignation" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="reporterArea"> Area</label>
                                            <input type="text" id="reporterArea" name="reporterArea" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="reporterAddress">Address</label>
                                            <textarea id="reporterAddress" name="reporterAddress" class="form-control" rows="2"></textarea>
                                        </div>

                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label for="inputGender">Gender</label>
                                            <select id="inputGender" name="inputSex" class="form-control custom-select">
                                                <option selected="" disabled="">Select</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                                <!-- <option>Canceled</option>
                                        <option>Success</option> -->
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputMobile"> Mobile No.</label>
                                            <input type="number" id="inputMobile" name="inputMobile" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail"> Email</label>
                                            <input type="email" id="inputEmail" name="inputEmail" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputImg">Upload Photo</label>
                                            <input type="file" id="inputImg" accept="image/*" name="inputImg" class="form-control">
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>
            <div class="row" style="margin-bottom: 20px;">
                <div class="col-12">
                    <a href="#" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Add Reporter" id="btnAddReporter" class="btn btn-success float-right">
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
    <script>
        $(document).ready(function(e) {
            $("#btnAddReporter").on('click', (function(e) {
                e.preventDefault();
                var form = document.querySelector('#reporterForm');

                $.ajax({
                    url: "../api/employee/add.php",
                    type: "POST",
                    enctype: 'multipart/form-data',
                    data: new FormData(form),
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function() {
                        //$("#preview").fadeOut();
                        // $("#err").fadeOut();
                    },
                    success: function(data) {
                        if (data.success)
                            swal("Reporter Joined", "successfully new reporter added", "success");
                        else
                            swal("Reporter Joined", "error occurred " + data.error, "error");
                    },
                    error: function(e) {
                        swal("Reporter Joined", "some error occurred ", "error");
                        // $("#err").html(e).fadeIn();
                    }
                });
            }));
        });
    </script>
</body>

</html>