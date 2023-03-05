<?php
require("config.php");
$post_id=$_POST['post_id'];
$src=mysqli_query($con, "SELECT p_like FROM post WHERE post_id=$post_id") or die(mysqli_error($con));
$p_rec=mysqli_fetch_assoc($src);
$p_like=$p_rec['p_like']+1;
$upd=mysqli_query($con, "UPDATE post SET p_like=$p_like WHERE post_id=$post_id") or die(mysqli_error($con));
if($upd==1){
    echo "Thank you for like";
}else{
    echo $upd;  //'Please try again later';
}

?>