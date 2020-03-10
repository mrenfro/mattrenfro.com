
<?php
    $result="";
 if(isset($_POST['submit'])){
   require 'PHPMailerAutoload.php';
   $mail = new PHPMailer;
   $mail->Host='smtp.gmail.com';
   $mail->Port=587;
   $mail->SMTPAuth=true;
   $mail->SMTPSecure='tls';
   $mail->Username='mrmattatx@gmail.com';
   $mail->Password='Design69';
   $mail->setFrom($_POST['email'],$POST['name']);
   $mail->addAddress('mrmattatx@gmail.com');
   $mail->addReplyTo($_POST['email'],$POST['name']);
   $mail->isHTML(true);
   $mail->Subject='Form Subission:'.$_POST['subject'];
   $mail->Body='<h1 align=center>Name :'.$_POST['name'].'<br>Email: '.$_POST['email'] .'<br>Message: '.$_POST['msg'].'</h1>';

   if(!$mail->send()){
     $result="Something went wrong. Try again.";
        }
  else{
     $result="Thank you,<br>  " .$_POST['name'] . "<br> I will be back in touch soon!";
        }
 }

?>
<?php

//$curl_handle=curl_init();
$curl_handle = curl_init($url);
curl_setopt($curl_handle, CURLOPT_URL,'https://mattrenfro.com/productSearchgas.php?utilityCode=NICILG&stateCode=IL&customerTypeCode=R&serviceTypeCode=G&salesChannelCode=WEB&contractSourceCode=MM');
//Set the GET method by giving 0 value and for POST set as 1
//curl_setopt($curl_handle, CURLOPT_POST, 0);
//curl_setopt($curl_handle, CURLOPT_CUSTOMREQUEST, "GET");
//curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
//curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $payload);
curl_setopt($curl_handle, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  //set the content type to application/json
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
$query = curl_exec($curl_handle);
$resultnicor3 = json_decode($query, true);
curl_close($curl_handle);
//close cURL resource

//$json_a = json_decode($result);
//print_r($result);
//print complete object, just echo the variable not work so you need to use print_r to show the result

//echo  $result[0]["productCode"];
//Inside the second layer
//echo $model["data"][0]["companyName"];



?>
<?php

//$curl_handle=curl_init();
$curl_handle = curl_init($url);
curl_setopt($curl_handle, CURLOPT_URL,'https://mattrenfro.com/productSearchgas.php?utilityCode=NICILG&stateCode=IL&customerTypeCode=R&serviceTypeCode=G&salesChannelCode=WEB&contractSourceCode=MM');
//Set the GET method by giving 0 value and for POST set as 1
//curl_setopt($curl_handle, CURLOPT_POST, 0);
//curl_setopt($curl_handle, CURLOPT_CUSTOMREQUEST, "GET");
//curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
//curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $payload);
curl_setopt($curl_handle, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  //set the content type to application/json
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
$query = curl_exec($curl_handle);
$resultnicor6 = json_decode($query, true);
curl_close($curl_handle);
//close cURL resource

//$json_a = json_decode($result);
//print_r($result);
//print complete object, just echo the variable not work so you need to use print_r to show the result

//echo  $result[0]["productCode"];
//Inside the second layer
//echo $model["data"][0]["companyName"];



?>
<?php

//$curl_handle=curl_init();
$curl_handle = curl_init($url);
curl_setopt($curl_handle, CURLOPT_URL,'https://mattrenfro.com/productSearchgas.php?utilityCode=NICILG&stateCode=IL&customerTypeCode=R&serviceTypeCode=G&salesChannelCode=WEB&contractSourceCode=MM');
//Set the GET method by giving 0 value and for POST set as 1
//curl_setopt($curl_handle, CURLOPT_POST, 0);
//curl_setopt($curl_handle, CURLOPT_CUSTOMREQUEST, "GET");
//curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
//curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $payload);
curl_setopt($curl_handle, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));  //set the content type to application/json
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
$query = curl_exec($curl_handle);
$resultnicor12 = json_decode($query, true);
curl_close($curl_handle);
//close cURL resource

//$json_a = json_decode($result);
//print_r($result);
//print complete object, just echo the variable not work so you need to use print_r to show the result

//echo  $result[0]["productCode"];
//Inside the second layer
//echo $model["data"][0]["companyName"];



?>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Austin Web Developer, WordPress, Bootstrap, JSON, API, Marketing, Front End Developer">
  <meta name="author" content="matt renfro">

  <title>mattrenfro</title>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.min.css" rel="stylesheet">
<style>
#rate-box{
  padding: 30px;
  -webkit-box-shadow: 1px 2px 11px -1px rgba(0,0,0,0.75);
  -moz-box-shadow: 1px 2px 11px -1px rgba(0,0,0,0.75);
  box-shadow: 1px 2px 11px -1px rgba(0,0,0,0.75);
  width:350px;
  background-color: #fff;
  color:#999;
  text-align: center;
}
.center{
  position:relative;
    text-align: center;
	font-weight:bold;
	font-size: 16px;
white-space: nowrap;
      overflow: hidden;
text-overflow: ellipsis;
text-size-adjust: auto;
}
.table, .table-bordered{
  background-color: #fff;
  color:#999;
  width:40%;
  white-space: nowrap;
        overflow: hidden;
  text-overflow: ellipsis;
  text-size-adjust: auto;
}
@media only screen and (max-width: 600px) {
  .table{
display:none;

  }
}
.checkbox {
    display: inline-flex;
    cursor: pointer;
    position: relative;
}

