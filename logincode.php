<?php require("config.php");
$email=$_POST['email'];
$password=$_POST['password'];
//echo $email , $pass;
$src="SELECT * FROM vlogger WHERE email='$email' AND password='$password'";
$rs=mysqli_query($con,$src)or die(mysqli_error($con));
if(mysqli_num_rows($rs)>0){
    $rec=mysqli_fetch_assoc($rs);
    $_SESSION['u_info']=$rec;
    header('location:post.php');
}else{
    echo "<div class='container'>
            <div class='alert alert-danger'><strong>SOMETHING WENT WRONG</strong></div></div>";
    header('location:login.php?msg=Invalid email or password');
    
}
?>