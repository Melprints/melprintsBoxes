<?php include "../header.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Boxes</title>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="author" content="Codrops" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style_common.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="js/modernizr.custom.69142.js"></script> 
    </head>

<body>
        <div class="container">
			<header>
				<h1><span>Melprints</span>Box Options</h1>
				<nav class="codrops-demos">
					<a href="index.html">Box 1</a>
					<a class="current-demo" href="index2.html">Box 2</a>
					<a href="index3.html">Box 3</a>
					<a href="index4.html">Box 4</a>
					<a href="index5.html">Box 5</a>
				</nav>
				
				<div class="support-note"><!-- let's check browser support with modernizr -->
					<!--span class="no-cssanimations">CSS animations are not supported in your browser</span-->
					<span class="no-csstransforms">CSS transforms are not supported in your browser</span>
					<span class="no-csstransforms3d">CSS 3D transforms are not supported in your browser</span>
					<span class="no-csstransitions">CSS transitions are not supported in your browser</span>
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>
				
			</header>

            <div id="grid" class="main">
				<div class="view">
					<div class="view-back">
						<span data-icon="A">e</span>
						<span data-icon="B">e</span>
						<a href="http://www.melprints.com/testing/boxInfo.php">&rarr;</a>
					</div>
					<img src="images/box1.jpg" />
				</div>
				<div class="view">
					<div class="view-back">
						<span data-icon="A">210</span>
						<span data-icon="B">102</span>
						<a href="http://www.melprints.com/testing/boxInfo.php">&rarr;</a>
					</div>
					<img src="images/box2.jpg" />
				</div>
				<div class="view">
					<div class="view-back">
						<span data-icon="A">690</span>
						<span data-icon="B">361</span>
						<a href="http://www.melprints.com/testing/boxInfo.php">&rarr;</a>
					</div>
					<img src="images/box3.jpg" />
				</div>
				<div class="view">
					<div class="view-back">
						<span data-icon="A">987</span>
						<span data-icon="B">130</span>
						<a href="http://www.melprints.com/testing/boxInfo.php">&rarr;</a>
					</div>
					<img src="images/box4.jpg" />
				</div>
			</div>
        </div>
		<script type="text/javascript">	
			
			Modernizr.load({
				test: Modernizr.csstransforms3d && Modernizr.csstransitions,
				yep : ['http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js','js/jquery.hoverfold.js'],
				nope: 'css/fallback.css',
				callback : function( url, result, key ) {
						
					if( url === 'js/jquery.hoverfold.js' ) {
						$( '#grid' ).hoverfold();
					}

				}
			});
				
		</script>
    </body>
</html>
<?php include "../footer.php"; ?>