.checkbox > span {
    color: #fff;
    padding: 0.5rem 0.25rem;
}

.checkbox > input {
    height: 25px;
    width: 25px;
    -webkit-appearance: none;
    -moz-appearance: none;
    -o-appearance: none;
    appearance: none;
    border: 1px solid #34495E;
    border-radius: 4px;
    outline: none;
    transition-duration: 0.3s;
    background-color: #ccc;
    cursor: pointer;
  }

.checkbox > input:checked {
    border: 1px solid #FFFFFF;
    background-color: #F7600F;
}

.checkbox > input:checked + span::before {
    content: '\2713';
    display: block;
    text-align: center;
    color: #fff;
    position: absolute;
    left: 0.7rem;
    top: 0.2rem;
}

.checkbox > input:active {
    border: 2px solid #34495E;
}
#myTable{
    width:95%;
}
.tr{
   width:95%;
}
.td{
    width:95%;
}
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #cccccc;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>
<script type="text/javascript">
function hideSelected() {
	var oTable = document.getElementById("myTable");
	var oRows = oTable.getElementsByTagName("tr");

	for( var i=0; i < oRows.length; i++ ) {
		var oInputs = oRows[i].getElementsByTagName("input");
		for( var j=0; j < oInputs.length; j++ ) {
			if( oInputs[j].name == "showHide" ) {
				if(!oInputs[j].checked ) {
					oRows[i].style.display = "none";
				}
				break;
			}
		}
	}

}

function showAll() {
	var oTable = document.getElementById("myTable");
	var oRows = oTable.getElementsByTagName("tr");

	for( var i=0; i < oRows.length; i++ ) {
		if( oRows[i].style.display == "none" ) {
			oRows[i].style.display = "";
		}
	}

}
</script>
</head>

