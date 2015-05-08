<?php include "../header.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>3D Thumbnail Hover Effects</title>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="3D Thumbnail Hover Effects" />
        <meta name="keywords" content="3d, 3dtransform, hover, effect, thumbnail, overlay, curved, folded" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style_common.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="js/modernizr.custom.69142.js"></script> 
    </head>
    <body>
        <div class="container">
			<!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="http://tympanus.net/Tutorials/SmoothTransitionsResponsiveLayout/">
                    <strong>&laquo; Previous Demo: </strong>Responsive Layout with Smooth Transitions
                </a>
                <span class="right">
					<a href="http://www.flickr.com/photos/ag2r/">Images by Ángelo González</a>
                    <a href="http://tympanus.net/codrops/2012/06/18/3d-thumbnail-hover-effects/">
                        <strong>Back to the Codrops Article</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
			
			<header>
			
				<h1><span>3D Thumbnail</span> Hover Effects</h1>
				<h2>Adding some perspective with CSS3 and jQuery &mdash; <strong>best viewed in WebKit browsers</strong></h2>
				
				<nav class="codrops-demos">
					<a href="index.html">Demo 1</a>
					<a class="current-demo" href="index2.html">Demo 2</a>
					<a href="index3.html">Demo 3</a>
					<a href="index4.html">Demo 4</a>
					<a href="index5.html">Demo 5</a>
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
						<span data-icon="A">566</span>
						<span data-icon="B">124</span>
						<a href="http://www.flickr.com/photos/ag2r/5033654303/in/photostream">&rarr;</a>
					</div>
					<img src="images/5.jpg" />
				</div>
				<div class="view">
					<div class="view-back">
						<span data-icon="A">210</span>
						<span data-icon="B">102</span>
						<a href="http://www.flickr.com/photos/ag2r/4846704157/in/photostream">&rarr;</a>
					</div>
					<img src="images/6.jpg" />
				</div>
				<div class="view">
					<div class="view-back">
						<span data-icon="A">690</span>
						<span data-icon="B">361</span>
						<a href="http://www.flickr.com/photos/ag2r/5439506585/in/photostream">&rarr;</a>
					</div>
					<img src="images/1.jpg" />
				</div>
				<div class="view">
					<div class="view-back">
						<span data-icon="A">987</span>
						<span data-icon="B">130</span>
						<a href="http://www.flickr.com/photos/ag2r/6271521984/in/photostream">&rarr;</a>
					</div>
					<img src="images/3.jpg" />
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