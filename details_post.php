<?php require('config.php'); 
?>
<?php
    $post_id = $_GET['pid'];
    
    $src = "SELECT * FROM post  WHERE post_id=$post_id";

    $rs = mysqli_query($con, $src) or die(mysqli_error($con));
    //echo mysqli_num_rows($rs); // Count the number of record in a record set/table
    if (mysqli_num_rows($rs) > 0) {
    ?>
    <table class="table table-dark table-striped" >
           
            <tbody>
                <?php
                while ($rec = mysqli_fetch_assoc($rs)) {
                ?>
                    <tr>
                    <h5 class="card-title text-center text-secondary font-weight-bold text-secondary " style="font-size:20px; font-family: Ubuntu; font-size: 24px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px; "><a href="vlogger_details.php?id=<?php echo $rec['vlogger_id']?>">"<?php echo $rec['first_name']?>'</a>s post"</h5>
             <img  class="thumbx rounded-circle"src="<?php echo $rec['profile'] ?>"  alt="1">
             <h4 class="card-title text-center text-secondary font-weight-bold text-warning " style="font-size:20px; font-family: Ubuntu; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px;"><a href="details_post.php?pid=<?php  echo $rec['post_id'] ?>"><?php echo $rec['title'] ?></a></h4>
             <div class="card mb-4 shadow" style="max-width:100%;border-radious:16px;">
            <div class="row g-0">
            <div class="col-md-4">
             <img  class="thumb"src="<?php echo $rec['img_path'] ?>" class="img-fluid rounded-start" alt="img">
             </div>
             <div class="col-md-8">
            <div class="card-body">
             <h5 class="card-title text-center text-secondary font-weight-bold text-secondary " style="font-size:20px; font-family: Ubuntu; font-size: 24px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px; "><a href="vlogger_details.php?id=<?php echo $rec['vlogger_id']?>">"<?php echo $rec['first_name']?>'</a>s post"</h5>
             <img  class="thumbx rounded-circle"src="<?php echo $rec['profile'] ?>"  alt="1">
             <h4 class="card-title text-center text-secondary font-weight-bold text-warning " style="font-size:20px; font-family: Ubuntu; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px;"><a href="details_post.php?pid=<?php  echo $rec['post_id'] ?>"><?php echo $rec['title'] ?></a></h4>
<p class="card-text text-center text-secondary font-weight-bold text-info"  style="font-size:20px; font-family:Ubuntu Condensed; font-size: 24px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px;">"<?php echo $rec['summery']?></p>
<p class="card-title text-justify text-secondary font-weight-bold text-secondary " style="font-size:20px; font-family: Ubuntu; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px;"><?php echo $rec['content'] ?></p>
<a href="javascript:void(0)" onclick="userLike(<?php echo $rec['post_id'] ?>)">Like <?php echo $rec['p_like']?></a>
<i onclick="myFunction(this)" id="clicks" class="fa fa-thumbs-up"></i>
<p class="card-text"  style="font-size:19px; font-family: 'Times New Roman', Times, serif;padding-left:80%;"><small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;posted: "<?php echo $rec['published_at']?>"</small></p>
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your share button code -->
<div class="fb-share-button" 
data-href="https://www.facebook.com/your-page.html" 
data-layout="button_count">
</div>
</div>
</div>
</div>
</div>
}
}                
<a href="main.php">Home</a>