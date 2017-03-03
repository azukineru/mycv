<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0">
	<meta name="author" content="Faishal Azka Jellyanto | Front-End Web Developer [http://www.faishal-azk.cf]" />
	<meta name="keywords" lang="en" content="Faishal Azka Jellyanto,Front-End Web Developer,Web Designer,CV" />	
	<meta name="description" content="My Curriculum Vitae">
	<title>Faishal Azka J | CV</title>
	
	<link rel="stylesheet" type="text/css" href="css/googleapis-font.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.pagepiling.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/mobile.css" />
	<link rel="stylesheet" type="text/css" href="css/hover.css" />

	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.wheelmenu.js"></script>
	<script type="text/javascript" src="js/jquery.pagepiling.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {

			/*
			* Plugin intialization
			*/
	    	$('#pagepiling').pagepiling({
	    		menu: '#menu',
	    		anchors: ['page1', 'page2', 'page3', 'page4'],
	    		direction: 'horizontal',
			    //sectionsColor: ['green', '#ee005a', '#2C3E50', '#39C'],
			    normalScrollElements: null,
			    afterRender: function(){
			    	$('#pp-nav').addClass('custom');
			    },
			    afterLoad: function(anchorLink, index){
			    	if(index>1){
			    		$('#pp-nav').removeClass('custom');
			    	}else{
			    		$('#pp-nav').addClass('custom');
			    	}
			    }
			});

	    });
    </script>
	<script>
	  	$(document).ready(function(){
			$(".wheel-button").wheelmenu({
		        trigger: "hover",
		        animation: "fade",
		        animationSpeed: "fast"
		    });
		});
	</script>

    <style>


</style>

