<?php
$link = mysql_connect('localhost','root','password');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
    mysql_select_db("sm");
     $sql="INSERT INTO attendence (`id`, `date`, `time`, `value`) VALUES (NULL, CURRENT_DATE(), CURRENT_TIME(), '1')";
 mysql_query($sql);
 $day = date("Y-m-d");
 $query2=mysql_fetch_array(mysql_query("SELECT * FROM attendence WHERE adate='$day'"));
$today = $query2[1];
$yesterday=date('Y-m-d',strtotime("-1 days"));
$time=$query2[2];
$query=mysql_fetch_array(mysql_query("SELECT * FROM attendence WHERE adate='$yesterday'"));
$atime=$query[2];
$query1=mysql_query("SELECT * FROM attendence");

?>
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
<title>Attendence</title>
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
                                        
                                        <h2 class="page_title">Yesterday you were here by <?php echo $atime; ?></h2>
                                            <h2>Today you are late by <?php echo getTimeDiff($time,$atime);

function getTimeDiff($dtime,$atime)
    {

        $dep = explode(':',$dtime);
        $arr = explode(':',$atime);
        $diff = abs(mktime($dep[0],$dep[1],0)-mktime($arr[0],$arr[1],0));
        $hours = floor($diff/(60*60));
        $mins = floor(($diff-($hours*60*60))/(60));
        $secs = floor(($diff-(($hours*60*60)+($mins*60))));
        if(strlen($hours)<2){$hours="0".$hours;}
        if(strlen($mins)<2){$mins="0".$mins;}
        if(strlen($secs)<2){$secs="0".$secs;}
        return $hours.' Hour :'.$mins.' Minutes:'.$secs.' Seconds';
    } ?> minutes</h2>

                                        
                                        
                                        <ul class="responsive_table">
                                             <li class="table_row">
                                                <div class="table_section_small">Num</div>
                                                <div class="table_section">Date</div>
                                                <div class="table_section">Time</div> 
                                             </li>

                                        <?php 
                                                while ($row = mysql_fetch_array($query1)) {
                                            echo '<li class="table_row">';
                                                echo '<div class="table_section_small">'.$row[0].'</div>';
                                                 echo '<div class="table_section">'.$row[1].'</div>';
                                                 echo '<div class="table_section">'.$row[2].'</div>';
                                              echo '</li>';}
                                            ?>
                                        </ul>
                                        
                                        <div class="clearfix"></div>
                                        </div>
                                        <!--End of page container-->
    </div>                                          
                                          
    </div>
</div> 

</body>
</html>