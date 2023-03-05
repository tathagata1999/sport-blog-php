<?php require("config.php");?>
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
    <title>TOTRON LOGIN</title>
</head>
<body style="background-image: url(552031.jpg);background-repeat: no-repeat;background-size:cover;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary shadow">
        <a class="navbar-brand font-weight-bold text-warning font-weight-bold" href="#">TOTRON</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavBar"
            aria-controls="myNavBar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="myNavBar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="main.php">Home</a>
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
                
            </ul>
            
        </div>
    </nav>
    <div class="bg-secondary">
        
            <div  style="float:right; padding-right:8%; padding-top:1%;">
                <div class="card col shadow" style="border-radius: 3%;" >
                    <h4 class="text-secondery"><b class="text-warning">TOTRON</b>&nbsp;<b style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">LOGIN</b></h4>
                    <div class="card-body " style="height: fit-content;">
                      <div class="card col mr-2 shadow" style="border-radius: 3%;">
                <form name="frm" method="post" action="logincode.php"> 
                    <br>
                    <div class="form-group" style="width:300px;">
                        <label for="email"><B class="text-info" style="font-size: large;">EMAIL:</B></label>
                        <input type="email" class="form-control border-primary" name="email" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group"  style="width:300px;">
                        <label for="password"><B class="text-info" style="font-size: large;">PASSWORD</B></label>
                        <input type="password" class="form-control border-primary" name="password" id="password" placeholder="Enter your password">
                    </div>
                    <input type="submit" class="btn btn-outline-primary text-info"   name="ok" value="LOGIN ">
                    
                    <div class="form-group"><br>
                        <h6 style="float: right;padding-right:4%;">new user?<b class="text-info"><a href="signup.php">SIGN UP</a></b></h6>
                    </div>
                    <div class="form-group">
                       <br><br><br><br><br><br>
                    </div>
                   
                </form>
            <br>
    </div></div></div>
            </div>      
    </div>
    <?php
    if (isset($_GET['msg'])) {
        echo  "<div class='container' style='padding-right:10%'>
        <div class='alert alert-danger'><strong>".$_GET['msg']."</strong></div></div>";;
     }
    ?>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
<div class="container-fluid " style="background-color: #34282C;padding-top:1.3%;">
    <footer class="container-fluid py-2">
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

</body>
</html>