<!doctype html>
<html>
<head>
<meta charset="utf-8">

<script type="text/javascript" src="galeria/highslide/highslide-with-gallery.js"></script>

<script type="text/javascript" language="javascript" src="banner/js/jquery-1.6.3.min.js"></script>
<script type="text/javascript" language="javascript" src="banner/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" language="javascript" src="banner/js/jquery.animate-colors-min.js"></script>
<script type="text/javascript" language="javascript" src="banner/js/jquery.skitter.min.js"></script>




<link rel="stylesheet" type="text/css" href="galeria/highslide/highslide.css">
<link type="text/css" rel="stylesheet" href="css/style.css">

<link href="banner/css/skitter.styles.css" type="text/css" media="all" rel="stylesheet" />

<link rel="icon" href="estru/favicon.png" sizes="32x32">
<link rel="icon" href="estru/favicon.ico" sizes="32x32">

<title><?php echo $title; ?></title>

<script type="text/javascript" language="javascript">
		$(document).ready(function() {
			$('.box_skitter_large').skitter({
				interval: 3000,
				animation: 'fade',
				theme: 'clean',
				numbers_align: 'center',
				progressbar: false, 
				dots: true, 
				label: false,
				preview: false
			});
		});
	</script>


<script type="text/javascript">
hs.graphicsDir = 'galeria/highslide/graphics/';
hs.align = 'center';
hs.transitions = ['expand', 'crossfade'];
hs.outlineType = 'rounded-white';
hs.fadeInOut = true;
//hs.dimmingOpacity = 0.75;

// Add the controlbar
hs.addSlideshow({
	//slideshowGroup: 'group1',
	interval: 5000,
	repeat: false,
	useControls: true,
	fixedControls: 'fit',
	overlayOptions: {
		opacity: 0.75,
		position: 'bottom center',
		hideOnMouseOut: true
	}
});
</script>

<!--[if lt IE 9]>
   <script>
      document.createElement('header');
      document.createElement('nav');
      document.createElement('section');
      document.createElement('article');
      document.createElement('aside');
      document.createElement('footer');
   </script>
<![endif]-->

<!--[if lt IE 9]>
 <style type="text/css">
 
 header, nav, section, article, aside, footer {
   display:block;
}
 
 
 </style
<![endif]-->


</head>