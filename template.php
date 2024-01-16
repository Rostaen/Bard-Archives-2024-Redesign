<?php
class Template {
	var $title = 'Untitled';
	var $keywords = 'keywords';
	var $description = 'description';
	var $script = '';
	function setTitle($title) { $this->title = $title; }
	function setMetaKW($keywords){ $this->keywords = $keywords; }
	function setMetaDesc($description){ $this->description = $description; }
	function setScript($script){ $this->script = $script; }
	function open() { ?>
		<!DOCTYPE HTML>
		<html lang="en">
			<head>
				<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<meta name="description" content="<?php echo $this->description; ?>" />
				<meta name="author" content="Bard Archives" />
				<meta name="language" content="english" />
				<meta name="format-detection" content="telephone=yes" />
				<meta name="HandHeldFriendly" content="true" />

				<title><? echo $this->title; ?></title>
				
				<link rel="icon" type="image/x-icon" href="https://www.bard.edu/images/favicon.ico">
				<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow'>
				<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=PT+Sans:400,700'>
				<!-- Font Awesome CSS -->
				<script src="https://kit.fontawesome.com/97160afdb9.js" crossorigin="anonymous"></script>
				<!-- Custom CSS -->
				<link rel="stylesheet" type="text/css" href="main.css">
				<!-- Bootstrap CSS, JS -->
				<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
				<script src="bootstrap.bundle.min.js"></script>
				
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
			</head>
			
			<body>
				<header class="" style="background: none;">
					<nav class="navbar navbar-expand-lg navbar-dark bg-gray fixed-top navbar-custom ps-2 pe-2" aria-label="Main navigation">
						<a class="navbar-brand mr-auto" href="index.php">
							<img class="logo-style" src="https://www.bard.edu/library/images/logo-stevenson-3.png" alt="Bard Libraries - Home">
						</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#BILnav" aria-controls="BILnav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="BILnav">
							<ul class="navbar-nav mx-auto">
								<?php
									$bardUrl = "https://libguides.bard.edu/";
									function menuItem($url, $title){
										echo "<li class=\"nav-item me-2\"><a class=\"nav-link\" href=\"".$url."\">".$title."</a></li>";
									}
									menuItem($bardUrl."BardArchives", "Bard College Archives");
									menuItem($bardUrl."archives-special-collections", "Special Collections");
									menuItem($bardUrl."ArchivesDigitalCollections", "Digital Collections");
									menuItem($bardUrl."HannahArendtPersonalLibrary", "Hannah Arendt Personal Library");
									menuItem($bardUrl."archivescontact", "Visit/Contact");
									menuItem("https://www.instagram.com/bardarchives/", "<i class=\"fa-brands fa-instagram\"></i>")
								?>
							</ul>
							<ul class="navbar-nav">
								<li class="nav-item">
									<div class="logo">
										<a target="_blank" href="https://www.bard.edu/" title="Bard Home"><img src="https://www.bard.edu/library/images/logo-bard-sm1.png" alt="Bard Logo" class="img-fluid"></a>
									</div>
								</li>
							</ul>
						</div>
					</nav>
	<? }

	function close() { ?>
				<footer>
					<hr style="margin-bottom: 0px !important; margin-top: 30px;">
					<div style="background-color: #333; color: white;" class="page-bottom">
						<div class="container pt-4 pb-4 text-center">
							<p>
								©<? echo date("Y"); ?> Bard Archives - Bard College, Annandale-on-Hudson, NY 12504
							</p>
						</div>
					</div>
				</footer>
			</body>
		</html>
	<? }
} ?>