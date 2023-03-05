<?php require("config.php");
//session_destroy();
require("check_session.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
     <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <title>post</title>
    <style>
        .thumb {
            padding-buttom:10%;
            width:30px;
            aspect-ratio:1/1.5;
            

}

 
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary shadow">
        <a class="navbar-brand font-weight-bold text-warning font-weight-bold" href="main.php">TOTRON</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavBar"
            aria-controls="myNavBar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="myNavBar">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <img  class="thumb rounded-circle"src="<?php echo ($_SESSION['u_info']['profile']) ?>"  alt="1">
                       
                </li>
            <li class="nav-item">
                <h4 class="text-warning" style="padding-top:15%;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-size: 14px;"tabindex="-1"><strong>Hi <?php 
                        echo ($_SESSION['u_info']['first_name']);
                        ?></strong></h4>
                </li>
                
                <li class="nav-item ">
                    <a class="nav-link" href="vlog_view.php" tabindex="-1">post</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="logout.php" tabindex="-1">LogOut</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="edit_profile.php" tabindex="-1">edit Profile</a>
                </li>
                
            </ul>
        </div>
    </nav>
   
    <div class="container-fluid" style="float:left;">
       <h4 class="text-secondery"><b class="text-info "style="font-size:30px;">TOTRON</b> <b class="text-secondary">your sports blog</b></h4>
            <div class="card-body " style="padding-bottom: 5%;">
              <div class="card col mr-2 shadow" style="border-radius: 2%;">
        <form class="container-fluid"name="frm1" method="post" enctype="multipart/form-data"> 
        <h5><b class="text-success" style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">POST</b></h5>
        <div class="form-group" >
            <label for="title"><B class="text-info" style="font-size: medium;">Title</B></label>
            <input type="text" class="form-control border-primary" name="title" id="title" placeholder="Enter your Vlogs Title"  autofocus required>
        </div>
        <div class="form-group">
            <label for="summery"><B class="text-info" style="font-size: medium;">summery</B></label>
            <textarea class="form-control border-primary" name="summery" id="summery" placeholder="Enter about your post:"></textarea>
        </div>
        <div class="form-group" >
            <label for="content"><B class="text-info" style="font-size: medium;">content</B></label>
            <input type="text" class="form-control border-primary" style="padding-left: 1%;padding-bottom:3%;" name="content" id="content" placeholder="your content">
        </div>
        <div class="form-group" >
            <label for="content"><B class="text-info" style="font-size: medium;">ATTATCH PICTURE</B></label>
            <input type="file" class="form-control border-primary" style="padding-left: 1%;padding-bottom:3%;" name="img_path" id="img_path" placeholder="upload your picture">
        </div>
        <div class="form-group" >
        <input type="submit" class="btn btn-outline-primary text-info"   name="ok" value="post ">
</div>
    </form>
            </div>
        </div>
    </div>
    <?php
if(isset($_POST['ok'])){
    $ftype_arr = array("png", "PNG", "JPG", "jpg", "jpeg", 'JPEG');
    $title=$_POST['title'];
    $summery=$_POST['summery'];
    $content=$_POST['content'];
    $created_at=date("y/m/d");
    $fname = $_FILES['img_path']['name'];
    $vlogger_id=$_SESSION['u_info']['vlogger_id'];
    $img_path = "uploaded_files/" . rand(0000000, 9999999) . "_" . $fname;
    $uftype = explode(".", $fname);
    $fext = end($uftype);
    if (in_array($fext, $ftype_arr)) {
        if (move_uploaded_file($_FILES['img_path']['tmp_name'], $img_path)){
        $sql="INSERT INTO post (title,summery,content,created_at,vlogger_id,img_path,fname) VALUES('$title','$summery','$content','$created_at','$vlogger_id','$img_path','$fname')";
        $res=mysqli_query($con,$sql) or die (mysqli_error($con));
        if ($res == 1){
            echo "<div class='container' style='padding-top:690px;padding-right:10%'>
            <div class='alert alert-success'><strong>UPLOAD DONE!!! <br>post will be verifying by moderator</strong></div></div>";
        }
        else{
            echo "<div class='container' style='padding-top:690px;padding-right:10%'>
            <div class='alert alert-danger'><strong>SOMETHING WENT WRONG</strong></div></div>";
            }
    }
}
}
?>

<br><br><br><br><br><br><br><br>
        <footer class="container-fluid py-1" style="background-color: #34282C;">
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
        
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    
    </body>
    </html>