<body id="page-top">
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i>
</button>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Matt Renfro</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Experience</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
            <h2 class="text-center text-success"><?= $result; ?></h2><br>
          <h2 class="text-uppercase text-white font-weight-bold">Web UX/UI Designer and Developer</h2>
          <img src="img/me.png" class="rounded-circle" alt="matt renfro" width="125" height="125">
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">This site is built with Bootstrap, SCSS, jQuery, JSON and PHP.

            </p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#about"><i class="fas fa-angle-down"></i> Brief Overview</a>
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="page-section bg-secondary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">Summary</h2>
          <hr class="divider light my-4">
          <p class="text-white-75 mb-5">During my career for 10+ yrs. now
            I have Designed, Developed and maintained many B2B and B2C corporate websites and applications.
            I have experience in, Web Development, Web Design, WordPress, Drupal and other CMS platforms.
            I am also well versed in Best SEO, Digital Marketing & Graphic Design principles.
            My focus has been on front end UI/UX and themeing and web development, for mobile first and responsive design.
          </p>

          <a class="btn btn-light btn-xl js-scroll-trigger" href="#services"><i class="fas fa-angle-down"></i> Experience</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="page-section" id="services">
    <div class="container">
      <h2 class="text-center mt-0">Experience</h2>
      <hr class="divider my-4">
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-code text-secondary mb-4"></i>
            <h3 class="h4 mb-2">Web Development</h3>
            <p class="text-muted mb-0">I have built and designed many UX/UI web applications, mobile first and responsive websites and apps. I use a process in which the structure, layout, and functionality of a website is considered, based on actual usage and site analytics.
              </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-search text-secondary mb-4"></i>
            <h3 class="h4 mb-2">SEO Strategy</h3>
            <p class="text-muted mb-0">I have managed SEO for many websites, using ADWords, Tag Manager and Advanced Analytics ROI Reporting,  for midsize and large B2B and B2C organizations with a wide range of specifications.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-cogs text-secondary mb-4"></i>
            <h3 class="h4 mb-2">Marketing</h3>
            <p class="text-muted mb-0">Email marketing is a great way to get your message across, whether you’re a blogger and want to give your readers regular updates or you’re a business trying to generate more leads.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-laptop text-secondary mb-4"></i>
            <h3 class="h4 mb-2">Graphic Design</h3>
            <p class="text-muted mb-0">It’s a competitive world, and making a good first impression is important to communicating your objectives and establishing relationships with prospective clients fast.</p>
          </div>
        </div>
      </div>
      <br><br>
      <div align="center">
              <div class="row">

          <div class="col-sm">
            <a style="margin-bottom:5px;" class="btn btn-secondary btn-xl js-scroll-trigger text-center" href="/MattRenfro-2020.pdf"><i class="fas fa-download"></i> Download Resume PDF</a>
          </div>
          <div class="col-sm">
            <a style="margin-bottom:5px;" class="btn btn-secondary btn-xl js-scroll-trigger text-center" href="#portfolio"><i class="fas fa-laptop"></i> Design Portfolio</a>
          </div>
          <div class="col-sm">
            <a class="btn btn-secondary btn-xl js-scroll-trigger text-center" href="#code"><i class="fas fa-laptop-code"></i> Code Sample Portfolio</a>
          </div></div>
        </div>

      <br><br>
      <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Technology Experience
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        WordPress, Drupal, InVision, Adobe Experience Design, Sketch, Adobe Creative Suite, HTML5, PHP, JavaScript, LAMP, MYSQL, CSS, SASS and LESS, Bootstrap
      REST,SOAP, JSON, Twig, Docker, swagger, Google API’s, AWS, Ajax, jQuery, CloudFront CDN, bitbucket, Git , GitHub, Google Anlytics, Google AdWords, Google Tagmanager, Hubspot, Node.js, React, Visual Studio, SQL
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Work Experience:
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
<h4>Santanna Energy Services | Front End Developer <br> Austin,Tx. | 2017 - present</h4>

<ul>
  <li>Develop UI design mockups, storyboards, process flows, sitemaps, and prototypes that clearly illustrate site behaviors, requirements, and design.</li>
