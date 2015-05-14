<?php include "../header.php"; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Boxes</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css' />
<style type="text/css">
BODY {
	font-family: 'Open Sans','Arial Narrow', serif;
	background-color: #ccc;
}
.clear {
	clear:both;	
}
.wrapper{
	position: relative;
	width: 960px;
	margin: 0 auto;
	position: relative;
	
}
.photoContainer {
	position:relative;
	width: 960px;
	height:600px;
	background-color:#f7f7f7;	
}
.photos {
	width:320px;
	height:220px;
	margin:10px;
	float: left;
	border:8px solid #fff;
	-webkit-perspective: 500px;
	-moz-perspective: 500px;
	-o-perspective: 500px;
	-ms-perspective: 500px;
	perspective: 500px;
	
}
.photos img:hover {
	transform:scaleX(.5,1);
	-webkit-translate:scale(.5,1);
	-moz-translate:scale(.5,1);
	-o-translate:scale(.5,1);	
}
.photosBack{
	width: 50%;
	height: 100%;
	position: absolute;
	right: 0;
	background: #666;
	z-index: 0;
}
</style>
</head>
<body>	
	<div class="wrapper">
    	<div class="photoContainer">
		<div class="photos">
        	<div class="photosBack"></div>
        	<img src="images/box1.jpg" />
      	</div><!-- end photos -->
        </div>
	</div>

</body>
</html>
<?php include "../footer.php"; ?>