<?php require("config.php");
//session_destroy();
require("check_session.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <title>post</title>
</head>
<body>
<?php
    $post_id=$_GET['post_id'];
    $src = "SELECT * FROM post WHERE post_id=$post_id";
    $rs = mysqli_query($con, $src) or die(mysqli_error($con));
    $rec = mysqli_fetch_assoc($rs);?>
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary shadow">
        <a class="navbar-brand font-weight-bold text-warning font-weight-bold" href="#">TOTRON</a>
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
                    <a class="nav-link" href="vlog_view.php" tabindex="-1">post</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="logout.php" tabindex="-1">LogOut</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#" tabindex="-1">edit Profile</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="container-fluid" style="float:left;">
       <h4 class="text-secondery"><b class="text-info "style="font-size:30px;">TOTRON</b> <b class="text-secondary">your sports blog</b></h4>
            <div class="card-body " style="padding-bottom: 5%;">
              <div class="card col mr-2 shadow" style="border-radius: 2%;">
        <form name="frm1" method="post"  enctype="multipart/form-data" > 
        <h5><b class="text-success" style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">POST</b></h5>
        <div class="form-group" >
            <label for="title"><B class="text-info" style="font-size: medium;">Title</B></label>
            <input type="text" class="form-control border-primary" name="title" id="title" value="<?php echo $rec['title'] ?>"  autofocus required>
        </div>
        <div class="form-group">
            <label for="summery"><B class="text-info" style="font-size: medium;">summery</B></label>
            <input type="text" class="form-control border-primary" name="summery" id="summery" value="<?php echo $rec['summery'] ?>">
        </div>
        <div class="form-group">
            <label for="content"><B class="text-info" style="font-size: medium;">content</B></label>
            <input type="text" class="form-control border-primary" name="content" id="content" value="<?php echo $rec['content'] ?>">
        </div>
        <div class="form-group" >
            <label for="content"><B class="text-info" style="font-size: medium;">Insert Picture</B></label>
            <input type="file" class="form-control border-primary" style="padding-left: 1%;padding-bottom:3%;" name="img_path" id="img_path" value="<?php echo $rec['fname'] ?>">
        </div>
        <input type="submit" class="btn btn-outline-primary text-info"   name="ok" value="post ">
        <div class="form-group">
        </div>
       
    </form>
            </div>
        </div>
    </div><?php
    if(isset($_POST['ok'])){
    $ftype_arr = array("png", "PNG", "JPG", "jpg", "jpeg", 'JPEG');
    $title=$_POST['title'];
    $summery=$_POST['summery'];
    $content=$_POST['content'];
    $fname = $_FILES['img_path']['name'];
    $img_path = "uploaded_files/" . rand(0000000, 9999999) . "_" . $fname;
    $created_at=date("Y/m/d");
    $uftype = explode(".", $fname);
    $fext = end($uftype);
    if($_FILES['img_path']){
        if (in_array($fext, $ftype_arr)) {
            if (move_uploaded_file($_FILES['img_path']['tmp_name'], $img_path)){
        
                    $upd = "UPDATE post SET title='$title', summery='$summery', img_path='$img_path', created_at='$created_at',status='Pending',content='$content' WHERE post_id=$post_id";
                    $res= mysqli_query($con, $upd) or die(mysqli_error($con));
                    if ($res == 1) {
                        header('location:vlog_view.php?msg=UPDATE DONE!!! <br>post will be verifying by moderator');
        
                    } else {
                        echo "<div class='container' style='padding-top:30%;padding-right:10%'>
                        <div class='alert alert-danger'><strong>UPDATE NOT DONE!!! <br>post will NOT BE verifying by moderator</strong></div></div>";
                    }
                }
            }
    else{
        $upd = "UPDATE post SET title='$title', summery='$summery', created_at='$created_at',status='Pending',content='$content' WHERE post_id=$post_id";
        $res= mysqli_query($con, $upd) or die(mysqli_error($con));
        if ($res == 1) {
            header('location:vlog_view.php?msg=UPDATE DONE!!! <br>post will be verifying by moderator');

        } else {
            echo "<div class='container' style='padding-top:30%;padding-right:10%'>
            <div class='alert alert-danger'><strong>UPDATE NOT DONE!!! <br>post will NOT BE verifying by moderator</strong></div></div>";
        }

    }
    }}
        ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

</body>
</html>