<li>Works closely with Product Managers, Architects, and Developers to help deliver intuitive and easy to follow wireframes, mockups, workflows, and prototypes for a variety of projects across our product suite.</li>
<li>Collaborate with Product and Engineering team to support the product development process - from conception to release.</li>
<li>Perform UX research to obtain user feedback and improve products</li>
<li>Design build, and maintain current and new websites I built in WordPress with Docker, phpMyAdmin, Portainer</li>
<li>Develop a digital marketing roadmap that incorporates a website traffic plan with goals and benchmarks to achieve this</li>
<li>	Regularly engage with company employees to support digital marketing efforts</li>
<li>Oversee and manage all digital marketing channels and social media accounts to ensure brand consistency</li>
<li>	Maintain effective, cohesive, and engaging brand messaging</li>
<li>	Generate monthly reports on our marketing campaign’s performance and analysis of site and social traffic</li>
<li>	Establish and monitor ROI and KPIs and prepare an operating budget</li>
<li>	Optimize website and social media channels for SEO as well as usability</li>
<li>	Develop, evaluate and oversee the implementation of A/B/n testing protocols and procedures</li>
<li>	Collaborate with internal teams to create landing pages and optimize user experience</li>
<li>	Forecast sales performance trends and act proactively to increase our market segment</li>
<li>	Motivate digital marketing team including key personnel such as graphic designers, copywriters, videographers, photographers, etc. to achieve goals</li>
<li>	Build landing pages for marketing
<li>	Maintain SEO and brand management</li>
<li>	Maintain paid search campaigns with google adwords, tagmanager, and analytics</li>
<li>	Work with third party vendors for Email campaigns using Adestra and HubSpot</li>
<li>	Meet with Marketing team members on ROI and marketing goals for online Enrollments</li>
<li>	Create UI and UX comps in Photoshop</li>
<li>	Keep up with code versions with Git</li>
<li>	Mange all hosted web clients through, local hosted linux servers.</li>
<li>	Manage MYSQL databases and run queries to extract and display data</li>
<li>	Built a web UI with PHP, JavaScript, JSON, Twig, API's to display products data housed in swagger API portal.</li>
<li>	Design, develop and implement new features, enhancements, and content on existing and new Wordpress websites.</li>
<li>	Maintain and customize existing Wordpress Plugins along with regular updates to website frameworks and databases.</li>
<li>	Maintain and update PHP/MySQL/HTML sites.</li>
<li>	Work closely with project management to provide continuity from project inception through to completion</li>
<li>	Produce working prototypes of web and mobile interfaces</li>
<li>	Maintain and modify existing applications including driving improvements in application speed, efficiency and compatibility</li>
<li>	Assist in the discovery of technical requirements for business applications and tolls that integrate with the front-end experience</li>


<hr class="divider my-4">
<h4>Lee Tilford Agency | Web Designer / Developer <br> Austin, Tx. | 2016 – 2017</h4>

<li> Design build, and maintain current and new clients’ websites in WordPress.</li>
<li> Maintained, and rebuilt specsonline.com managed over 40k products in woo commerce.</li>
<li> Create UI and UX comps for customer using Axure for prototypes</li>
<li> Manage time and maintain project scope of work within the client expectations</li>
<li> Mange all hosted web clients through WPEngine, other local hosted servers.</li>
<li> Consult company on user research, site mapping, wireframing, mockup creation, prototyping, user testing, and final interface design</li>
<li> Create custom websites, using PHP, CSS3 HTML5, WordPress, and woo-commerce.</li>
<li> Support customer needs and consult in server configuration, troubleshoot and configure Linux, nginx, MySQL, PHP5.6 stack on Ubuntu. Also CentOS and server caching</li>
<li> Install PHP7. Apache, and configure PhpMyAdmin on other webservers.</li>
<li> Create and build company Apps using PhoneGap, and prebuilt plugins for PhoneGap features with framework7 Android and IOS.</li>

<hr class="divider my-4">
<h4>Akorbi | Web Designer / Developer <br> Plano,TX | 2015 –2016</h4>

<li> Built and created custom company WordPress site in WordPress</li>
<li> Manage all and maintained digital marketing task, SEO, SEM, PPC, Emailers, landing pages</li>
<li> Manage all web servers, Setup install and configure company webserver, PhpMyAdmin, PHP MySQL, mail, Ubuntu, webmin, ftp</li>
<li> Manage web localization applications with memoQ and easyling</li>
<li> Create Video for other departments marketing efforts using Adobe Premier</li>
<li> Create Company graphics for marketing materials, using Adobe Photoshop, Illustrator, and InDesign</li>
<li> Manage, build and send email campaigns for 5 different departments marketing efforts using constant contact</li>
<li> Generate Lead Generation, and having leads sent to sales team CRM using HubSpot through the website form submissions</li>
<hr class="divider my-4">
<h4>Masergy Communications | Web Designer / Developer  <br> Plano,Texas | 2013 - 2015</h4>

<li> Manage and consult marketing team with the corporate website and web development projects in Drupal as well marketing campaign ideas for company products and services for digital marketing task, SEO, SEM, PPC, Emailers, landing pages </li>
<li> Design UI comps and future website ideas in Photoshop, and then create prototypes for further engagement.</li>
<li> Make updates and changes to Drupal and WordPress website content and module updates as well Drupal configuration and builds with views, jQuery, CSS3 and PHP</li>
<li> Maintain SEO and web site rakings with search engine and maintain Google AdWords campaigns and also marketing landing pages using Marketo using google analytics and AdWords.</li>
<li> Manage development and production websites on Linux (Ubuntu, and RHL) based web servers. </li>
<li> Manage and push development website to production once projects are complete using ssh commands. from Amazon Web Services instances (AWS)</li>

