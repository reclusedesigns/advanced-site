<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Advanced Property Construction&#8482;</title>
	<meta name="author" content="Recluse">
	
	<!-- muay styles -->
	<link rel="stylesheet" href="design/vendor/bootstrap/css/bootstrap.css" type="text/css" media="screen" charset="utf-8">
	<link rel="stylesheet" href="design/css/layout.css" type="text/css" media="screen" charset="utf-8">
	<link rel="stylesheet" href="design/vendor/nivo-carousel/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="design/vendor/bootstrap-gallery/css/bootstrap-image-gallery.css">
	
	<!-- the javascriptage -->
	<script src="design/vendor/jquery.js" type="text/javascript" charset="utf-8"></script>
	<script src="design/vendor/bootstrap/js/bootstrap.js" type="text/javascript" charset="utf-8"></script>
	<script src="design/vendor/scrollto.js" type="text/javascript" charset="utf-8"></script>
	<script src="design/vendor/nivo-carousel/jquery.nivo.slider.pack.js" type="text/javascript"></script>
	<script src="http://blueimp.github.com/JavaScript-Load-Image/load-image.min.js"></script>
	<script src="design/vendor/bootstrap-gallery/js/bootstrap-image-gallery.min.js"></script>
	<script src="design/scripts/toys.js" type="text/javascript" charset="utf-8"></script>

	<!-- typekit! -->
	<script type="text/javascript" src="//use.typekit.net/iix6nci.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>	
	
</head>

<body>

	<div class="body_push"></div>
	
	<div class="navbar navbar-fixed-top">
		<?php $full_name = $_SERVER['PHP_SELF']; $name_array = explode('/',$full_name); $count = count($name_array); $page_name = $name_array[$count-1];?>
    <div class="navbar-inner">
      <div class="container">
        <a class="brand" href="index">Advanced Property Construction</a>
				<ul class="nav pull-right">
					<li><img src="design/images/header/builder_badges.png"></li>
					<li><a href="#" class="first">&nbsp;</a></li>
					<li class="<?php echo ($page_name=='process.php')?'active':'';?>"><a href="process" class="process">Process</a></li>
					<li <?php echo ($page_name=='gallery.php')?'active':'';?>><a href="gallery" class="projects">Projects</a></li>
					<li><a href="#" class="contact js_contact_click">Contact</a></li>
					<li><a href="#" class="last">&nbsp;</a></li>
				</ul>
      </div>
    </div><!-- /navbar-inner -->
  </div> <!-- header -->
	<div class="contact_drop js_contact_toggle">	
		<div class="container">
			<div class="row">
				<div class="span4">
					<h4><span>Talk to a real person by calling </span> (03) 9379 9935</h4>
					<p>Or send us an email by filling out the form over here</p>
				</div>
				<div class="offset1 span4">
				<form class="form-horizontal" action="mailer.php" method="POST">
					<fieldset>
						<div class="control-group">
							<label class="control-label" for="name">Your Name</label>
							<div class="controls">
								<input type="text" class="input-xlarge" name="name" id="name">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="contact_details">Email Address</label>
							<div class="controls">
								<input type="text" class="input-xlarge" id="contact_details" name="email">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="textarea">Your message</label>
							<div class="controls">
								<textarea class="input-xlarge" id="textarea" rows="3" name="comment"></textarea>
							</div>
						</div>
						<div class="form-actions">
							<input type="submit" class="btn btn-primary" name="submit" value="Send"></button>
						</div>
					</fieldset>
				</form>
				</div>
			</div>
		</div>
	</div> <!-- contact_drop -->