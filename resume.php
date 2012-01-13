<?php

// PHP Resume Template
//
// Heavily Modified for sudent use by: Tyler Beauchamp (http://students.washington.edu/tbchamp/)
// Original: Alex King (http://www.alexking.org/software/resume/)
//
// **********************************************************************
// This program is free software; you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation; either version 2 of the License, or
// (at your option) any later version.
//
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
// General Public License for more details.
//
// http://www.gnu.org/copyleft/gpl.html
//
// *****************************************************************
//

/* -- INITIALIZE DATA ------------------------------------------------------------ */

// we want to see any errors so we can fix them

ini_set('display_errors', '1');
ini_set('error_reporting', E_ALL);
error_reporting(E_ALL); 

$bio = array();
$data = array();
$data['jobs'] = array();
$prefs = array();

/* -- ENTER DATA BELOW ------------------------------------------------------------ */

// Personalize Info:
$bio['name'] 	= "Tyler Beauchamp";
$bio['phone'] 	= "(360) 399-6386";
$bio['email'] 	= "tbchamp@cs.washington.edu";
$bio['web'] 	= "http://students.washington.edu/tbchamp/";
$bio['address']	= "5063 Sand Point Place NE";
$bio['city']	= "Seattle";
$bio['state']	= "WA";
$bio['zip']		= "98105";
$PDF_RESUME = "http://students.washington.edu/tbchamp/Resume.pdf";

// set to 1 to show this info on the page, 0 to hide it
$prefs['show_phone']	= 1;
$prefs['show_email']	= 1;
$prefs['show_address']	= 1;
$prefs['show_web_site']	= 1;

// CAUTION: not sure how or if this works I added links with set to 0 and could not with set to 1
// <<if you want to be able to enter HTML (links, etc.) in your descriptions, set this to 1.
// This means you need to manually escape any content as HTML.>>
//$prefs['encode_output']	= 0;

// enter objective here
$data['objective'] = "Seeking an internship that will challenge me, allow me to explore a specific topic within computer engineering, and give me experience working in an industry leading company.";

// add skills to array, resize this array as needed
$data['skills_technologies_projects'] = array("Experienced with Computers: Unix/Linux, Macintosh, and Windows systems."
                                             ,"I have gained extensive proficiency with Internet based systems and the Microsoft Office Suite."
                                             ,"I have programmed in Java, MATLAB, and basic Python and Ruby."
                                             ,"I have also designed websites using HTML, CSS, PHP, JavaScript, Ajax, SQL and Rails."
                                             ,"I have experience with Solid Works, research experimentation processes, and in a wood and metal shop."
                                             ,"I am also adequate in Spanish (3 years in High School) and fluent in English."
                                             );

//add education array for each institution, delete details not needed
$data['education'][] = array('school_name' 			=>	"University of Washington"
                       		,'city' 				=>	"Seattle"
                       		,'state' 				=>	"WA"
                       		,'major' 				=>	"Computer Engineering"
                       		,'expected_grad_date' 	=>	"June 2012"
                       		,'gpa' 					=>	"3.60"
                       		,'major_gpa' 			=>	"3.77"
	                       );
$data['education'][] = array('school_name' 			=>	"Hockinson High School"
                       		,'city' 				=>	"Brush Prairie"
                       		,'state' 				=>	"WA"
	                       );

// add relevant coursework, resize this array as needed
$data['coursework'] = array("CSE Programming I & II"
									, "CSE Web Programming"
									, "CSE Foundations I & II"
									, "CSE Hardware / Software Interface"
									, "CSE Data Structures and Algorithms"
									, "CSE Unix systems and software tools"
									, "Introduction to Electrical Engineering"
									, "Introduction to Engineering Design"
									, "Calculus with Analytic Geometry I, II, III"
									, "Matrix Algebra"
									, "Differential Equations"
									, "Probability and Statistics for Engineers"
									, "Physics: Mechanics, Electricity, Magnetism, and Waves"
									, "General Chemistry I"
									, "Technical Communication"
									, "Adv. Technical Communication and Oral Presentations"
									, "Visualization, CAD, and Solid Works"
                                    );

