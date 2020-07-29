<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<script>
function printContent(el){
	var a=document.body.innerHTML;
	var b=document.getElementById(el).innerHTML;
	document.body.innerHTML= b;
	window.print();
	document.body.innerHTML=a; 	
}
</script>

	<meta charset="utf-8">
	<title>White | responsive bootstrap3 html5 one page template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<link rel="shortcut icon" href="images/favicon.ico">
    
	<!-- CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/flexslider.css" rel="stylesheet" type="text/css" />
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" />
    
	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">	
    
	<!-- SCRIPTS -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->
	
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="js/jquery.nicescroll.min.js" type="text/javascript"></script>
	<script src="js/superfish.min.js" type="text/javascript"></script>
	<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="js/owl.carousel.js" type="text/javascript"></script>
	<script src="js/animate.js" type="text/javascript"></script>
	<script src="js/jquery.BlackAndWhite.js"></script>
	<script src="js/myscript.js" type="text/javascript"></script>
	<script>
		
		//PrettyPhoto
		jQuery(document).ready(function() {
			$("a[rel^='prettyPhoto']").prettyPhoto();
		});
		
		//BlackAndWhite
		$(window).load(function(){
			$('.client_img').BlackAndWhite({
				hoverEffect : true, // default true
				// set the path to BnWWorker.js for a superfast implementation
				webworkerPath : false,
				// for the images with a fluid width and height 
				responsive:true,
				// to invert the hover effect
				invertHoverEffect: false,
				// this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
				intensity:1,
				speed: { //this property could also be just speed: value for both fadeIn and fadeOut
					fadeIn: 300, // 200ms for fadeIn animations
					fadeOut: 300 // 800ms for fadeOut animations
				},
				onImageReady:function(img) {
					// this callback gets executed anytime an image is converted
				}
			});
		});
		
	</script>
</head>


	
<?php 
include_once "holasolo.php"; 
?> 
<body>
<!-- PRELOADER -->
<img src="preloader.gif" alt="" width="24" height="33" id="preloader" />
<!-- //PRELOADER -->
<div class="preloader_hide">


<header>
			
			<!-- MENU BLOCK -->
			<div class="menu_block">
			
				<!-- CONTAINER -->
				<div class="container clearfix">
					
					<!-- LOGO -->
					<div class="logo pull-left">
						<img src="header.jpg" width="150" height="150" alt="" title="">					</div><!-- //LOGO -->
					
					<!-- SEARCH FORM -->
					<div id="search-form" class="pull-right">
						
					</div><!-- SEARCH FORM -->
					
					<!-- MENU -->
					<div class="pull-right">
						<nav class="navmenu center">
							<ul>
								<li class="first active scroll_btn"><a href="http://localhost:8080/datos/confirmar.php" >INICIO</a></li>
								<li class="scroll_btn"><a href="#about" >ANOSOTROS</a></li>
								<li class="scroll_btn"><a href="#projects" >SERVICIO</a></li>
								<li class="scroll_btn"><a href="#team" >CONTACTO</a></li>
								
								<li class="sub-menu">
									<a href="javascript:void(0);" >Pagina</a>
									<ul>
										<li><a href="blog.html" >Blog</a></li>
										<li><a href="blog-post.html" >Blog Post</a></li>
										<li><a href="portfolio-post.html" >Portfolio Single Work</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div><!-- //MENU -->
				</div><!-- //MENU BLOCK -->
			</div><!-- //CONTAINER -->
		</header>
<div id="div1">


<center>
<br/>
<label>REGISTRO</label>
<br/>
<br/>


<table border="1" align="center">
<tr>
	
	<td align='center'>CORREO</td>
	<td align='center'>NOMBRE DEL ESTABLECIMIENTO</td>
	<td align='center'>GIRO</td>

	
	
	
	
	
	
	</tr>
	

<?php
include_once "holasolo.php"; 
$sql1=mysql_query("select * from tipoproducto");
while($res=mysql_fetch_array($sql1))
{
	?>
	<tr>





<td><?php echo $res['idtip']?></td>
<td><?php echo $res['descrip']?></td>

	</tr>
	



<?php
}
?>

</table>
</center>
</div>
<button onclick="printContent('div1')">printcontent</button>


</body>
</html>