<hr class="divider my-4">
<h4>View Cast Corporation | Web Manager/Developer <br> Plano,Texas | 2011 - 2013 </h4>

<li> Designed and built the corporate company website into a more stable work solution using the Drupal CMS , CSS, PHP,FlashAS3 , JavaScript, Ajax, MYSQL and UberCart.</li>
<li> Configured apache, on a Linux Red Hat Private hosting environment</li>
<li> Maintained 24/7 high volume availability demand using open source tools such as Linux, Apache, PHP, and MySQL</li>
<li> I maintained digital marketing task, SEO, SEM, PPC, Emailers, landing pages </li>
<li> Maintained CMS core security updates and module updates</li>
<li> Source code control experience with subversion.</li>
<li> Manage all incoming website requests forms for other company departments and support for all users, driver downloads and product updates and sales.</li>
<li> Rebuilt and migrated company sales portal from sharepoint to drupal</li>

<hr class="divider my-4">
<h4>Apptricity Corporation | Web Developer <br> Irving,Texas | 2008 - 2010</h4>

<li> Developed and built the corporate website into a more stable working website using the DrupalCMS</li>
<li> Setup apache and hosting environment with Linux debian. Maintain virtual domains, website user accounts, MySQL databases, and DNS.</li>
<li> Design and code company sites with the Drupal CMS using CSS, PHP, JavaScript</li>

<hr class="divider my-4">
<h4>SCP Pool Corp | Internet Manager <br> Covington, LA | 2004 - 2008</h4>

<li> Setup apache, mod_perl, php on Linux servers. Maintain virtual domains, user accounts, MySQL</li>
<li> Create google analytics reports of adwords, SEO placement</li>
<li> Setup and maintained multiple domains using Plesk and webmin.</li>
<li>Design and code templates for two migrating CMS , Joomla and Drupal using CSS and PHP, JavaScript, MYSQL, MSSQL, SOAP Web Services and SEO optimization with Google analytics and Ad Words package.</li>
<li> Maintained Google AdWords for swimmingpool.com</li>
</ul>

      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Education:
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        The Art Institute of Dallas<br>
        Dallas, Texas<br>
        A.S. (Multimedia Production)<br>
        2000<br>

        Louisiana Tech University<br>
        Ruston, Louisiana<br>
        B.A.S. (Graphic Design)<br>
        1997<br>

      </div>
    </div>
  </div>
</div>
<br>
<div align="center">
        <div class="row">

    <div class="col-md">
      <a style="margin-bottom:5px;" class="btn btn-secondary btn-xl js-scroll-trigger text-center" href="https://github.com/mrenfro"><i class="fab fa-github"></i>  Visit github</a>
    </div>
    <div class="col-md">
      <a style="margin-bottom:5px;" class="btn btn-secondary btn-xl js-scroll-trigger text-center" href="https://mattrenfro.com/GTmetrix.pdf"><i class="fas fa-poll"></i> site report</a>
    </div>
    </div>
  </div>
    </div>

  </section>


  <hr class="divider my-8">
  <!-- Portfolio Section -->
  <section id="portfolio">
    <h2 class="text-center mt-0">Featured Latest Work</h2>
    <hr class="divider my-4">
    <br>
    <div class="container-fluid p-0">
      <div class="row no-gutters">
    <div class="col-lg-4 col-sm-3">
      <a class="portfolio-box" href="img/ses_desktop.jpg">
        <img class="img-fluid" src="img/ses_desktop_sm2.jpg" alt="">
        <div class="portfolio-box-caption">

          <div class="project-category text-white-50">
            website
          </div>
          <div class="project-name">
            Santanna Energy Service - WordPress Desktop
          </div>
        </div>
      </a>
    </div>
    <div class="col-lg-4 col-sm-3">
      <a class="portfolio-box" href="img/ses_tablet.jpg">
        <img class="img-fluid" src="img/ses_tablet_sm.jpg" alt="">
        <div class="portfolio-box-caption">

          <div class="project-category text-white-50">
            website
          </div>
          <div class="project-name">
            Santanna Energy Service - WordPress Tablet
          </div>
        </div>
      </a>
    </div>
    <div class="col-lg-4 col-sm-6">
      <a class="portfolio-box" href="img/ses_mobile.jpg">
        <img class="img-fluid" src="img/ses_mobile_sm.jpg" alt="">
        <div class="portfolio-box-caption">

          <div class="project-category text-white-50">
            website
          </div>
          <div class="project-name">
            Santanna Energy Service - WordPress mobile
          </div>
        </div>
      </a>
    </div></div></div>
    <br>
