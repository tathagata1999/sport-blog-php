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
    <title>blog</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary shadow">
        <a class="navbar-brand font-weight-bold text-warning font-weight-bold"style="font-family: Ubuntu; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px;" href="#">ToTron</a>
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
                <li class="nav-item">
                    <a class="nav-link" href="login.php" tabindex="-1">Login</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2 " type="search" name="ok" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" name="ok" type="submit"><a href="search.php">Search</a></button>
            </form>
        </div>
    </nav>
    <?php
    $src = "SELECT v.first_name,p.* FROM post p INNER JOIN vlogger v ON p.vlogger_id=v.vlogger_id WHERE p.summery=summery";
    $rs = mysqli_query($con, $src) or die(mysqli_error($con));
    //echo mysqli_num_rows($rs); // Count the number of record in a record set/table
    if (mysqli_num_rows($rs) > 0) {
    ?>
    <table class="table table-dark table-striped">
  


        <!..table cellpadding="7" cellspacing="0" border="1"..>
            <thead>
                <tr><th>NAME</th>
                    <th>TItle</th>
                    <th>summery</th>
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
                        <td><?php echo $rec['first_name']?></td>
                        <td><?php echo $rec['title'] ?></td>
                        <td><?php echo $rec['summery'] ?></td>
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
        <div class='alert alert-danger'><strong>NO PENDING POST FOUND </strong></div></div>";
    }
    ?>
    <br>
    <?php
    if (isset($_GET['msg'])) {
        echo "<div class='container' style='padding-right:10%'>
        <div class='alert alert-danger'><strong>".$_GET['msg']."</strong></div></div>";
    }
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    
</body>
</html>