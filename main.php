<?php require('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Your Website Title" />
    <meta property="og:description"   content="Your description" />
    <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
     <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu" />
     <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu+Condensed" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
    <title>blog</title>
    <style>
        .thumb {
            width:100%;
            border-radius:8px;
            aspect-ratio:4/3;

}
.thumbx {
            padding-buttom:30%;
            width:40px;
            aspect-ratio:1/1.5;
            

}



 
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary shadow">
        <a class="navbar-brand font-weight-bold text-warning font-weight-bold"style="font-family: Ubuntu; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px;" href="#">ToTron</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar"
            aria-controls="mynavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
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
    <div id="myImageSlider" class="carousel" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myImageSlider" data-slide-to="0" ></li>
            <li data-target="#myImageSlider" data-slide-to="1"></li>
            <li data-target="#myImageSlider" data-slide-to="2"></li>
            <li data-target="#myImageSlider" data-slide-to="3" class="active"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item " style="height:auto;">
                <video class="img-fluid " autoplay loop muted  >
                    <source src="ICC Cricket World Cup 2019 TV Intro!.mp4" type="video/mp4" />
                </video>
            </div>
            <div class="carousel-item active " style="height: auto;" >
                <video class="img-fluid " autoplay loop muted>
                    <source src="Untitled 35_1080p.mp4"  type="video/mp4" />
                </video>
                </div>
            <div class="carousel-item " style="height:auto;" >
                <video class="img-fluid " autoplay loop muted>
                    <source src="Tennis promo video - Sony A7III + Sony 85 1.8 _ Webbil S - HLG3 profile.mp4"  type="video/mp4" /></video>
                </div>
            
        <a class="carousel-control-prev" href="#myImageSlider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only bg-secondary">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myImageSlider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>
    
    <div class="container-fluid mt-2 ">
        
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#home" style="font-family: Ubuntu; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px;">SPORTS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#CRICKET"style="font-family: Ubuntu; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px;" >ABOUT</a>
            </li>
        </ul>
        <div class="tab-content">
        <div id="home" class="container-fluid  tab-pane active">
            <div class="jumbotron">
        <h1 class="text-secondary font-weight-bold text-info " style="font-family: Ubuntu; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px;">All Recent posts</h1>
        

                      <?php
        $src ="SELECT v.first_name,v.profile,p.* FROM post p INNER JOIN vlogger v ON p.vlogger_id=v.vlogger_id WHERE p.status='Approved'";
        $rs = mysqli_query($con, $src) or die(mysqli_error($con));
        //echo mysqli_num_rows($rs); // Count the number of record in a record set/table
        if (mysqli_num_rows($rs) > 0) {
        ?><table>
                <tbody>
                    <tr>
                        <?php
                        $td=0;
                        while ($rec = mysqli_fetch_assoc($rs)) {
                            if($td==1)
                            {
                                ?></tr><tr><?php
                                $td=0;
                            }
                        ?>
                        <div class="container-fluid">
                
                <td>
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
<p class="card-text text-center text-secondary font-weight-bold text-info"  style="font-size:20px; font-family:Ubuntu Condensed; font-size: 24px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px;">"<?php echo $rec['summery']?></p><!--here we can use read more and create the link with details post but i have some database connection issue in details_post.php-->
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
                                

                                
                        <?php
                        $td++;
                        }
                        ?>
<br></td>
                    </tr>
                    
                </tbody>
            </table>
        <?php
        }
         else {
        ?><h5>Sorry images not found</h5><?php
                                        }
                                            ?>
                                            
            </div></div>
            <div id="CRICKET" class="container tab-pane fade">
      
                <strong class="text-secondary font-weight-bold text-secondary " style="font-size:40px; font-family: 'Times New Roman', Times, serif;">About</strong>
                <p class="card-title text-center text-secondary font-weight-bold text-secondary " style="font-size:20px; font-family: Ubuntu; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px;"><strong>"</strong>We’re on a mission to find and showcase inspirational sports stories for athletes, coaches, and fans. Some of the reasons we’re attracted to sports are the life lessons they teach. The knowledge that hard work can pay off. Knowing not to quit on your team or yourself. That true teamwork can make your dreams come true. Many of the stories we feature reinforce these lessons that sports can teach.
                
                We’re happy you made it to our website and want to give you a little background on how it came to be."</p>
                <div>      
                  <div class="container-fluid">
                    <div class="row">
                        <div class="card col mr-2 shadow">
                            <img src="WhatsApp Image 2021-08-29 at 16.43.21.jpeg" alt="Card-Image" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title text-center text-info">Tathagata Mallik</h4>
                                <p class="card-title text-center text-secondary font-weight-bold text-secondary " style="font-size:20px; font-family: Ubuntu; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px;">student of GNIT kolkata.Specialisation in COMPUTER SCIENCE ENGINEERING
                                  expert in HTML,CSS,PYTHON.
                                  Feel free to contact :<strong>email:malliktathagata@gmail.com</strong>
                                </p>
                            </div>
                            <div class="card-footer border-0">
      
                            </div>
                        </div>
                        <div class="card col mr-2 shadow">
                            <img src="WhatsApp Image 2021-08-29 at 16.31.02.jpeg" alt="Card-Image" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title text-center text-info">Rohan Chakraborty</h4>
                                <p class="card-title text-center text-secondary font-weight-bold text-secondary " style="font-size:20px; font-family: Ubuntu; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px;">student of GNIT kolkata.Specialisation in COMPUTER SCIENCE ENGINEERING
                                  expert in HTML,CSS,JAVA.
                                  feel free to contact <strong>Email:rohonchakraborty77@gmail.com</strong>
                                   </p>
                            </div>
                            <div class="card-footer border-0">

                            </div>
                        </div>
                    </div>
                </div>
  
            </div>
        </div>
    </div>
                                    </div>
    <footer class="jumbotron mb-0"style="background-color: #34282C;" ><br>
        <div class="container ">
           <div class="row">
              <div class="col-md-5">
                 <div class="row">
                    <div class="col-md-6 ">
                       <div class="logo-part">
                          <img src="company1.jpg" class="w-50 logo-footer">
                          <p style="color:#E5E4E2">TOTRON private limited</p>
                          <p style="color:rgb(245, 234, 234);">your thoughts our presentation</p>
                       </div>
                    </div>
                    <div class="col-md-6 px-4">
                       <h6 style="color:white;"> About Company</h6>
                       <p style="color:white;">Our new startup <br>if you want to full fill your dreams join us </p>
                       <a href="#" class="btn-footer" style="color:white;"> More Info </a><br>
                       <a href="#" class="btn-footer" style="color:white;"> Contact Us</a>
                    </div>
                 </div>
              </div>
              <div class="col-md-6">
                 <div class="row">
                    <div class="col-md-6 px-4">
                       <h6 style="color:white;"> Help us</h6>
                       <div class="row ">
                          <div class="col-md-6 px-4">
                             <ul>
                                <li style="color:white;"> <a href="#"style="color:white;"> Terms</a> </li>
                                <li style="color:white;"> <a href="#" style="color:white;"> Policy</a> </li>
                             </ul>
                          </div>
                       </div>
                    </div>
                    <div class="col-md-3">
                       <h6 style="color:white;">Social</h6>
                       <div class="social">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="http://www.instagram.com/kasoul_tatha"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                       </div>
                       <p style="color:white;">this is our  project</p>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        </footer>

    <script src="readmore.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script>
        function userLike(id){
            $.ajax({
                type: 'POST',
                url: "like.php",
                data: {
                    post_id: id
                },
                success: function(result) {
                    alert(result)
                    location.reload()
                }
            });
        }
    </script>
</body>
</html>