<hr class="divider my-4">
    <h2 class="text-center mt-0">Web Portfolio</h2>
    <hr class="divider my-4">
    <br>

    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/1.jpg" alt="">
            <div class="portfolio-box-caption">

              <div class="project-category text-white-50">
                website
              </div>
              <div class="project-name">
                santannaenergyservices.com - WordPress
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/2.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
               website
              </div>
              <div class="project-name">
                Specsoneline.com - WordPress
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                website
              </div>
              <div class="project-name">
                akorbi.com - WordPress
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/4.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                website
              </div>
              <div class="project-name">
                  permission.io - WordPress
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                website
              </div>
              <div class="project-name">
                masergy.com - WordPress
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/6.jpg" alt="">
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">
                website
              </div>
              <div class="project-name">
                swimmingpool.com - WordPress
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
<br>
  </section>
  <br>
<section id="code">
  <hr class="divider my-4">
  <h2 class="text-center mt-0">Code Sample</h2>
  <hr class="divider my-4">
  <!-- Call to Action Section -->
  <section class="page-section bg-dark text-white">
    <div class="container text-center">

      <div class="row">
        <div class="col-lg"><h2 class="text-center mt-0">Get JSON with PHP</h2>
          <code class="text-white">
<p class="text-left mt-0">$curl_handle = curl_init($url);
curl_setopt($curl_handle, CURLOPT_URL,'https://jsonurl');
curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $payload);
curl_setopt($curl_handle, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
$query = curl_exec($curl_handle);
$resultnicor3 = json_decode($query, true);
curl_close($curl_handle);</p>
          </code></div>
          <div class="row">
        <div class="col-lg">
          <h2 class="text-center mt-0">Display JSON with PHP</h2>
          <code class="text-white">
            <br>
            <p class="text-left mt-0">

              print_r( $resultnicor3[model][7]
              ["rateScheduleList"][0]["utility"]);
                echo "<br>";

              print_r( $resultnicor3[model]
              [7]["productTerm"]);
              echo "<br>";
              print_r( $resultnicor3[model]
              [7]["rateScheduleList"][0]["market"]);
              echo"<br>";
              print_r( $resultnicor3[model]
              [7]["rateScheduleList"][0]
              ["rateSegmentList"][0]["rateSegmentDetailList"]
              [0]["chargeType"]);
              echo"<br>";
              echo"&#162;";
              print_r( $resultnicor3[model]
              [7]["rateScheduleList"]
              [0]["rateSegmentList"][0]
              ["rateSegmentDetailList"][0]["rateAmount"]);
                echo "&nbsp;per&nbsp;";
                print_r( $resultnicor3[model]
                [7]["rateScheduleList"]
                [0]["rateSegmentList"][0]
                ["rateSegmentDetailList"][0]["uom"]);
                echo "<br>";
              print_r( $resultnicor3[model]
              [7]["rateScheduleList"]
              [0]["rateSegmentList"][0]
              ["rateSegmentDetailList"][1]["rateCalculator"]);
              echo"<br>";echo"&nbsp;$";
              print_r( $resultnicor3[model]
              [7]["rateScheduleList"]
              [0]["rateSegmentList"][0]
              ["rateSegmentDetailList"][1]["rateAmount"]);
                //at first layer ?>
                <br></p>
          </code></div></div>
              <div class="row">
        <div class="col-lg">
            <h2 class="text-center mt-0">CSS</h2>
            <code class="text-white">
              <br>
              <p class="text-left mt-0">
                #rate-box{
                  padding: 30px;
                  -webkit-box-shadow: 1px 2px 11px -1px rgba(0,0,0,0.75);
                  -moz-box-shadow: 1px 2px 11px -1px rgba(0,0,0,0.75);
                  box-shadow: 1px 2px 11px -1px rgba(0,0,0,0.75);
                  width: 100%;
                  text-align: center;
                }
                .center{
                  position:relative;
                    text-align: center;
                	font-weight:bold;
                	font-size: 16px;
                white-space: nowrap;
                      overflow: hidden;
                text-overflow: ellipsis;
                text-size-adjust: auto;
              }</p>