// add honors and awards, resize this array as needed
$data['honors_awards'] = array("Dean's list five quarters"
									, "NASA Space Grant Scholar"
									, "Burkhardt Scholarship (CSE 2010-11)"
									, "SURP 2009 Best Research Presentation"
									, "CPC Eagle Scout Scholarship Recipient"
									, "Eagle Scout with Bronze, Gold, and Silver palms and Vigil honor (Boy Scouts of America)"
									, "High School Valedictorian (4.0 GPA)"
                                    );

// add activities, resize this array as needed
$data['activities'] = array("Member ACM (Association for Computing Machinery"
									, "Member of the UW chapter of IEEE"
									, "Martin Luther King Jr. Day of Service Volunteer (2009-10)"
									, "Volunteer at Eco Encore"
									, "Volunteer at Seattle Audubon Society"
									, "Assistant Scoutmaster BSA Troop 48 – Leadership"
                                    );

// this is where you put all your job information
// add more of these arrays (copy & paste) as needed and resize them as needed Can leave positions array empty if not applicable


$data['jobs'][] = array('period' =>			"2009-Present"
                       ,'employer' =>		"Research"
                       ,'location' =>		"Seattle, WA"
                       ,'employer_info' =>	"I have been researching in the Non-Linear Dynamics and Control Laboratory under Professor Kristi Morgansen-Hill in the Aeronautics and Astronautics department of the UW since Fall Quarter 2009. I help with the software and hardware of autonomous robotic fish and with the testing of UW APL developed Seagliders. This last summer I helped <a href="."http://vger.aa.washington.edu/~tbchamp/KWT1977.pdf".">document</a> the Seaglider testing."
                       ,'employer_link' =>	"http://www.aa.washington.edu/research/ndcl/index.html"
                       ,'positions' => array()
                       ,'show' => 1 // set to 0 to hide this job, 1 to show it
                       );

$data['jobs'][] = array('period' =>			"Summer 2009"
                       ,'employer' =>		"Washington NASA Space Grant Consortium Undergraduate Research Program"
                       ,'location' =>		"Seattle, WA"
                       ,'employer_info' =>	"Analyzed human decision making data using MATLAB looking for future connections to autonomous vehicles. Collected experimental data and Improved a speed control algorithm for the lab’s autonomous vehicles."
                       ,'positions' => array()
                       ,'show' => 1 // set to 0 to hide this job, 1 to show it
                       );

$data['jobs'][] = array('period' =>			"2008"
                       ,'employer' =>		"Ellis & Associates Lifeguard Training"
                       ,'location' =>		"Vancouver, WA"
                       ,'employer_info' =>	"Including: basic first aid, CPR, AED, and oxygen administration. I worked as a lifeguard over the summer of 2008 for the City of Vancouver. I learned to be responsible, dependable, how to take control of a situation, and how to act professionally under stressful situations."
                       ,'positions' => array()
                       ,'show' => 1 // set to 0 to hide this job, 1 to show it
                       );

$data['jobs'][] = array('period' =>			"2008"
                       ,'employer' =>		"At Home At School (AHAS) Volunteer"
                       ,'location' =>		"Vancouver, WA"
                       ,'employer_info' =>	"Instructor and Group Leader for the summer school program for children from low-income families run by the School of Education at Washington State University – Vancouver. I worked with and supervised young children gaining experience as a leader."
                       ,'positions' => array()
                       ,'show' => 1 // set to 0 to hide this job, 1 to show it
                       );

//MAIN EXAMPLE JOB ARRAY WITH ALL OPTIONS SHOWN (SET TO NOT BE SHOWN, LEAVE IN CODE AS EXAMPLE)
$data['jobs'][] = array('period' =>			"1995-2000"
                       ,'employer' =>		"Company Name"
                       ,'location' =>		"City, State"
                       ,'employer_info' =>	"Company description."
                       ,'employer_link' =>	"http://example.com/"
                       ,'positions' => array('Position/Title' => array("Responsibility description"
                                                                      ,"Accomplishment description #1"
                                                                      ,"Accomplishment #2"
                                                                      )
                                            ,'Position/Title 2' => array("Responsibility description #2"
                                                                        ,"Accomplishment for position #2"
                                                                        )
                                            )
                       ,'show' => 0 // set to 0 to hide this job, 1 to show it
                       );

/* -- DONE ENTERING DATA - you shouldn't need to edit below this line ------------ */

/* ------------------------------------------------------------------------------- */

