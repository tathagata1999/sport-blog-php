<?php require('config.php'); ?>
<?php
  $post_id=$_GET['post_id'];
  $published_at=date("y/m/d");
    $upd = "UPDATE post SET status='Approved',published_at='$published_at' WHERE post_id=$post_id";
    $res= mysqli_query($con, $upd) or die(mysqli_error($con));
    if ($res == 1) {
        //echo "Update is successfully completed";
        header('location:rejected_post_show.php?msg=approving is successfully completed');
    } else {
        header('location:rejected_post_show.php?msg=approving is  not successfully completed');
    }
    
?>