</code></div></div>
    <div class="row">
<div class="col-lg">
    <h2 class="text-center mt-0">Compare Javascript</h2>
    <code class="text-white">
      <br>
      <p class="text-left mt-0">
        function hideSelected() {
	var oTable = document.getElementById("myTable");
	var oRows = oTable.getElementsByTagName("tr");

	for( var i=0; i < oRows.length; i++ ) {
		var oInputs = oRows[i].getElementsByTagName("input");
		for( var j=0; j < oInputs.length; j++ ) {
			if( oInputs[j].name == "showHide" ) {
				if(!oInputs[j].checked ) {
					oRows[i].style.display = "none";
				}
				break;
			}
		}
	}

}

function showAll() {
	var oTable = document.getElementById("myTable");
	var oRows = oTable.getElementsByTagName("tr");

	for( var i=0; i < oRows.length; i++ ) {
		if( oRows[i].style.display == "none" ) {
			oRows[i].style.display = "";
		}
	}

}</p>
</code>
</div>
</div>
</div>
</div>
<h2 class="text-center">Result </h2>
<div align="center">
<input type="button" value="Compare Selected Plan" onclick="hideSelected();" /> <input type="button" value="Show All" onclick="showAll();" /></div>
<br><br>
<table id="myTable">

	<tr>
	<td >

</td>
	<td>
<div class="row justify-content-md-center">
        <div class="col-md-3">
          <label class="checkbox"><input  type="checkbox" name="showHide" /></label><div align="center">
        </div>
        <div class="col-md-3">
          <div id="rate-box">

          <?php

          echo '<div class="h2">';
          print_r( $resultnicor3[model][7]["rateScheduleList"][0]["utility"]);echo '</div>';
            echo "<br>";
            echo '<div class="center">';
          print_r( $resultnicor3[model][7]["productTerm"]);
          echo "<br>";
          print_r( $resultnicor3[model][7]["rateScheduleList"][0]["market"]);
          echo"<br>";
          print_r( $resultnicor3[model][7]["rateScheduleList"][0]["rateSegmentList"][0]["rateSegmentDetailList"][0]["chargeType"]);
          echo"<br>";
          echo"&#162;";
          print_r( $resultnicor3[model][7]["rateScheduleList"][0]["rateSegmentList"][0]["rateSegmentDetailList"][0]["rateAmount"]);
            echo "&nbsp;per&nbsp;";
            print_r( $resultnicor3[model][7]["rateScheduleList"][0]["rateSegmentList"][0]["rateSegmentDetailList"][0]["uom"]);
            echo "<br>";
          print_r( $resultnicor3[model][7]["rateScheduleList"][0]["rateSegmentList"][0]["rateSegmentDetailList"][1]["rateCalculator"]);
          echo"<br>";echo"&nbsp;$";
          print_r( $resultnicor3[model][7]["rateScheduleList"][0]["rateSegmentList"][0]["rateSegmentDetailList"][1]["rateAmount"]);echo '</div>';
            //at first layer ?>
            <br>
          <a class="btn btn-primary" href="#" role="button">Select Plan</a><a  href="">
          </div>
        </div>

      </div>




  </div> </td>
	</tr>

	<tr>
	<td >

	</td>
	<td><div class="row justify-content-md-center">
      <div class="col-md-3">
        <label class="checkbox"><input  type="checkbox" name="showHide" /></label><div align="center">
      </div>
      <div class="col-md-3">
        <div id="rate-box">

        <?php

        echo '<div class="h2">';
        print_r( $resultnicor6[model][8]["rateScheduleList"][0]["utility"]);echo '</div>';
          echo "<br>";
          echo '<div class="center">';
        print_r( $resultnicor6[model][8]["productTerm"]);
        echo "<br>";
        print_r( $resultnicor6[model][8]["rateScheduleList"][0]["market"]);
        echo"<br>";
        print_r( $resultnicor6[model][8]["rateScheduleList"][0]["rateSegmentList"][0]["rateSegmentDetailList"][0]["chargeType"]);
        echo"<br>";
        echo"&#162;";
        print_r( $resultnicor6[model][8]["rateScheduleList"][0]["rateSegmentList"][0]["rateSegmentDetailList"][0]["rateAmount"]);
          echo "&nbsp;per&nbsp;";
          print_r( $resultnicor6[model][8]["rateScheduleList"][0]["rateSegmentList"][0]["rateSegmentDetailList"][0]["uom"]);
          echo "<br>";
        print_r( $resultnicor6[model][8]["rateScheduleList"][0]["rateSegmentList"][0]["rateSegmentDetailList"][1]["rateCalculator"]);
        echo"<br>";echo"&nbsp;$";
        print_r( $resultnicor6[model][8]["rateScheduleList"][0]["rateSegmentList"][0]["rateSegmentDetailList"][1]["rateAmount"]);echo '</div>';
          //at first layer ?>
          <br>
        <a class="btn btn-primary" href="#" role="button">Select Plan</a><a  href="">
        </div>
      </div>

    </div>




