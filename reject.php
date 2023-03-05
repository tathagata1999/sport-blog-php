<?php require('config.php'); ?>
<?php
  $post_id=$_GET['post_id'];
    $upd = "UPDATE post SET status='Rejected' WHERE post_id=$post_id";
    $res= mysqli_query($con, $upd) or die(mysqli_error($con));
    if ($res == 1) {
        //echo "Update is successfully completed";
        header('location:approve_post_show.php?msg=post is rejecting ');
    } else {
        header('location:admin_post_dataset.php?msg=approving is  not successfully completed');
    }

?>
    
