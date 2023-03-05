<?php require('config.php');

require("check_session.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
     <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
     
    <title>EDIT_PROFILE</title>
</head>
<body style="background-image:url(sign.jpg);background-repeat: no-repeat;background-size: cover;">
<?php
    $vlogger_id=$_SESSION['u_info']['vlogger_id'];
    $src = "SELECT * FROM vlogger WHERE vlogger_id=$vlogger_id";
    $rs = mysqli_query($con, $src) or die(mysqli_error($con));
    $rec = mysqli_fetch_assoc($rs);?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary shadow">
        <a class="navbar-brand font-weight-bold text-warning font-weight-bold" href="main.php">TOTRON</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavBar"
            aria-controls="myNavBar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="myNavBar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <h4 class="text-warning" style="padding-top:15%;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-size: 14px;"tabindex="-1"><strong>Hi <?php 
                        echo ($_SESSION['u_info']['first_name']);
                        ?></strong></h4></li>
                    <li class="nav-item active">
                    <a class="nav-link" href='main.php'  tabindex="-1">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Contacts
                    </a>
                    <div class="dropdown-menu bg-secondary shadow " aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-light">7362997119</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-light">8250058517</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-light">9832265845</a>
                        
                    </div>
                </li>
            
                <li class="nav-item ">
                    <a class="nav-link" href='vlog_view.php'  tabindex="-1">post</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href='logout.php'  tabindex="-1">logout</a>
                </li>
</ul>
</div>

       
    </nav>
    <div class="container-fluid" >
       <h4 class="text-secondery"><b class="text-info "style="font-size:30px;">TOTRON</b> <b class="text-secondary">your sports blog</b></h4>
            <div class="jumbotron bg-transparent"style="width:60%" >
              <div >
        <form  name="frm1" method="POST" enctype="multipart/form-data" > 
        <h5><b class="text-success" style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">CREATE ACCOUNT</b></h5>
        <div class="form-group" style="width:100%;">
            <label for="first_name"><B class="text-info" style="font-size: medium;">First Name:</B></label>
            <input type="text" class="form-control border-primary" name="first_name" id="first_name" value="<?php echo $rec['first_name'] ?> " autofocus required>
        </div>
        <div class="form-group"  style="width:100%;">
            <label for="middle_name"><B class="text-info" style="font-size:medium;">Middle Name:</B></label>
            <input type="text" class="form-control border-primary" name="middle_name" id="middle_name" value="<?php echo $rec['middle_name'] ?> ">
        </div>
        <div class="form-group"  style="width:100%;">
            <label for="last_name"><B class="text-info" style="font-size: medium;">Last Name:</B></label>
            <input type="text" class="form-control border-primary" name="last_name" id="last_name" value="<?php echo $rec['last_name'] ?> ">
        </div>
        <div class="form-group"  style="width:100%">
            <label for="mobile"><B class="text-info" style="font-size: medium;">mobile:</B></label>
            <input type="text" class="form-control border-primary" name="mobile" id="mobile" value="<?php echo $rec['mobile'] ?> ">
        </div>
        <div class="form-group"  style="width: 100%;">
            <label for="email"><B class="text-info" style="font-size:medium;">Email:</B></label>
            <input type="email" class="form-control border-primary" name="email" id="email" value="<?php echo $rec['email'] ?> ">
        </div>
        <div class="form-group"  style="width:100%;">
            <label for="password"><B class="text-info" style="font-size:medium;">Password:</B></label>
            <input type="password" class="form-control border-primary" name="password" id="password" value="<?php echo $rec['password'] ?> " onkeyup="check_pass(this.value);">
                <label id="msg"></label>        
        </div>
        <div class="form-group"  style="width:100%;">
            <label for="intro"><B class="text-info" style="font-size: medium;">ABOUT YOU</B></label>
            <input type="text"class="form-control border-primary" name="intro" id="intro" value="<?php echo $rec['intro'] ?> ">
        </div>
        <div class="form-group"  style="width:100%;">
            <label for="profile"><B class="text-info" style="font-size: medium;">Profile Image</B></label>
            <input type="file" class="form-control border-primary" style="padding-left: 1%;padding-bottom:3%;" name="profile" id="profile" value="<?php echo $rec['profile'] ?> ">
        </div>
        <input type="submit" class="btn btn-outline-primary text-info"   name="ok" value="update ">
        <div class="form-group">
        </div>
       
    </form>
            </div>
        </div>
    </div>
    <?php
if(isset($_POST['ok'])){
    $ftype_arr = array("png", "PNG", "JPG", "jpg", "jpeg", 'JPEG');
    $first_name=$_POST['first_name'];
    $middle_name=$_POST['middle_name'];
    $last_name=$_POST['last_name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $intro=$_POST['intro'];
    $fname = $_FILES['profile']['name'];
    $profile = "profile_picture/" . rand(0000000, 9999999) . "_" . $fname;
    $uftype = explode(".", $fname);
    $fext = end($uftype);
    if (in_array($fext, $ftype_arr)) {
        if (move_uploaded_file($_FILES['profile']['tmp_name'], $profile)){
    /*$language=implode(",",$_POST['language']);
    $address=$_POST['address'];
    $city=$_POST['city'];*/
    $upd = "UPDATE vlogger SET first_name='$first_name', middle_name='$middle_name', last_name='$last_name', mobile='$mobile',email='$email',password='$password',intro='$intro',profile='$profile',fname='$fname' WHERE vlogger_id=$vlogger_id";
    $res= mysqli_query($con, $upd) or die(mysqli_error($con));
    if ($res == 1) {
        echo "<div class='container' style='padding-top:1%;padding-right:10%'>
        <div class='alert alert-danger'><strong>UPDATE  DONE!!!</strong></div></div>";

    } else {
        echo "<div class='container' style='padding-top:1%;padding-right:10%'>
        <div class='alert alert-danger'><strong>UPDATE NOT DONE!!! <br>TRY AGAIN LATER</strong></div></div>";
    }
}
    }
}
?></div>
</div><br><br><br>
    <div class="container-fluid " style="background-color: #34282C;">
    <footer class="container-fluid py-1">
        <br>
        <div class="container">
           <div class="row">
              <div class="col-md-6">
                 <div class="row">
                    <div class="col-md-6 ">
                       <div class="logo-part">
                          <img src="company.jpg" class="w-50 logo-footer">
                          <p style="color:#E5E4E2">TOTRON private limited</p>
                          <p style="color:rgb(245, 234, 234);">your thoughts our presentation</p>
                       </div>
                    </div>
                    <div class="col-md-6 px-4">
                       <h6 style="color:white;"> About Company</h6>
                       <p style="color:white;">Our new startup <br>if you want to full fill your dreams join us </p>
                       <a href="#" class="btn-footer" style="color:white;"> More Info </a><br>
                       <a href="#" class="btn-footer" style="color:white;"> Contact Us</a>
                    </div>
                 </div>
              </div>
              <div class="col-md-6">
                 <div class="row">
                    <div class="col-md-6 px-4">
                       <h6 style="color:white;"> Help us</h6>
                       <div class="row ">
                          <div class="col-md-6 px-4">
                             <ul>
                                <li style="color:white;"> <a href="#"style="color:white;"> Terms</a> </li>
                                <li style="color:white;"> <a href="#" style="color:white;"> Policy</a> </li>
                             </ul>
                          </div>
                       </div>
                    </div>
                    <div class="col-md-6 ">
                       <h6 style="color:white;">Social</h6>
                       <div class="social">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                       </div>
                       <p style="color:white;">this is our  project</p>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        </footer>
    </div>
    <script type="text/javascript" src="pass.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

</body>
</html>