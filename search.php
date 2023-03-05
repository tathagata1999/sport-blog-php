<?php require('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <title>SEARCHING DETAILS</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary shadow">
        <a class="navbar-brand font-weight-bold text-warning font-weight-bold" href="#">TOTRON</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavBar"
            aria-controls="myNavBar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="myNavBar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="main.html">Home</a>
                    </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2 " type="text" name="title" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>

</form>
<?php if (isset($_POST['ok'])){
        $title=$_POST['title'];
        $src="SELECT * FROM post WHERE title='$title'";
        $rs=mysqli_query($pp,$src) or die(mesquli_error($pp));
        if (mysqli_num_rows($rs)>0){
        ?>   
             <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>TItle</th>
                    <th>Summery</th>
                    <th>created </th>
                    <th>Published</th>
                    <th>status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($rec = mysqli_fetch_assoc($rs)) {
                ?>
                    <tr>
                        <td><?php echo $rec['title'] ?></td>
                        <td><?php echo $rec['summery']?></td>
                        <td><?php echo $rec['created_at'] ?></td>
                        <td><?php echo $rec['published_at'] ?></td>
                        <td><?php echo $rec['status'] ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    <?php
    } else {
        echo "<div class='container' style='padding-top:30%;padding-right:10%'>
        <div class='alert alert-danger'><strong>NO POST FOUND LOL</strong></div></div>";
    }
}
    ?>

<br><br><br>
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
                       <p style="color:white;">this is our project</p>
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