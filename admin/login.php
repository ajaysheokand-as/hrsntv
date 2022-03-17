<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HRSNTV</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>

<body class="login-page" style="min-height: 466px;">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <img src="../img/logo.png" height="70px" width="70px"> </br>
        <a href="#" class="h1"><b>HRSNTV</b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Login to <b> Haryana Social News TV</b></p>

        <form action="#" method="post">
          <div class="input-group mb-3">
            <input type="number" id="mobile" class="form-control" placeholder="Mobile">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-phone"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" id="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" id="btnLogin" class="btn btn-primary btn-block">Login</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center mt-2 mb-3">
          <a href="forgot.php" class="btn btn-block btn-primary">
            I forgot my password
          </a>
          <!-- <a href="createuser.php" class="btn btn-block btn-danger">
            Register a new membership
          </a> -->
        </div>
        <!-- /.social-auth-links -->

        <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="../scripts/request.js"></script>
  <script src="../scripts/md5.js"></script>
  <script>
    $("#btnLogin").on("click", (e) => {
      e.preventDefault();

      const mobile = $('#mobile').val() != "" ? $('#mobile').val() : null;
      const password = $('#password').val() != "" ? $('#password').val() : null;
      if (mobile == null && password == null) {
        swal("Warning", "Field Value Missing", "warning");
        return;
      }
      const data = {
        mobile,
        password: $.md5(password)
      };
      ajaxRequest("../../api/user/login.php", data, (res) => {
        console.log(res);
        if (res.success) {
          location.href = './dashboard.php'
          // swal("",res.data,"Success");
        } else {
          swal("Error", res.error, "error");
        }
      });

    });
  </script>

</body>

</html>