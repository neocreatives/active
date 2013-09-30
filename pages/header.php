<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
<head>
	<title><?php echo APP_NAME; ?> - ICU Data Visualiser (<?php echo APP_VERSION; ?>)</title>
	
	<!-- Meta -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	
	<!-- Bootstrap -->
	<link href="<?php echo getURL(); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	
	<!-- Bootstrap Extended -->
	<link href="<?php echo getURL(); ?>bootstrap/extend/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo getURL(); ?>bootstrap/extend/jasny-bootstrap/css/jasny-bootstrap-responsive.min.css" rel="stylesheet">
	<link href="<?php echo getURL(); ?>bootstrap/extend/bootstrap-wysihtml5/css/bootstrap-wysihtml5-0.0.2.css" rel="stylesheet">

	<!-- Select2 -->
	<link rel="stylesheet" href="<?php echo getURL(); ?>theme/scripts/select2/select2.css"/>
	
<?php if ($page == 'index'): ?>
	<!-- Notyfy -->
	<link rel="stylesheet" href="<?php echo getURL(); ?>theme/scripts/notyfy/jquery.notyfy.css"/>
	<link rel="stylesheet" href="<?php echo getURL(); ?>theme/scripts/notyfy/themes/default.css"/>
	
<?php endif; ?>
	<!-- JQueryUI v1.9.2 -->
	<link rel="stylesheet" href="<?php echo getURL(); ?>theme/scripts/jquery-ui-1.9.2.custom/css/smoothness/jquery-ui-1.9.2.custom.min.css" />
	
	<!-- Glyphicons -->
	<link rel="stylesheet" href="<?php echo getURL(); ?>theme/css/glyphicons.css" />
	
	<!-- Bootstrap Extended -->
	<link rel="stylesheet" href="<?php echo getURL(); ?>bootstrap/extend/bootstrap-select/bootstrap-select.css" />
	<link rel="stylesheet" href="<?php echo getURL(); ?>bootstrap/extend/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
	
	<!-- Uniform -->
	<link rel="stylesheet" media="screen" href="<?php echo getURL(); ?>theme/scripts/pixelmatrix-uniform/css/uniform.default.css" />

<?php if ($page == 'tables_enhanced'): ?>
	<!-- DataTables -->
	<link rel="stylesheet" media="screen" href="<?php echo getURL(); ?>theme/scripts/DataTables/media/css/DT_bootstrap.css" />

<?php endif; ?>
<?php if ($page == 'form_elements'): ?>
	<!-- ColorPicker -->
	<link rel="stylesheet" media="screen" href="<?php echo getURL(); ?>theme/scripts/farbtastic/farbtastic.css" />

<?php endif; ?>
	<!-- JQuery v1.8.2 -->
	<script src="<?php echo getURL(); ?>theme/scripts/jquery-1.8.2.min.js"></script>
	
	<!-- Modernizr -->
	<script src="<?php echo getURL(); ?>theme/scripts/modernizr.custom.76094.js"></script>
	
	<!-- MiniColors -->
	<link rel="stylesheet" media="screen" href="<?php echo getURL(); ?>theme/scripts/jquery-miniColors/jquery.miniColors.css" />
	
<?php if ($page == 'calendar'): ?>
	<!-- Calendar -->
	<link rel="stylesheet" media="screen" href="<?php echo getURL(); ?>theme/scripts/fullcalendar/fullcalendar/fullcalendar.css" />

<?php endif; ?>
<?php if ($page == 'documentation'): ?>
	<!-- google-code-prettify -->
	<link href="<?php echo getURL(); ?>theme/scripts/google-code-prettify/prettify.css" type="text/css" rel="stylesheet" />
	
<?php endif; ?>
<?php if ($page == 'file_managers'): ?>
	<!-- plupload -->
	<style type="text/css">@import url(<?php echo getURL(); ?>theme/scripts/plupload/js/jquery.plupload.queue/css/jquery.plupload.queue.css);</style>
	
<?php endif; ?>
<?php if (DEV): ?>
	<!-- Theme -->
	<link rel="stylesheet/less" href="<?php echo getURL(); ?>theme/less/style.less?<?php echo time(0); ?>" />
	
<?php if (SKIN): ?>	
	<!-- Skin -->
	<link rel="stylesheet/less" href="<?php echo getURL(); ?>theme/skins/less/<?php echo SKIN; ?>.less?<?php echo time(0); ?>" />
