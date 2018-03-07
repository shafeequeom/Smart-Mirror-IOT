
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
<link rel="apple-touch-startup-image" href="images/apple-touch-startup-image-320x460.png" />
<meta name="author" content="SindevoThemes" />
<meta name="description" content="GoMobile - A next generation web app theme" />
<meta name="keywords" content="mobile web app, mobile template, mobile design, mobile app design, mobile app theme, mobile wordpress theme, my mobile app" />
<title>Camera Gallery</title>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<link type="text/css" rel="stylesheet" href="colors/green/green.css"/>
<link type="text/css" rel="stylesheet" href="css/swipebox.css"/>
<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css' />
<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
<script src="js/jquery.validate.min.js" type="text/javascript"></script>
<script src="js/code.js"></script>
</head>
<body>
<div id="wrapper">

    <div id="content">
            <div id="header">
                  <div class="gohome radius20"><a href="index.html" id="homebutton"><img src="images/icons/home.png" alt="" title="" /></a></div>

            </div>
            
            
       <div class="sliderbg">
                                        <div class="pages_container">
                                        <h2 class="page_title">Photo Gallery</h2>
                        <a href="webcam.php" class="button_11 bluegreen bluegreen_borderbottom radius4">Take a Photo.</a>


                                            <ul class="photo_gallery_12">    
<?php

   $files = glob("webcam/*.*");

  for ($i=0; $i<count($files); $i++)

{

$image = $files[$i];

                              
echo '<li><a href="'.$image .'" class="swipebox"><img src="'.$image.'" alt="image"/></a></li>';


} 
?>                                          </ul>
                            
                               
                                         <div class="clearfix"></div> 
     				
                                        </div>
                                        <!--End of page container-->
         </div>
    </div>
</div> 
<script type="text/javascript" src="js/jquery.tabify.js"></script>
<script type="text/javascript" src="js/jquery.swipebox.js"></script>
<script type="text/javascript" src="js/jquery.fitvids.js"></script>
<script type="text/javascript" src="js/twitter/jquery.tweet.js" charset="utf-8"></script>
<script src="js/email.js"></script>
</body>
</html>