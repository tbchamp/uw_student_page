<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<!--
	Tyler's Picture Gallery
	Adapted From: Sylvia Tashev
	CSE 190M, Spring 2009
	-->

	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		
		<title>Tyler's Pictures</title>
		
		<link href="pictures.css" type="text/css" rel="stylesheet" />
		
		<script src="http://www.cs.washington.edu/education/courses/cse190m/09sp/prototype.js"  type="text/javascript"></script>
		<script src="http://www.cs.washington.edu/education/courses/cse190m/09sp/scriptaculous.js" type="text/javascript"></script>
	
		<script src="pictures.js" type="text/javascript"></script>
	</head>

	<body>
		<h1>Tyler's Picture Gallery</h1>
		<div id="menu">
			<ul id="menu_list">
				<li class="menu_item"><a href="http://students.washington.edu/tbchamp/">Home</a></li>
				<li class="menu_item"><a href="http://vger.aa.washington.edu/~tbchamp/">AA Research</a></li>
				<li class="menu_item"><a href="/tbchamp/pictures.php">Pictures</a></li>
				<li class="menu_item"><a href="/tbchamp/links.html">Links & Calendar</a></li>
				<li class="menu_item"><a href="/tbchamp/Resume.pdf" style="background-image: none;">Resume</a></li>
			</ul>
		</div>
		<div id="main">
			<img id="mainimage" src="pictures/3fish-1.jpg" alt="picture" />
		</div>

		<p>
			<img id="left" src="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/section8-photogallery/solution/images/left.jpg" alt="Left" />
			Double-click or drag a thumbnail into the viewing area or use the arrow keys to go in sequence.
			<img id="right" src="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/section8-photogallery/solution/images/right.jpg" alt="Right" />
		</p>

		<!-- container for all the pictures -->
		<div id="pictures">
			<?php
			$imgs1 = glob("pictures/*.jpg");
			$imgs2 = glob("pictures/*.JPG");
			$imgs3 = glob("pictures/*.gif");
			$imgs4 = glob("pictures/*.GIF");
			$imgs5 = glob("pictures/*.png");
			$imgs6 = glob("pictures/*.PNG");
			$imgs7 = glob("pictures/*.tif");
			$imgs8 = glob("pictures/*.TIF");
			$images = array_merge($imgs1, $imgs2, $imgs3, $imgs4, $imgs5, $imgs6, $imgs7, $imgs8);
			foreach ($images as $image) {
				# display each image in the gallery
				?>
				<img src="<?=$image?>" alt="photo" />
				<?php
			}
			?>
			
		</div>
	</body>
</html>