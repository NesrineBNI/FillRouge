<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Al-Salam School</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <!-- icon site -->
    <link rel="icon" href="images/logo/logo.png">
  <style>
    .btn{
      margin:0;
    }
  </style>
</head>
<body>

  <section class="bg-light vh-100 d-flex">
    <div class="col-3 m-auto">
      <div class="card">
        <div class="card-body">
          <div class="border rounded-circle mx-auto d-flex " style="width:100px;height:100px" ><img src="images/logo/logo.png" alt="logo" style="margin-left: 13px;"></div>
          <form action="req/login.php" method="POST">
          <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
			            <?=$_GET['error']?>
                </div>
            <?php } ?>
            <!-- Material input -->
                <div class="md-form">
                  <input type="text" id="name" name="uname" class="form-control">
                  <label for="name">Your username</label>
                </div>
                <!-- Material input -->
                <div class="md-form">
                  <input type="password" id="password" name="pass" class="form-control">
                  <label for="password">Your Password</label>
                </div>
                <div class="md-form">
                <select class="form-control" id="login" name="role">
                    <option value="1">Admin</option>
                    <option value="2">Teacher</option>
                    <option value="3">RegistrarOffice</option>
                </select>
            </div>
            <div class="text-center">
              <button class="btn btn-primary" name="login">Login</button>
              <a href="index.php" class="text-decoration-none">Home</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <?php 
        // $pass = 123456; pass admin
        // $pass = password_hash($pass, PASSWORD_DEFAULT);
        // echo $pass;
        // $pass = 1234; pass techear
        // $pass = password_hash($pass, PASSWORD_DEFAULT);
        // echo $pass;
?>
   <!-- JQuery -->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>
</html>