/* -- WEB PAGE GENERATION CODE --------------------------------------------------- */



 // functions
 
function pad_and_wrap($string, $pad_to = 20, $pad_with = ' ', $wrap_at = 80, $bullet = '') {
	global $prefs;
	if (!empty($prefs['encode_output']) && $prefs['encode_output'] == 1) {
		$string = strip_tags($string);
	}
	if (!empty($bullet)) {
		$string = $bullet.$string;
	}
	if (strlen($string) > $wrap_at) {
		$wrap_line_at = strrpos(substr($string, 0, $wrap_at), ' ');
		$output = str_pad('', $pad_to, $pad_with).substr($string, 0, $wrap_line_at);
		$remainder = substr($string, $wrap_line_at + 1);
		if (strlen($remainder) > 0) {
			$output .= "\n".pad_and_wrap($remainder, ($pad_to + strlen($bullet)), $pad_with, ($wrap_at - strlen($bullet)), '');
		}
	}
	else {
		$output = str_pad('', $pad_to, $pad_with).$string;
	}
	return $output;
}

function encode_output($str) {
	global $prefs;
	if (!empty($prefs['encode_output']) && $prefs['encode_output'] == 1) {
		return htmlentities($str);
	}
	else {
		return $str;
	}
}

// CSS

ob_start();
?>

body {
	margin: 10px;
}
p, td, span, li, a { 
	font-family: verdana, arial, helvetica, sans-serif; 
}
h1 {
	font: 90% verdana, arial, helvetica, sans-serif;
	font-weight: bold;
	margin: 0 0 5px 0;
}
h2 {
	border-bottom: 1px solid;
	clear: both;
	font: 80% verdana, arial, helvetica, sans-serif;
	font-weight: bold;
	margin: 15px 0 10px 0;
	padding: 0 0 3px 0;
	width: 700px;
}
h3 {
	float: left;
	font: 80% verdana, arial, helvetica, sans-serif;
	font-weight: bold;
	margin: 0 0 5px 0;
	padding: 0;
	width: 446px;
}
li {
	font-size: 70%;
	margin: 0 0 3px 20px;
	padding: 0;
}
p {
	font-size: 70%;
	margin: 0 0 10px 0;
	padding: 0;
	width: 575px;
}
body ul {
	margin: 0 0 0 125px;
	padding: 0;
	width: 575px;
}
body div ul {
	margin: 3px 0 0 0;
	padding: 0;
	width: 575px;
}
#bio_left {  //not commented out this is css code
	font-size: 75%;
	float: left;
	width: 300px;
}
#bio_right {  //not commented out this is css code
	font-size: 75%;
	float: left;
	text-align: right;
	width: 300px;
	margin-left: 100px;
}
.company {
	clear: both;
	margin: 0 0 5px 0;
	padding: 0;
}
.data {
	padding-left: 125px;
}
.date {
	clear: left;
	float: left;
	padding-top: 2px;
	width: 125px;
}
.job {
	clear: both;
	width: 700px;
}
.job_data {
	float: left;
	width: 575px;
}
.location {
	clear: right;
	float: left;
	text-align: right;
	width: 125px;
}
.school {
	margin: 20px 0px 5px 0px;
}
.indent {
	margin: 0px 0px 5px 0px;
	text-indent:50px;
}
.position {
	font-style: italic;
	margin: 0 0 5px 0;
}
#references {  //not commented out this is css code
	margin-top: 20px;
}
#meta {  //not commented out this is css code
	margin-top: 30px;
}

<?php
$css_screen = ob_get_contents();
ob_end_clean();