</head>
<body>
	<div class="logo">
	</div>

	<ul id="menu">
		<a href="#page4"><li data-menuanchor="page4" class="even hvr-sweep-to-top"><span>Contact</span></li></a>
		<a href="#page3"><li data-menuanchor="page3" class="odd hvr-sweep-to-top"><span>Blog</span></li></a>
		<a href="#page2"><li data-menuanchor="page2" class="even hvr-sweep-to-top"><span>Skills and Experience</span></li></a>
		<a href="#page1"><li data-menuanchor="page1" class="active odd hvr-sweep-to-top"><span>About Me</span></li></a>		
	</ul>


	<div id="pagepiling">
	    <div class="section" id="section1">
			<div class="wrapper" id="wrapper">
				<div class="photo">
				</div>
				<div class="col-px-8 left" style="background-color: #fed167;">
					<h2>Faishal Azka J.</h2>
					<h1 class="cd-headline clip is-full-width">						
						<span class="cd-words-wrapper">
							<b class="is-visible">Front-End Web Developer</b>
							<b>Web Designer</b>
							<b>Game Developer</b>
						</span>
					</h1>
				</div>
				<div class="row-md-6 right" style="background-color: #f3f3f3;">
					<div class="inner">
						<h3>Personal Info</h3>						
						<div class="row">					
							<div class="col-md-2 left">
								<p>Full Name :</p>
							</div>
							<div class="col-md-4 left">
								<p>Faishal Azka Jellyanto</p>
							</div>
						</div>
						<div class="row">					
							<div class="col-md-2 left">
								<p>Place & Date of Birth :</p>
							</div>
							<div class="col-md-4 left">
								<p>Blitar, 18/09/1993</p>
							</div>
						</div>
						<div class="row">					
							<div class="col-md-2 left">
								<p>Address :</p>
							</div>
							<div class="col-md-4 left">
								<p>Perum. Wisma Indah Jl.Sadewo G.77, Blitar</p>
							</div>
						</div>
						<div class="row">					
							<div class="col-md-2 left">
								<p>Phone Number :</p>
							</div>
							<div class="col-md-4 left">
								<p>(+62)82333700666</p>
							</div>
						</div>
						<div class="row">					
							<div class="col-md-2 left">
								<p>Email :</p>
							</div>
							<div class="col-md-4 left">
								<p>azukineru@gmail.com</p>
							</div>
						</div>
					</div>
				</div>				
				<div class="col-px-10 left">
					<div class="inner">
						<h4><b>About Me</b></h4>
						<p>Hard-working person on the way to success...</p>	
						<div class="box-sm-3 left">
							<div class="row">
								<div class="col-md-1 left">
									<img src="img/1.ico">
								</div>
								<div class="col-md-5 left" style="background-color:white">
									<center><p><b>Fast Learner</b></p></center>
								</div>
							</div>
							<div class="row">
								<div class="col-md-1 left">
								</div>
								<div class="col-md-5 left">
									<p>Able to adapt and learn new things quickly</p>
								</div>
							</div>
						</div>
						<div class="box-sm-3 left">
							<div class="row">
								<div class="col-md-1 left">
									<img src="img/2.png">
								</div>
								<div class="col-md-5 left" style="background-color:white">
									<center><p><b>Creative</b></p></center>
								</div>
							</div>
							<div class="row">
								<div class="col-md-1 left">
								</div>
								<div class="col-md-5 left">
									<p>Produce something new by using talents and imagination</p>
								</div>
							</div>
						</div>
						<div class="box-sm-3 left">
							<div class="row">
								<div class="col-md-1 left">
									<img src="img/3.png">
								</div>
								<div class="col-md-5 left" style="background-color:white">
									<center><p><b>Punctual</b></p></center>
								</div>
							</div>
							<div class="row">
								<div class="col-md-1 left">
								</div>
								<div class="col-md-5 left">
									<p>Finish project within established time lines</p>
								</div>
							</div>
						</div>
					</div>					
				</div>
			</div>
	    </div>
	    
	    <div class="section" id="section2">
			<div class="wrapper">
				<div class="col-md-1 sec2-auto left" style="background-color: #b1b1b1">
					<div class="inner">
						<h3>Skills & Experience</h3><br>
						<div class="col-md-5 sec2">
						<h4>
							I have great passion for JavaScript, CSS3, elegant and creative design with strong attention to detail.
							I also have interest in other programming language, such as Java, PHP ( with Laravel or CodeIgniter ), and C/C++.
						</h4>						
						</div>
					</div>
				</div>
				<a href="#wheel" class="wheel-button">
					<img src="img/wheel.png" >
				</a>
				<ul id="wheel"  data-angle="E">
			        <li class="item"><a onclick="toggle_visibility('skills');">Skills</a></li>
			        <li class="item"><a onclick="toggle_visibility('experience');" >Experience</a></li>
			        <li class="item"><a onclick="toggle_visibility('project');">Project List</a></li>
			        <li class="item"><a onclick="toggle_visibility('education');">Education</a></li>
      			</ul>
				<div class="col-md-5 sec2 right" style="background-color: #f3f3f3;">
					<div class="col-rd-5 right">
						<div id="skills" class="inner">
							<h3>Skills</h3><br>
							<div class="sec2-img left">
								<div class="row-hg-3">
								</div>
								<div class="row-hg-3" style="border-top:5px solid #ffb70b; border-bottom:5px solid #ffb70b">
									<img src="img/skill.png" style="position:relative; width:100%; height:100%;">
								</div>
								<div class="row-hg-3">
								</div>
							</div>
							<div class="sec2-info right" style="border-top: 5px solid #ffb70b;border-bottom: 5px solid #ffb70b;">
								<div class="sec2-container" style="background-color:green">
									<div>
							      		<h4>HTML4/5, CSS2/3</h4><br>
							      		<ul>
							      			<li>Hand-coded Website templates</li>
							      			<li>CSS3 Animations and Transitions (2D/3D)</li>
							      			<li>Page Speed Optimization</li>
							      			<li>Good understanding of SASS</li>
							      			<li>Good Knowledge of SMACSS</li>
							      			<li>Adobe Photoshop experience</li>
							      		</ul>
							    	</div>
							    	<div style="display:none;">
							     		<h4>JavaScript</h4><br>
							     		<ul>
							     			<li>jQuery</li>
							     			<li>Solid proficiency in JS Effects and Animations</li>
							     			<li>Good Knowledge of Modernizr</li>
							     			<li>Google Maps API</li>
							     		</ul>
							    	</div>
							    	<div style="display:none;">
							      		<h4>Back-End / Software Engineering</h4><br>
							      		<ul>
							      			<li>PHP ( CodeIgniter and Laravel 5 )</li>
							      			<li>Java, C/C++</li>
							      			<li>Node.js</li>
							      			<li>Good knowledge and experience in using Linux</li>
							      		</ul>
							    	</div>
								</div>
								<div class="sec2-skillnav">
									<div class="col-md-0 inline-block left btn sec2-prev">Previous</div>
									<div class="col-md-0 inline-block left"></div>
									<div class="col-md-0 inline-block left"></div>
									<div class="col-md-0 inline-block left btn sec2-next">Next</div>
								</div>
							</div>
						</div>
						<div id="experience" class="inner">
							<h3>Experience</h3><br>
							<div class="sec2-info left">						
								<h4>Intern at PT Telekomunikasi Indonesia</h4>
								<p>July 2015 - August 2015 ( 1 month ) | Surabaya, Indonesia</p>
								<p>Configuring and Managing VPN IP Service, and Creating IOS by using Cisco Router.</p>
							</div>
							<img class="img-skill" src="img/exp.jpg">
						</div>
						<div id="project" class="inner">
							<h3>Project List</h3><br>
							<p>During my college days, I've created and developed many projects. Most of them are still on github, since it's pretty costly if I deploy it on web host</p>
							<table style="width:100%;">
								<tr>
									<td>
										<p>
										Kendo Club Information System<br>
										https://github.com/ardhinata/MPPL_SI_Kendo<br>
										Kendo Club Information System is used to maintain Kendo Club members and manage all
										kind of activities in Kendo Club ITS. This project were made using PHP ( CI )
										</p>
									</td>
									<td>
										<p>
										Secure Chat<br>
										https://github.com/IssenShiro/KIJ/tree/master/Tugas_1_SecureChat<br>
										Dekstop-based application for sending message with AES Encryption and DiffieHelman Scheme in C++ using Qt Framework
										</p>
									</td>
								</tr>
								<tr>
									<td>
										<p>
										Web Based Certificate Authority<br>
										https://github.com/IssenShiro/KIJ/tree/master/Tugas_2_DigitalCertificate<br>
										College project to create Web based Certificate Authority. Made using Nodejs
										</p>
									</td>
									<td>
										<p>
										CodeLoud<br>
										https://github.com/karstenaa/CodeLoud-Frontend<br>
										Cloud Computing Final Project which provides Platform as a Service (PaaS) to maintain, develop, and execute code in git repository
										</p>
									</td>
								</tr>
								<tr>
									<td>
										<p>
										Last Man Standing<br>
										https://www.youtube.com/watch?v=gDAVWtUitlY<br>
										Final Project of Game Development subject. It is a game about shooting zombies with various gameplay&features. Made using Unity 3D
										</p>
									</td>
									<td>
										<p>
										Mine Meander<br>
										https://github.com/azukineru/MM-Android<br>
										https://play.google.com/store/apps/details?id=com.minemeander<br>
										Undergraduate theses project. It is 2D Platformer Game with Dynamic World Generator feature. Made using Java/LibGDX
										</p>
									</td>
								</tr>
							</table>
						</div>
						<div id="education" class="inner">
							<h3>Education</h3>
							<div class="col-px-4 left"><div class="circle"><p>SMA Negeri 1 Blitar<br>2009-2012</p></div></div>
							<div class="col-px-4 left"><div class="line"></div></div>
							<div class="col-px-4 left">
								<div class="circle"><p>Teknik Informatika<br>ITS Surabaya<br>2012-2016</p></div>
							</div>
							<div class="col-px-4 left"><div class="rightcurve-top-right"></div></div>
							<div class="col-px-4 left"><div class="line"></div></div>
							<div class="col-px-4 left"><div class="rightcurve-bottom-left"></div></div>
							<div class="col-px-4 left">
								<div class="circle"><p>SDI Kardina Massa Blitar<br>2000-2006</p></div>
							</div>
							<div class="col-px-4 left"><div class="line"></div></div>
							<div class="col-px-4 left">
								<div class="circle"><p>SMP Negeri 1 Blitar<br>2006-2009</p></div>
							</div>
						</div>
					</div>
				</div>
			</div>
	    </div>

	    <div class="section" id="section3">
	    	<div class="wrapper">
				<div class="inner">
					<div class="col-md-8">
						<h3 style="text-align:center">My Blog</h3>
						<p style="text-align:center">
							I will post some article here when I have free time. You can check list of all my post here: 
							<a href="http://www.faishal-azk.cf/blog">www.faishal-azk.cf/blog</a>
						</p>
					</div>
					<figure class="box-sm-1 block left">
						<div class="img-wrapper">
							<img src="img/bg2.jpg">
						</div>
						<div class="post-meta">
							<span>By Admin, 1 March 2017</span>
						</div>
						<div class="post-title">
							<span>My Fifth Post on My Blog</span>
						</div>
					</figure>
					<figure class="box-sm-1 block left">
						<div class="img-wrapper">
							<img src="img/bg2.jpg">
						</div>
						<div class="post-meta">
							<span>By Admin, 28 February 2017</span>
						</div>
						<div class="post-title">
							<span>My Fourth Post on My Blog</span>
						</div>
					</figure>
					<figure class="box-sm-1 block left">
						<div class="img-wrapper">
							<img src="img/bg2.jpg">
						</div>
						<div class="post-meta">
							<span>By Admin, 27 February 2017</span>
						</div>
						<div class="post-title">
							<span>My Third Post on My Blog</span>
						</div>
					</figure>
					<figure class="box-sm-1 block left">
						<div class="img-wrapper">
							<img src="img/bg2.jpg">
						</div>
						<div class="post-meta">
							<span>By Admin, 26 February 2017</span>
						</div>
						<div class="post-title">
							<span>My Second Post on My Blog</span>
						</div>
					</figure>
					<figure class="box-sm-1 block left">
						<div class="img-wrapper">
							<img src="img/bg2.jpg">
						</div>
						<div class="post-meta">
							<span>By Admin, 25 February 2017</span>
						</div>
						<div class="post-title">
							<span>My First Post on My Blog</span>
						</div>
					</figure>
				</div>
			</div>
	    </div>

	    <div class="section" id="section4">
	    	<div class="wrapper">
				<div class="col-md-2 left sec4-column" style="background-color:#b1b1b1">
					<div class="inner">
						<h3>Address & Phone</h3>
						<p>
						Perumahan Wisma Indah Jl.Sadewo G.77<br>
						Kel. Kepanjenlor, Kec. Kepanjen Kidul, Kota Blitar<br>
						Phone : (+62)82333700666<br>
						Email : azukineru@gmail.com
						</p>
						<div class="col-md-1 left sec4align1">
							<img src="img/fb-icon.jpg">
							<span>Facebook</span>
						</div>
						<div class="col-md-5 left sec4align2">
							<img src="img/fb-icon.jpg">
							<a href="https://www.facebook.com/AnimaxVB" target="_blank"><span>https://www.facebook.com/AnimaxVB</span></a>
						</div><br>
						<div class="col-md-1 left sec4align1">
							<img src="img/gp-icon.jpg">
							<span>Google+</span>
						</div>
						<div class="col-md-5 left sec4align2">
							<img src="img/fb-icon.jpg">
							<a href="https://plus.google.com/u/0/+FaishalAzka" target="_blank"><span>https://plus.google.com/u/0/+FaishalAzka</span></a>
						</div>
						<div class="col-md-1 left sec4align1">
							<img src="img/li-icon.jpg">
							<span>LinkedIn</span>
						</div>
						<div class="col-md-5 left sec4align2">
							<img src="img/li-icon.jpg">
							<a href="https://www.linkedin.com/in/faishal-azka/" target="_blank"><span>https://www.linkedin.com/in/faishal-azka/</span></a>
						</div>
						<div class="col-md-1 left sec4align1">
							<img src="img/github-icon.jpg">
							<span>Github</span>
						</div>
						<div class="col-md-5 left sec4align2">
							<img src="img/github-icon.jpg">
							<a href="https://github.com/azukineru" target="_blank"><span>https://github.com/azukineru</span></a>
						</div>
					</div>
				</div>
				<div class="col-md-4 right sec4-column" style="background-color:#f3f3f3">
					<div class="inner">
						<h3>Contact me immediately</h3>
						<span>Do not hesitate to contact me whenever you want</span>
						<br>
						<br>
						<form>
							<div class="col-md-2 left">
								<br>
								<span>Name</span>
								<br>
								<input class="input-text" type="text" name="name" required/>
								<br>
								<span>Email</span>
								<br>
								<input class="input-text" type="email" name="email" required/>
								<br>
								<span>Subject</span>
								<br>
								<input class="input-text" type="text"/>
							</div>
							<div class="col-md-4 right">								
								<br>
								<span>Message</span>
								<br>
								<textarea class="input-area" cols="40" rows="5" name="message" required></textarea>
								<button type="submit" class="btn">SEND</button>
							</div>							
						</form>
					</div>
				</div>
			</div>
	    </div>
	</div>

	<div class="footer" id="footer">
		<div class="col-md-1 left inline-block">
			<p>2017 - Designed and Developed by Faishal Azka J.</p>
		</div>
		<div class="col-md-1 left inline-block">
			<img src="img/logos.png">
		</div>
		<div class="col-md-1 left inline-block">
			<div class="inline-block"><p>Follow Me :&nbsp</p></div>
			<div class="icon fb-icon"></div>
			<div class="icon twitter-icon"></div>
			<div class="icon gp-icon"></div>
			<div class="icon li-icon"></div>
			<div class="icon github-icon"></div>
			
		</div>
	</div>


	<script type="text/javascript" src="js/skills_animation.js"></script>
	<script type="text/javascript" src="js/headline_animation.js"></script>

</body>
</html>