</div> </td>
	</tr>
	<tr>
	<td>

	<td><div class="row justify-content-md-center">
      <div class="col-md-3">
        <label class="checkbox"><input  type="checkbox" name="showHide" /></label><div align="center">
      </div>
      <div class="col-md-3">
        <div id="rate-box">

        <?php

        echo '<div class="h2">';
        print_r( $resultnicor12[model][6]["rateScheduleList"][0]["utility"]);echo '</div>';
          echo "<br>";
          echo '<div class="center">';
        print_r( $resultnicor12[model][6]["productTerm"]);
        echo "<br>";
        print_r( $resultnicor12[model][6]["rateScheduleList"][0]["market"]);
        echo"<br>";
        print_r( $resultnicor12[model][6]["rateScheduleList"][0]["rateSegmentList"][0]["rateSegmentDetailList"][0]["chargeType"]);
        echo"<br>";
        echo"&#162;";
        print_r( $resultnicor12[model][6]["rateScheduleList"][0]["rateSegmentList"][0]["rateSegmentDetailList"][0]["rateAmount"]);
          echo "&nbsp;per&nbsp;";
          print_r( $resultnicor12[model][6]["rateScheduleList"][0]["rateSegmentList"][0]["rateSegmentDetailList"][0]["uom"]);
          echo "<br>";
        print_r( $resultnicor12[model][6]["rateScheduleList"][0]["rateSegmentList"][0]["rateSegmentDetailList"][1]["rateCalculator"]);
        echo"<br>";echo"&nbsp;$";
        print_r( $resultnicor12[model][6]["rateScheduleList"][0]["rateSegmentList"][0]["rateSegmentDetailList"][1]["rateAmount"]);echo '</div>';
          //at first layer ?>
          <br>
        <a class="btn btn-primary" href="#" role="button">Select Plan</a><a  href="">
        </div>
      </div>

    </div>




</div> </td>
	</tr>

</table>
</div></div>

<div align="center">

  </section>
</div>
</section>
  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Contact</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">
 Design and Layout - Development - Website Speed - Responsiveness - UX/UI - SEO Analysis - Marketing Strategy Analysis - E-Commerce, (WordPress, Drupal)</p>
        </div>
      </div>
      <div class="row">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 text-center">

                    <hr class="bg-light">
                      <h5 class="text-center text-success"><?= $result; ?></h5>
                      <form action="" method="post" id="form-box" class="p-2">
                        <div class="form-group input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                          <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                          </div>
                          <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-at"></i></span>
                          </div>
                          <input type="text" name="subject" class="form-control" placeholder="Enter subject" required>
                        </div>
                        <div class="form-group input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-comment-alt"></i></span>
                          </div>
                          <textarea name="msg" id="msg" class="form-control" placeholder="Write your message" cols="30" rows="4" required></textarea>
                        </div>
                        <div class="form-group">
                          <input type="submit" name="submit" id="submit" class="btn btn-primary btn-block" value="Send">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
      </div></div></div></div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">mattrenfro.com</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/creative.min.js"></script>

  <script>
  //Get the button
  var mybutton = document.getElementById("myBtn");

  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
  </script>
</body>

</html>
