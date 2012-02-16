<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
	<title>Tyler Beauchamp's Page</title>
	<link href="images/shortcut_icon.png" type="image/png" rel="shortcut icon" />
	<link rel="stylesheet" media="screen" type="text/css" href="style.css" />
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-19149623-1']);
		_gaq.push(['_trackPageview']);
		
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
  </head>

  <body>
    <div id="page">
	  <div id="header">
	    <div id="logo">
		<p>Tyler's<span class="green"> Page</span></p>
		<div id="slogan"><p>Welcome! Friends, Family, and Prospective Employers</p></div>
		</div>
		<div id="nav">
		  <div id="nav-menu-left"></div>
		  <div id="nav-menu">
		  <!-- navigation links -->
		    <ul>
			  <li><a href="index.php">Home</a></li>
			  <li><a href="http://vger.aa.washington.edu/~tbchamp/">AA Research</a></li>
			  <li><a href="/tbchamp/pictures/pictures.php">Pictures</a></li>
			  <li><a href="/tbchamp/links/links.html">Links &amp; Calendar</a></li>
			  <li><a href="/tbchamp/Resume.pdf" style="background-image: none;">Resume</a></li>
			</ul>
          </div>
		  <div id="nav-menu-right"></div>
		</div>
	  </div>
	  <div class="clearfloats"></div>
	  <div id="header2">
	    <div id="header2-slogan1"><p>Tyler Beauchamp</p></div>
	    <div id="header2-slogan2"><p>CSE Major, UW</p></div>
	  </div>
	  
	  <div id="content">
	    <div class="content-padding">
	    	<img class="me_pic" src="images/me.png" alt="Tyler Beauchamp" />
	      <h1>About Me:</h1>
          
          <p>I am a Computer Engineering student at the University of Washington (Seattle). I was accepted into the department for fall quarter 2010. My interests include: robots, artificial intelligence, web page design, and programming in general. I love the outdoors and enjoy hiking, backpacking, kayaking, biking, and camping.</p>
          <p>Over the last summer (2011), I interned with NetApp in San Jose, CA. I worked on the SMI-S interface team, programing in systems level code in C. I am continuing to work part time through the school year for my team.</p>
          <p>I have signed a full-time offer with NetApp and I will be working for them starting October 1st 2012 in Sunneyvale, CA.</p>
          <p>I also work in the Nonlinear Dynamics and Control Lab (autonomous Robofish lab). I started working there through the Summer Undergraduate Research Program (SURP) over the summer of 2009. Since then, I have continued working in the lab. I help with many different projects, assisting post-docs, grad students, and other undergrads. I have written programs / algorithms, collected and analyzed data, and helped run tests for current projects. Our lab works both with the autonomous robotic fish they designed and made and with seagliders designed by the oceanography department and Applied Physics Lab.</p>
          <p>Specific Projects I have worked on include: analyze human decision making data, track live fish, write a speed controller for the fish, and help test the seagliders in the Puget Sound.</p>
          <p>I am a Washington NASA Space Grant Scholar and received a scholarship from the Consortium.</p>
          <p>I graduated as valedictorian with a 4.0 GPA form Hockinson High School in 2008. The summer after high school, I worked as a lifeguard for the City of Vancouver, WA.</p>
          <p>I have been active in the Boy Scouts of America since I was 6 and I am an Eagle Scout with Silver, Gold, and Bronze palms. I am also Vigil in the Order of the Arrow. I participated heavily in my troop's activities, participated in ceremonies in my OA chapter, completed a 50+ mile backpacking trip on the Pacific Crest Trail, and participated in National Scout Jamboree 2005, Philmont, and Sea Base. I also earned a scholarship from my Council (Cascade Pacific Council).</p>
          <p></p>
	    
	    </div>
	  </div>
	  <div id="body-divider"></div><!-- the division between the light green content section, and the dark -->
	  <div id="content2">
	    <div class="content-padding">
		  <!-- content blocks (three side by side) -->
		  <div class="content2-block">
		  	<img src="images/headline-arrow.gif" alt="arrow" />
		    <h2>CSE Projects:</h2>
		    <p>CSE403: <a href="http://cubist.cs.washington.edu/projects/12wi/cse403/r/index.html">Recipe Reader Andriod App</a></p>
            <p>CSE454: <a href="CSEprojects/revminer.html">RevMiner Project</a></p>
            <p></p>
		    <img src="images/headline-arrow.gif" alt="arrow" />
		    <h2>HCDE 333 Portfolio:</h2>
		    <p>I put together a portfolio of my work in my HCDE class.</p>
		    <p><a href="HCDE_333/HCDE_333_portfolio.html">HCDE 333 Portfolio</a></p>
            <p></p>
		    <img src="images/headline-arrow.gif" alt="arrow" />
            <h2>Family / Genealogy:</h2>
		    <p>For my Senior Project in High School, I created a family webpage that focuses on the Norris side of my mother's family:</p>
		    <p href="../recipe reader/style.css" rel="stylesheet" type="text/css"><a href="http://thenorrises.org/">http://thenorrises.org/</a></p>
		  </div>
		  <div class="content-divider"></div>
		  <div class="content2-block">
		    <div>
		    <img src="images/headline-arrow.gif" alt="arrow" />
		    <h3>Seattle Weather:</h3>
		    <?php
		    	/* helper methods */
					/* gets the xml data */
					function get_data($url)
					{
						$ch = curl_init();
						$timeout = 5;
						curl_setopt($ch,CURLOPT_URL,$url);
						curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
						curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
						$xml = curl_exec($ch);
						curl_close($ch);
						return $xml;
					}
					/* regular expression matcher */
					function bm_getWeatherProperties ($needle, $data) {

						$regex = '<yweather:condition.*' . $needle . '="(.*?)".*/>';
						preg_match($regex, $data, $matches);
						return $matches[1];
					}
				/* end helper methods */
					
		    	$data = get_data("http://weather.yahooapis.com/forecastrss?p=98105&u=f");
				$weather_condition = bm_getWeatherProperties('text',$data);
				$weather_temp = bm_getWeatherProperties('temp',$data);
				
		    ?>
		    <p>Conditions: <?php echo $weather_condition; ?>, <?php echo $weather_temp; ?> F</p>
		    <p><img src="weather/weatherimage-seattle.php" alt="weather seattle" /></p>
		    </div>
		    <div>
		    <img src="images/headline-arrow.gif" alt="arrow" />
		    <h4>Vancouver Weather:</h4>
		    <?php					
		    	$data = get_data("http://weather.yahooapis.com/forecastrss?p=98682&u=f");
				$weather_condition = bm_getWeatherProperties('text',$data);
				$weather_temp = bm_getWeatherProperties('temp',$data);
		    ?>
		    <p>Conditions: <?php echo $weather_condition; ?>, <?php echo $weather_temp; ?> F</p>
		    <p><img src="weather/weatherimage-vancouver.php" alt="weather seattle" /></p>
		    </div>
		  </div>
		  <div class="content-divider"></div>
  		  
          <div class="content2-block">
		    <img src="images/headline-arrow.gif" alt="arrow" />
		    <h5>Contact Me:</h5>
			<p>Email: tbchamp (at) uw.edu or (at) cs.washington.edu</p>
			<p>Phone: (360) 836-1029</p>
			<p><a href="http://www.facebook.com/thebchamp">Facebook</a></p>
			<p><img src="images/qrcode.png" alt="qr code: website link" /></p>
		  <!-- end content blocks -->
		  </div>
		  <div class="clearfloats"></div>
		</div>
      </div>
	  <div id="footer-div"></div>
	  <div id="footer">
	    <p>Thanks for Visiting!</p>
	  </div>
	</div>
  </body>
</html>