ob_start();
?>
body {
	margin: 0px;
}
p, td, span, li, a { 
	font-family: verdana, arial, helvetica, sans-serif; 
}
h1 {
	font: 14pt verdana, arial, helvetica, sans-serif;
	font-weight: bold;
	margin: 0 0 5px 0;
}
h2 {
	border-bottom: 1px solid;
	clear: both;
	font: 11pt verdana, arial, helvetica, sans-serif;
	font-weight: bold;
	margin: 15px 0 10px 0;
	padding: 0 0 3px 0;
	width: 100%;
}
h3 {
	font: 11pt verdana, arial, helvetica, sans-serif;
	font-weight: bold;
	margin: 0 0 2px 0;
	padding: 0;
}
li {
	font-size: 10pt;
	margin: 0 0 3px 5%;
	padding: 0;
}
p {
	font-size: 10pt;
	margin: 0 0 10px 0;
	padding: 0;
}
body ul {
	margin: 0 0 0 20%;
	padding: 0;
}
body div ul {
	margin: 3px 0 0 0;
	padding: 0;
}
#bio_left {  //not commented out this is css code
	font-size: 11pt;
	float: left;
	width: 40%;
}
#bio_right {   //not commented out this is css code
	font-size: 11pt;
	float: left;
	text-align: right;
	width: 40%;
}
.company {
	clear: both;
	margin: 0 0 5px 0;
	padding: 0;
}
.data {
	padding-left: 20%;
}
.date {
	clear: left;
	float: left;
	padding-top: 2px;
	width: 20%;
}
.job {
	clear: both;
	width: 100%;
}
.job_data {
	float: left;
	width: 80%;
}
.location {
	clear: right;
	float: right;
	text-align: right;
	width: 20%;
}
.position {
	font-style: italic;
	margin: 0 0 5px 0;
}
#references {   //not commented out this is css code
	margin-top: 20px;
}
#meta {   //not commented out this is css code
	display: none;
}

<?php
$css_print = ob_get_contents();
ob_end_clean();

ob_start();
$split_length = floor(strlen($bio['email']) / 4);
?>
function email() { // try to avoid spam trollers, intentionally complex
	var a = "<?php print(substr($bio['email'], 0, $split_length)); ?>";
	var b = "<?php print(substr($bio['email'], $split_length, $split_length)); ?>";
	var c = "<?php print(substr($bio['email'], ($split_length * 2), $split_length)); ?>";
	var d = "<?php print(substr($bio['email'], ($split_length * 3), ($split_length + (strlen($bio['email']) % 4)))); ?>";
	
	e_string = "<a href=\"ma" + "ilto:" + a + b + c + d + "\">" + a + b + c + d + "</a>";
	document.write(e_string);
}
<?php
$js = ob_get_contents();
ob_end_clean();

