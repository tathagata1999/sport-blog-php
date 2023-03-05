<?php require('config.php'); ?>
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
    <title>allposts</title>
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
                <h4 class="text-warning" style="padding-top:15%;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-size: 14px;"tabindex="-1"><strong>Hi <?php 
                        echo ($_SESSION['u_info']['first_name']);
                        ?></strong></h4>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="logout.php" tabindex="-1">LogOut</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="edit_profile.php" tabindex="-1">edit Profile</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="post.php" tabindex="-1">back</a>
                </li>
            </ul>
            
        </div>
    </nav>
    <div class="container-fluid">
    <?php
     $vlogger_id=$_SESSION['u_info']['vlogger_id'];
    $src = "SELECT * FROM post WHERE vlogger_id=$vlogger_id";

    $rs = mysqli_query($con, $src) or die(mysqli_error($con));
    //echo mysqli_num_rows($rs); // Count the number of record in a record set/table
    if (mysqli_num_rows($rs) > 0) {
    ?>
    <table class="table table-dark table-striped" >
            <thead>
                <tr>
                    <th >TItle</th>
                    <th >Summery</th>
                    <th >content</th>
                    <th>created </th>
                    <th >Published</th>
                    <th >status</th>
                    <th>Update</th>
                    <th >Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($rec = mysqli_fetch_assoc($rs)) {
                ?>
                    <tr>
                        <td><?php echo $rec['title'] ?></td>
                        <td><?php echo $rec['summery']?></td>
                        <td><?php echo $rec['content']?></td>
                        <td><?php echo $rec['created_at'] ?></td>
                        <td><?php echo $rec['published_at'] ?></td>
                        <td><?php echo $rec['status'] ?></td>
                        <td><a href="update.php?post_id=<?php echo $rec['post_id']?>"><button class="btn btn-warning" style="width:78%;"  value="update">UPDATE</button></a></td>
                        <td><a onClick="return confirm('do you want to delete this employee data')" href="Delete.php?post_id=<?php echo $rec['post_id']?>"><button class="btn btn-danger" style="width:78%;"  value="delete">DELETE</button></a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    <?php
    } else {
        echo "<div class='container' style='padding-top:30%;padding-right:10%'>
        <div class='alert alert-danger'><strong>NO POST FOUND </strong></div></div>";
    }
    ?>
    <br>
    <?php
    if (isset($_GET['msg'])) {
        echo "<div class='container' style='padding-top:30%;padding-right:10%'>
        <div class='alert alert-danger'><strong>".$_GET['msg']."</strong></div></div>";
    }
    ?>
    </div>
<div style="padding-top:26%">
<div class="container-fluid " style="background-color: #34282C;padding-top:3%;">
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
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

</body>
</html>