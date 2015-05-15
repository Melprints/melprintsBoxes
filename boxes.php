<?php include "../header.php"; ?>
<script type="text/javascript">
$(document).ready(function() {
    $('.viewport').mouseenter(function(e) {
        $(this).children('.viewport').children('img').animate({ height: '259', left: '0', top: '0', width: '250'}, 100);
        $(this).children('a').children('span').fadeIn(200);
    }).mouseleave(function(e) {
        $(this).children('a').children('img').animate({ height: '259', left: '-20', top: '-20', width: '250'}, 100);
        $(this).children('a').children('span').fadeOut(200);
    });
});
</script>
<style type="text/css">
BODY {
	margin:0;
	padding:0;
	width:100%;
	height:100%;
	color:#121212;	
}
.left {
	float:left;
}
.clear {
	clear:both;	
}
.boxHeader {
	text-align:center;
	color:#343434;
	font-size:2.5em;
	border-bottom:1px solid #ccc; 
	margin:30px;
	padding-bottom:20px;
}
.boxTypeImages {
    display:inline-block;
	float:left;
	box-sizing:border-box;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	-o-box-sizing:border-box;
	border:10px solid #fff;
	width:275px;
	height:275px;
	margin-bottom: 20px;
}
.boxTypeImages img {
	opacity:1.0;	
}
.boxTypeImages img:hover {
	opacity:0.4;	
}

.viewport {
	border: 3px solid #eee;
	float: left;
    height: 249px;
	margin: 0 9px 9px 0;
	overflow: hidden;
	position: relative;
	width: 250px;	
}
.viewport a {
    display: block;
    position: relative;
}
.viewport a img {
	height: 252px;
	 left: -10px;
    position: relative;
	top: -10px;
	width: 275px;	
}
.viewport a span {
    display: none;
    font-size: 3.0em;
    font-weight: bold;
    height: 100%;
    padding-top: 120px;
    position: absolute;
    text-align: center;
    text-decoration: none;
    width: 100%;
    z-index: 100;
}
.viewport a span em {
    display: block;
    font-size: 0.45em;
    font-weight: normal;
}

.dark-background {
    background-color: rgba(15, 15, 15, 0.6);
    color: #fff;
    text-shadow: #000 0px 0px 20px;
}
.dark-background em {
    color: #ccc;
}
</style>
<div class="boxHeader">Melprints Box Options</div>
    <div class="boxTypeSection">
        <div class="boxTypeImages" style="align:left; text-align:center;">
            	<div class="viewport">
         			<a href="http://www.melprints.com">
            		<span class="dark-background">Description Text<em>Roll Tuck Box</em></span>
               		 <img src="images/rollTuckBox.jpg"/>
            		</a>
        	 </div>
       	</div>
            
        <div class="boxTypeImages" style="align:left; text-align:center;">
            <div class="viewport">
         		<a href="http://www.melprints.com">
            		<span class="dark-background">Description Text<em>Roll Tuck Box</em></span>
                	<img src="images/rollTuckBox2.jpg" width="250" height="250"/>
            	</a>
         	</div>
         </div>
            
        <div class="boxTypeImages" style="align:left; text-align:center;">
            <div class="viewport">
         		<a href="http://www.melprints.com">
            		<span class="dark-background">Description Text<em>Roll Tuck Box</em></span>
                	<img src="images/rollTuckBox3.jpg" width="250" height="250"/>
            	</a>
            </div>
        </div>
            
        <div class="boxTypeImages" style="align:left; text-align:center;">
        	<div class="viewport">
         		<a href="http://www.melprints.com">
            		<span class="dark-background">Description Text<em>Roll Tuck Box</em></span>
                	<img src="images/pizzaBox.jpg" width="250" height="250"/>
            	</a>
             </div>
        </div>
            
        <div class="boxTypeImages" style="align:left; text-align:center;">
            <div class="viewport">
         		<a href="http://www.melprints.com">
            		<span class="dark-background">Description Text<em>Roll Tuck Box</em></span>
                	<img src="images/rollTuckBoxFlap.jpg" width="250" height="250"/>
            	</a>
            </div>
         </div>
            
        <div class="boxTypeImages" style="align:left; text-align:center;">
            <div class="viewport">
         		<a href="http://www.melprints.com">
            		<span class="dark-background">Description Text<em>Roll Tuck Box</em></span>
                	<img src="images/rettLocksBox.jpg" width="250" height="250"/>
            	</a>
           </div>
        </div>
        <div class="clear"></div>
         
        
        </div><!-- end boxTypeSection -->
        <div class="clear"></div>
<?php include "../footer.php"; ?>