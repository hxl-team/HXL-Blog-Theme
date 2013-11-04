<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php wp_title( '|', true, 'right' ); ?></title>
				
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
				
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- theme options from options panel -->
		<?php get_wpbs_theme_options(); ?>

		<!-- typeahead plugin - if top nav search bar enabled -->
		<?php require_once('library/typeahead.php'); ?>
		<link rel="stylesheet" id="bootstrap-responsive-css" href="http://hxl.humanitarianresponse.info/ns/css/hxl.css" type="text/css" media="all">
		<link rel="shortcut icon" href="http://hxl.humanitarianresponse.info/docs/img/favicon.ico">		
	</head>
	
	<body style="padding-top: 0px">
				
		<header role="banner">
		
			<div id="inner-header" class="clearfix">
					<div class="container">			
						<div class="navbar">
					        <div class="container">
					          <div class="nav-hxlator">
					            <span class="brand" style="padding-top: 0"><img src="http://hxl.humanitarianresponse.info/ns/img/logo.png"></span>        
					            <ul class="nav" id="topnav">

								<li><a href="http://hxl.humanitarianresponse.info/docs/">HXL Documentation</a></li>
								<li><a href="http://hxl.humanitarianresponse.info/ns/">HXL Vocabulary</a></li>
					<li style="border-bottom: 1px solid rgb(185, 18, 34)"><a href="http://hxl.humanitarianresponse.info/blog/">HXL Blog</a></li>           
					            </ul>
					          </div>
					      </div>
					    </div> <!-- end .nav-container -->
					</div>
			</div> <!-- end #inner-header -->
		
		</header> <!-- end header -->
		
		<div class="container-fluid">
