<?php
    require_once("template.php");
	// require_once("rss/rsslib.php");
	// include_once('inc/checkDoW.php');

	$page = new Template();
	$page->setTitle('Archives | Bard College');
	$page->setMetaDesc('');

	// print page header
	$page->open();
?>
	<div id="ArchivesSlider" class="carousel slide" data-bs-ride="carousel">

		<!-- Indicators -->
		<div class="carousel-indicators">
    		<button type="button" data-bs-target="#ArchivesSlider" data-bs-slide-to="0" class="active"></button>
    		<button type="button" data-bs-target="#ArchivesSlider" data-bs-slide-to="1"></button><!-- 
    		<button type="button" data-bs-target="#ArchivesSlider" data-bs-slide-to="2"></button> -->
  		</div>

		<!-- The slideshow -->
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="images/archivesbanner.jpg" alt="Archives Collection 1" class="d-block w-100">
			</div>
			<div class="carousel-item">
				<img src="images/archivesbanner2.jpg" alt="Archives Collection 2" class="d-block w-100">
			</div>
			<!-- <div class="carousel-item">
				<img src="images/Archives Banner 3.png" alt="Placeholder Image 3" class="d-block w-100">
			</div> -->
		</div>

		<!-- Left and right controls -->
		<button class="carousel-control-prev" type="button" data-bs-target="#ArchivesSlider" data-bs-slide="prev">
    		<span class="carousel-control-prev-icon"></span>
  		</button>
  		<button class="carousel-control-next" type="button" data-bs-target="#ArchivesSlider" data-bs-slide="next">
    		<span class="carousel-control-next-icon"></span>
  		</button>

	</div>
</header>
<main>
	<div class="container home mt-4">
		<div>
			<img src="https://www.bard.edu/archives/images/archives_logo_2021.jpg" alt="Statue Reimagining" class="float-end ps-2 pb-2" style="width:10%;">
			<p>
				The mission of the Bard College Archives & Special Collections is to collect, preserve and make available materials in a variety of formats relating to the intellectual and social history of Bard College and its surrounding communities. By offering online and physical access to its holdings, the Archives & Special Collections seeks to support the research and work of undergraduates, the greater Bard community, public historians, private researchers, and scholars worldwide.
			</p>
			<p>
				The Bard College Archives & Special Collections documents the history of the College and the Hudson Valley through its collections, and preserves significant book collections to ensure their long term availability. This website serves to showcase some of the materials available for study, as well as to provide enhanced access to selected materials. Our collections fall into the following categories: College archives; Local and Regional History archives; Delafield Family/Montgomery Place archives; and Monographic Special Collections. Click around and be curious! Specific collections will be presented or described in the following pages.
			</p>
		</div>
	</div>
</main>
				


<?php
	$page->close();
?>