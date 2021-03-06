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
        <p class="login-box-msg">Forget  <b> Password</b></p>

        <form action="#" method="post">
        <div class="input-group mb-3">
            <input type="text" id="name" class="form-control" placeholder="Name">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="number" id="mobile" class="form-control" placeholder="Mobile">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-phone"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="mail" id="mail" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
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
          <div class="input-group mb-3">
            <input type="password" id="again_password" class="form-control" placeholder=" Enter Password Again">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row input-group mb-3">
            <!-- /.col -->
            <div class="col-6">
              <button type="submit" id="btnOtp" class="btn btn-success btn-block">Send OTP</button>
            </div>
            <div class="col-6">
          <input type="number" id="otp" class="form-control" placeholder="Enter OTP">
          </div>
            <!-- /.col -->
          </div>
          <div class="row input-group mb-3">
            <!-- /.col -->
            <div class="col-12">
              <button type="submit" id="btnVerify" class="btn btn-primary btn-block">Verify</button>
            </div>
            <!-- <div class="col-6">
          <input type="number" id="otp" class="form-control" placeholder="Enter OTP">
          </div> -->
            <!-- /.col -->
          </div>
          
        </form>

        <!-- <div class="social-auth-links text-center mt-2 mb-3">
          <a href="forgot.php" class="btn btn-block btn-primary">
            I forgot my password
          </a>
          <a href="createuser.php" class="btn btn-block btn-danger">
            Register a new membership
          </a>
        </div> -->
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
    $("#btnOtp").on("click", (e) => {
      e.preventDefault();

      const name = $('#name').val() != "" ? $('#name').val() : null;
      const mobile = $('#mobile').val() != "" ? $('#mobile').val() : null;
      const mail = $('#mail').val() != "" ? $('#mail').val() : null;
      const password = $('#password').val() != "" ? $('#password').val() : null;
      if (mobile == null && password == null && mail == null && name == null) {
        swal("Warning", "Field Value Missing", "warning");
        return;
      }
      const data = {
        name,
        mobile,
        mail,
        password: $.md5(password), 
        otp: Math.floor((Math.random() * 1000000) + 100),
      };
      ajaxRequest("../../api/mail/mail.php", data, (res) => {
        console.log(res);
        if (res.success) {
          location.href = "./admin/forget.php"
          // swal("",res.data,"Success");
        } else {
          swal("Error", res.error, "error");
        }
      });

    });
  </script>

</body>

</html>