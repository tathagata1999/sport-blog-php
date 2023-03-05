<?php require("config.php"); ?>

    <?php
        $post_id = $_GET['post_id'];
        $del = "DELETE FROM post WHERE post_id=$post_id";
        $res = mysqli_query($con, $del) or die(mysqli_error($con));
        if ($res == 1) {
            //echo "Update is successfully completed";
            header('location:vlog_view.php?msg=DATA DELETED successfully');
        } else {
            header('location:vlog_view.php?msg=DATA  not DELETED successfully');
        }
    
    ?>