if (isset($_REQUEST["output"])) {
	$output = stripslashes($_REQUEST["output"]);
}
else {
	$output = 'html';
}
switch ($output) {
	case "css_screen":
		header("Content-type: text/css");
		print($css_screen);
		break;
	case "css_print":
		header("Content-type: text/css");
		print($css_print);
		break;
	case "js":
		header("Content-type: text/javascript");
		print($js);
		break;
	case "html":
		if (isset($_GET['contained']) && $_GET['contained'] == 1) {
			header("Content-Type: application/force-download");
			header("Content-Type: application/octet-stream");
			header("Content-Type: application/download");
			header("Content-Disposition: attachment; filename=\"resume.html\"");
		}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
        "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!-- HTML Resume Template -->
<html>
<head>
<title><?php print(encode_output($bio['name'])); ?>'s Resume</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
if (isset($_GET['contained']) && $_GET['contained'] == 1) {
?>

<style type="text/css" media="screen">
<?php
	print($css_screen);
?>
</style>
<style type="text/css" media="print">
<?php
	print($css_print);
?>
</style>
<script type="text/javascript">
<?php
	print($js);
?>
</script>
<?php
}
else {
?>
<style type="text/css" media="screen">
	@import url(http://<?php print($_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']); ?>?output=css_screen);
</style>
<link rel="stylesheet" type="text/css" media="print" href="http://<?php print($_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']); ?>?output=css_print" />

<link href="resume.gif" type="image/gif" rel="shortcut icon" />

<script type="text/javascript" src="http://<?php print($_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']); ?>?output=js"></script>
<?php
}
?>
</head>

<body>

<p id="meta">
<?php
if (empty($_GET['contained']) || $_GET['contained'] != 1) {
?>
	<span id="versions"> <a href="<?php print($PDF_RESUME) ?>">Formatted PDF Version</a> | <a href="<?php print($_SERVER['PHP_SELF'].'?output=text'); ?>">Plain Text (.txt) version</a> </span>
<?php
}
?>
</p>

<h1><?php print(encode_output($bio['name'])); ?></h1>

<p id="bio_left">
<?php
if ($prefs['show_phone'] == 1) {
	print(encode_output($bio['phone']).'<br />');
}
if ($prefs['show_email'] == 1) {
?>
	<script type="text/javascript">email();</script>
	
<?php
}
if ($prefs['show_web_site'] == 1) {
?>
	<br /> <a href="<?php print($bio['web']) ?>"><?php print($bio['web']) ?></a>
<?php
}
?>
</p>
<p id="bio_right">
<?php
if ($prefs['show_address'] == 1) {
	print(encode_output($bio['address']).'<br />'
	     .encode_output($bio['city']).', '
	     .encode_output($bio['state']).' '
	     .encode_output($bio['zip'])
	     );
}
?>
</p>

<h2>OBJECTIVE</h2>
<p class="data"><?php print(encode_output($data['objective'])); ?></p>

<h2>EDUCATION</h2>
<ul>
<?php
foreach ($data['education'] as $temp) {
?>
	<div class="school">
		<?php if (!empty($temp['school_name'])) { ?> <p class="school"> <?php print($temp['school_name']); ?> </p> <?php } ?>
		<?php if (!empty($temp['city'])) { ?> <p class="indent"> <?php print($temp['city']); ?>, <?php print($temp['state']); ?> </p> <?php } ?>
		<?php if (!empty($temp['major'])) { ?> <p class="indent"> Major: <?php print($temp['major']); ?> </p> <?php } ?>
		<?php if (!empty($temp['expected_grad_date'])) { ?> <p class="indent"> Expected Graduation Date: <?php print($temp['expected_grad_date']); ?> </p> <?php } ?>
		<?php if (!empty($temp['gpa'])) { ?> <p class="indent"> GPA: <?php print($temp['gpa']); ?> </p> <?php } ?>
		<?php if (!empty($temp['major_gpa'])) { ?> <p class="indent"> Major GPA: <?php print($temp['major_gpa']); ?> </p> <?php } ?>
	</div>
<?php
}
?>
</ul>

<h2>RELEVANT COURSEWORK</h2>
<ul>
<?php
foreach ($data['coursework'] as $temp) {
	print("	<li>".encode_output($temp)."</li>\n");
}
?>
</ul>


<h2>HONORS &amp; AWARDS</h2>
<ul>
<?php
foreach ($data['honors_awards'] as $temp) {
	print("	<li>".encode_output($temp)."</li>\n");
}
?>
</ul>


<h2>SKILLS</h2>
<ul>
<?php
foreach ($data['skills_technologies_projects'] as $temp) {
	print("	<li>".encode_output($temp)."</li>\n");
}
?>
</ul>

<h2>EXPERIENCE</h2>
<?php
foreach ($data['jobs'] as $job) { 
	if ($job['show'] == 1) {
		if (!empty($job['employer_link'])) {
			$link = array(
				'<a href="'.$job['employer_link'].'">'
				,'</a>'
			);
		}
		else {
			$link = array('','');
		}
?>
<div class="job">
	<p class="date"><?php print(encode_output($job['period'])); ?></p>
	<div class="job_data">
		<h3><?php print($link[0].encode_output($job['employer']).$link[1]); ?></h3>
<?php
		if (!empty($job['location'])) {
?>
		<p class="location"><?php print(encode_output($job['location'])); ?></p>
<?php
		}
		else {
?>
		<p class="location">&nbsp;</p>
<?php
		}
		if (!empty($job['employer_info'])) {
?>
		<p class="company"><?php print(encode_output($job['employer_info'])); ?></p>
<?php
		}
		foreach ($job['positions'] as $title => $position) {
?>
		<p class="position"><?php print(encode_output($title)); ?></p>
		<ul>
<?php
			foreach ($position as $responsibility) {
				print("			<li>".encode_output($responsibility)."</li>\n");
			}
?>
		</ul>
		&nbsp;
<?php
		}
?>
	</div>
</div>

<?php
	}
}
?>


<h2>ACTIVITIES</h2>
<ul>
<?php
foreach ($data['activities'] as $temp) {
	print("	<li>".encode_output($temp)."</li>\n");
}
?>
</ul>


<p id="references"> </p>

<p id="meta">
<?php
if (empty($_GET['contained']) || $_GET['contained'] != 1) {
?>
	<span id="versions"> <a href="<?php print($PDF_RESUME) ?>">Formatted PDF Version</a> | <a href="<?php print($_SERVER['PHP_SELF'].'?output=text'); ?>">Plain Text (.txt) version</a> </span>
<?php
}
?>
	<!--<span id="valid">Valid <a href="http://validator.w3.org/check/referer">XHTML 1.1</a> / <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS 2.0</a></span>-->
</p>

</body>
</html>
<?php
		break;
	case "text":
		header("Content-type: text/plain");
		print($bio['name']."\n\n");
		if ($prefs['show_phone'] == 1) {
			print(str_pad($bio['phone'], 50, ' '));
		}
		if ($prefs['show_address'] == 1) {
			print(str_pad($bio['address'], 50, ' ', STR_PAD_LEFT)."\n"); 
		}
		if ($prefs['show_email'] == 1) {
			print(str_pad($bio['email'], 50, ' '));
		}
		if ($prefs['show_address'] == 1) {
			print(str_pad($bio['city'].', '.$bio['state'].' '.$bio['zip'], 50, ' ', STR_PAD_LEFT)); 
		}
		print("\n");
		if ($prefs['show_web_site'] == 1) {
			print(str_pad($bio['web'], 50, ' '));
		}
		print("\n\n");
		print('OBJECTIVE'."\n".str_pad('', 100, '-')."\n");
		print(pad_and_wrap($data['objective'])."\n\n\n");
		print("\n\n".'EDUCATION'."\n".str_pad('', 100, '-')."\n");
		foreach ($data['education'] as $temp) {
			
			if (!empty($temp['school_name'])) { print(pad_and_wrap($temp['school_name'], 20, ' ', 80, '- ')."\n"); }
			if (!empty($temp['city'])) { print(pad_and_wrap($temp['city'] . ', ' . $temp['state'], 25, ' ', 80, '- ')."\n"); }
			if (!empty($temp['major'])) { print(pad_and_wrap($temp['major'], 25, ' ', 80, '- ')."\n"); }
			if (!empty($temp['expected_grad_date'])) { print(pad_and_wrap('Expected Graduation Date: ' . $temp['expected_grad_date'], 25, ' ', 80, '- ')."\n"); }
			if (!empty($temp['gpa'])) { print(pad_and_wrap('GPA: ' . $temp['gpa'], 25, ' ', 80, '- ')."\n"); }
			if (!empty($temp['major_gpa'])) { print(pad_and_wrap('Major GPA: ' . $temp['major_gpa'], 25, ' ', 80, '- ')."\n"); }
			
		}
		print("\n\n".'RELEVANT COURSEWORK'."\n".str_pad('', 100, '-')."\n");
		foreach ($data['coursework'] as $temp) {
			print(pad_and_wrap($temp, 20, ' ', 80, '- ')."\n");
		}
		print("\n\n".'HONORS & AWARDS'."\n".str_pad('', 100, '-')."\n");
		foreach ($data['honors_awards'] as $temp) {
			print(pad_and_wrap($temp, 20, ' ', 80, '- ')."\n");
		}
		print("\n".'SKILLS'."\n".str_pad('', 100, '-')."\n");
		foreach ($data['skills_technologies_projects'] as $temp) {
			print(pad_and_wrap($temp, 20, ' ', 80, '- ')."\n");
		}
		print('EXPERIENCE'."\n".str_pad('', 100, '-')."\n");
		foreach ($data['jobs'] as $job) { 
			if ($job['show'] == 1) {
				print(str_pad($job['period'], 20, ' '));
				print(str_pad($job['employer'], 55, ' '));
				print(str_pad($job['location'], 25, ' ', STR_PAD_LEFT)."\n");
				if (!empty($job['employer_info'])) {
					print(pad_and_wrap($job['employer_info'])."\n");
				}
				foreach ($job['positions'] as $title => $position) {
					print("\n".pad_and_wrap($title)."\n");
					foreach ($position as $responsibility) {
						print(pad_and_wrap($responsibility, 20, ' ', 80, '- ')."\n");
					}
				}
			}
			print("\n");
		}
		print("\n".'ACTIVITIES'."\n".str_pad('', 100, '-')."\n");
		foreach ($data['activities'] as $temp) {
			print(pad_and_wrap($temp, 20, ' ', 80, '- ')."\n");
		}
		break;
}
?>