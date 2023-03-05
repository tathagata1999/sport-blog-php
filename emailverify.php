<?php require("config.php");
    $email=$_POST['email'];
    $src="SELECT email FROM vlogger WHERE email='$email'";
    $rs=mysqli_query($con,$src) or die (mysqli_error($con));

    if (mysqli_num_rows($rs)>0){
        echo "<div class='container' style='padding-top:10%;padding-right:10%'>
        <div class='alert alert-warning'><strong>YOU ARE ALREADY REGISTERED</strong></div></div>";
    }
    ?>