<?php 
session_start();
if (isset($_SESSION['admin_id']) && isset($_SESSION['role'])) {

    if ($_SESSION['role'] == 'Admin') {
      include "../db_connect.php";
      include "data/setting.php";
       $setting = getSetting($conn);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin - Home</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="icon" href="../images/logo/logo.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php 
        include "inc/navbar.php";
     ?>
     <div class="container mt-5">
         <div class="container text-center">
             <div class="row row-cols-5">
               <a href="teacher.php" 
                  class="col btn btn-dark m-2 py-3">
                 <i class="fa fa-user-md fs-1" aria-hidden="true"></i><br>
                  Teachers
               </a> 
               <a href="student.php" class="col btn btn-dark m-2 py-3">
                 <i class="fa fa-graduation-cap fs-1" aria-hidden="true"></i><br>
                  Students
               </a> 
               <a href="registrar-office.php" class="col btn btn-dark m-2 py-3">
                 <i class="fa fa-pencil-square fs-1" aria-hidden="true"></i><br>
                  Registrar Office
               </a> 
               <a href="section.php" class="col btn btn-dark m-2 py-3">
                 <i class="fa fa-columns fs-1" aria-hidden="true"></i><br>
                  Section
               </a>
               <a href="grade.php" class="col btn btn-dark m-2 py-3">
                 <i class="fa fa-level-up fs-1" aria-hidden="true"></i><br>
                  Grade
               </a> 
               <a href="class.php" class="col btn btn-dark m-2 py-3">
                 <i class="fa fa-cubes fs-1" aria-hidden="true"></i><br>
                  Class
               </a> 
               <a href="message.php" class="col btn btn-dark m-2 py-3">
                 <i class="fa fa-envelope fs-1" aria-hidden="true"></i><br>
                  Message
               </a> 
               <a href="settings.php" class="col btn btn-primary m-2 py-3 col-5">
                 <i class="fa fa-cogs fs-1" aria-hidden="true"></i><br>
                  Settings
               </a> 
               <a href="../logout.php" class="col btn btn-warning m-2 py-3 col-5">
                 <i class="fa fa-sign-out fs-1" aria-hidden="true"></i><br>
                  Logout
               </a> 
             </div>
         </div>
     </div>

     <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="card">
                <div class="card-body">
                  <h3 align="center">
                    <marquee direction="left">current year : <?=$setting['current_year']?></marquee>
                  </h3>
                </div>
            </div>
        </div>
      </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>	
    <script>
        $(document).ready(function(){
             $("#navLinks li:nth-child(1) a").addClass('active');
        });
    </script>

</body>
</html>
<?php 

  }else {
    header("Location: ../login.php");
    exit;
  } 
}else {
	header("Location: ../login.php");
	exit;
} 

?>