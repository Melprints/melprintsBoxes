<?php include "../header.php"; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Boxes</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css' />

<style type="text/css">
body {
	font-family: 'Open Sans','Arial Narrow', serif;
	background: #ccc url(../images/bg.jpg) repeat top left;
	color: #333;
}
.container{
	width: 100%;
	position: relative;
}
.clear {
	clear:both;	
}
.photos {
	float:left;
	position:relative;
	border: 8px solid #fff;
	box-shadow: 1px 1px 2px rgba(0,0,0,0.05);
	perspective:500px;
}
.photos img:hover {
	transform: translate3d(10px,0,0) rotate3d(0,1,0,-1deg);
	
	
}
</style>
</head>
<body>
	
	<div class="container">
    	<div class="header">
        	<h1><span>Melprints</span> Box Options</h1>
    	</div>
        
      <div class="photos">
        		<div class="photosBack"></div>
                <img src="images/box1.jpg" />
                
            </div><!-- end photos -->
            
         <div class="photos">
                <div class="photosBack"></div>
                <img src="images/box2.jpg" />
            </div><!-- end photos -->
            
            <div class="photos">
                <div class="photosBack"></div>
                <img src="images/box3.jpg" />
            </div><!-- end photos -->
            
            <div class="photos">
                <div class="photosBack"></div>
                <img src="images/box4.jpg" />
            </div><!-- end photos -->
            
<div class="clear"></div>
    	
   </div><!-- end container -->
</body>
</html>
<?php include "../footer.php"; ?>