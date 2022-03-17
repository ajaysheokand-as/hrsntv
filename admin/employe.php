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
    <!-- DataTables -->
    <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body class="layout-top-nav control-sidebar-slide-open" style="height: auto;">
    <div class="wrapper">
        <?php
        include("header.php");
        require_once('../config/conn.php');
        ?>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>All Team Member</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Team</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-12">

                            <!-- /.card -->

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title"> <a class="btn btn-success btn-sm" href="add_reporter.php"> Add New Member</a></h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline collapsed" role="grid" aria-describedby="example1_info">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">SNo.</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Name</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Mob. No.</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Email</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Address</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Gender</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Designation</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Action</th>
                                                            <!-- <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" >Gender</th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $sql = "SELECT * FROM `employee` WHERE 1";
                                                        $result = mysqli_query($conn, $sql);
                                                        $i = 1;
                                                        if (mysqli_num_rows($result) > 0)
                                                            while ($row = mysqli_fetch_assoc($result)) { ?>
                                                            <tr class="odd">
                                                                <td class="dtr-control sorting_1" tabindex="0"><?php echo $i++; ?></td>
                                                                <td><?php echo $row['employee_name']; ?></td>
                                                                <td><?php echo $row['employee_mobile']; ?></td>
                                                                <td><?php echo $row['employee_email']; ?></td>
                                                                <td><?php echo $row['employee_address']; ?></td>
                                                                <td><?php echo $row['employee_sex']; ?></td>
                                                                <td><?php echo $row['employee_designation']; ?></td>
                                                                <td><button onclick="deleteEmp(<?php echo $row['employee_id']; ?>);" class="btn btn-danger btn-sm" style="margin: 2px;">Delete</button> </td>
                                                                <!-- <td ><?php echo $row['employee_name']; ?></td> -->
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                    <!-- <tfoot>
                                                        <tr>
                                                            <th rowspan="1" colspan="1">Rendering engine</th>
                                                            <th rowspan="1" colspan="1">Browser</th>
                                                            <th rowspan="1" colspan="1">Platform(s)</th>
                                                            <th rowspan="1" colspan="1" style="display: none;">Engine version</th>
                                                            <th rowspan="1" colspan="1" style="display: none;">CSS grade</th>
                                                        </tr>
                                                    </tfoot> -->
                                                </table>
                                            </div>
                                        </div>

                                    </div>
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
            <?php
            include("footer.php");
            ?>
        </div>
        <!-- </section> -->
        <!-- /.content-wrapper -->

    </div>

    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="../dist/js/adminlte.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../plugins/jszip/jszip.min.js"></script>
    <script src="../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- OPTIONAL SCRIPTS -->
    <script src="../plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../dist/js/pages/dashboard3.js"></script>
    <script src="../scripts/request.js"></script>

    <script>
        function deleteEmp(employee_id) {

            const id = employee_id;
            swal({
                title: "Warning",
                text: "Are you sure you want to delete",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((res) => {
                // console.log(res);
                if (res) deleteEmploye(id);
            });
        }

        function deleteEmploye(employee_id) {
            ajaxRequest('user/remove.php', {
                employee_id
            }, (res) => {
                if (res.success) {
                    swal('Deleted', 'Successfully deleted', "success").then(() => {
                        location.reload();
                    })
                } else {
                    swal('Error', 'error occurred ' + res.error, "error")
                }
            }, true);
        }
    </script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>