<?php endif; ?>
<?php else: ?>
	<!-- Theme -->
	<link rel="stylesheet" href="<?php echo getURL(); ?>theme/css/style.min.css?<?php echo time(0); ?>" />
<?php if (SKIN): ?>	
	<!-- Skin -->
	<link rel="stylesheet" href="<?php echo getURL(); ?>theme/skins/css/<?php echo SKIN; ?>.min.css?<?php echo time(0); ?>" />
<?php endif; ?>	
<?php endif; ?>
<?php if (DEV): ?>
	<!-- FireBug Lite -->
	<!-- <script type="text/javascript" src="https://getfirebug.com/firebug-lite-debug.js"></script> -->
	
<?php endif; ?>
<?php if (GA): ?>
	<!-- Google Analytics -->
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-36057737-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
	
<?php endif; ?>
	<!-- LESS 2 CSS -->
	<script src="<?php echo getURL(); ?>theme/scripts/less-1.3.3.min.js"></script>
	
<?php if ($page == 'gallery' || $page == 'finances' || $page == 'index'): ?>	
	<!--[if IE]><script type="text/javascript" src="<?php echo getURL(); ?>theme/scripts/excanvas/excanvas.js"></script><![endif]-->
	<!--[if lt IE 8]><script type="text/javascript" src="<?php echo getURL(); ?>theme/scripts/json2.js"></script><![endif]-->
<?php endif; ?>
</head>
<body<?php if ($page == 'login'): ?> class="login"<?php endif; ?>>
	

	
	<!-- Start Content -->
	<div class="container-fluid fixed <?php echo MENU_POSITION; ?>">
		
		<?php if ((MENU_POSITION == 'left-menu' || MENU_POSITION == 'right-menu') && $page != 'login' && $page != 'documentation'): ?>
		<div id="wrapper">
		<div id="menu" class="hidden-phone">
			<div class="profile">
					<strong>Pro. Xavier</strong>
					<a class="glyphicons lock" href="<?php echo getURL(array('login')); ?>"><i></i>Logout</a>
			</div>
			<div class="wrapper" id="single_patient">
									<h5>A Single Patient<span></span></h5>
									<ul>
                                    <form><li>Intervention: <input type="text" value="intervention"><div class="clearfix"></div></li>
										<li>Age Group: <select class="pull-left"><option value="0">All</option><option value="1">Infants</option><option value="2">Teenagers</option><option value="3">Young Adults</option><option value="4">Adults</option><option value="5">Elderly</option></select><div class="clearfix"></div></li>
                                        <li>Sex: <select class="pull-left"><option value="0">All</option><option value="1">Females</option><option value="2">Males</option></select><div class="clearfix"></div></li>
										<li>Cause for concern: <input type="text" value="...auto complete"><div class="clearfix"></div></li>
                                        <li><input type="radio" name="graph" value="Fine" class="graphy"> Fine 
<input type="radio" name="graph" value="coarse" class="graphy"> Coarse</li>
										<li><button id="button-plot" type="submit" value="Plot to Graph">Plot to Graph</button></li>
                                     </form>   
									</ul>
		  </div>
          <hr />
			<div class="wrapper" id="group_patient">
									<h5>A Group of Patients<span></span></h5>
									<ul>
                                    <form>
                                    <li>Intervention: <input type="text" value="intervention"><div class="clearfix"></div></li>
										<li>Age Group: <select class="pull-left"><option value="0">All</option><option value="1">Infants</option><option value="2">Teenagers</option><option value="3">Young Adults</option><option value="4">Adults</option><option value="5">Elderly</option></select><div class="clearfix"></div></li>
                                        <li>Sex: <select class="pull-left"><option value="0">All</option><option value="1">Females</option><option value="2">Males</option></select><div class="clearfix"></div></li>
										<li>Cause for concern: <input type="text" value="...auto complete"><div class="clearfix"></div></li>
                                        <li><input type="radio" name="graph" value="Fine" class="graphy"> Fine 
<input type="radio" name="graph" value="coarse" class="graphy"> Coarse</li>
										<li><button id="button-plot" type="submit" value="Plot to Graph">Plot to Graph</button></li>
                                    </form>    
									</ul>
									
		  </div>
		</div>
		<?php endif; ?>
		
		<div id="content">
		
		<?php if (MENU_POSITION != 'top-menu' && $page != 'documentation' && $page != 'login'): ?>
		<!-- Menu Toggle on mobile -->
		<button type="button" class="btn btn-navbar main">
			Hide | Show Menu
		</button>
		<div class="separator bottom"></div>
		<?php endif; ?>