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
                            <div class="row">
                            <div class="col-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="inputName"> Name</label>
                                    <input type="text" id="inputName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputName"> Designation</label>
                                    <input type="text" id="inputName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Address</label>
                                    <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="inputStatus">Status</label>
                                    <select id="inputStatus" class="form-control custom-select">
                                        <option selected="" disabled="">Select one</option>
                                        <option>On Hold</option>
                                        <option>Canceled</option>
                                        <option>Success</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Client Company</label>
                                    <input type="text" id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader">Project Leader</label>
                                    <input type="text" id="inputProjectLeader" class="form-control">
                                </div> -->
                            </div>
                            <div class="col-12 col-sm-6 col-md-6">
                                <!-- <div class="form-group">
                                    <label for="inputName">Project Name</label>
                                    <input type="text" id="inputName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Project Description</label>
                                    <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                                </div> -->
                                <div class="form-group">
                                    <label for="inputStatus">Gender</label>
                                    <select id="inputStatus" class="form-control custom-select">
                                        <option selected="" disabled="">Select</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <!-- <option>Canceled</option>
                                        <option>Success</option> -->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputName"> Mobile No.</label>
                                    <input type="number" id="inputName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputName"> Email</label>
                                    <input type="email" id="inputName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Upload Photo</label>
                                    <input type="choose" id="inputName" class="form-control">
                                </div>
                                
                                <!-- <div class="form-group">
                                    <label for="inputClientCompany">Client Company</label>
                                    <input type="text" id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader">Project Leader</label>
                                    <input type="text" id="inputProjectLeader" class="form-control">
                                </div> -->
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
                    <input type="submit" value="Add Reporter" class="btn btn-success float-right">
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
</body>

</html>