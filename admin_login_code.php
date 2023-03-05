<?php require("config.php");
$a_email=$_POST['a_email'];
$a_pass=$_POST['a_pass'];
//echo $email , $pass;
//$a_name=$_POST['a_name'];
$src="SELECT * FROM admin WHERE a_email='$a_email' AND a_pass='$a_pass'";
$rs=mysqli_query($con,$src)or die(mysqli_error($con));
if(mysqli_num_rows($rs)>0){
    $rec=mysqli_fetch_assoc($rs);
    $_SESSION['u_info']=$rec;
    header('location:admin_post_dataset.php');
}else{
    echo "<div class='container'>
            <div class='alert alert-danger'><strong>SOMETHING WENT WRONG</strong></div></div>";
    header('location:admin_login.php?msg=Invalid email or password');
    
}
?>