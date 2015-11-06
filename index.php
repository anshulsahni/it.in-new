<html>
	<head>
		<title>IT Association</title>
		<link rel="shortcut icon" href="./imgs/it_logo_favicon.png">
		<script type="text/javascript" src="./jquery.js"></script>
		<style type="text/css">
			*	{font-family: calibri;}
			body
			{
				background:url(./imgs/background.jpg) repeat-y scroll center / 100% 100%; background-attachment: fixed;
			 	padding: 0px;
			}
			div{padding: 0px;}
			#wrapper
			{
				position: static;
				height: 100%;
				width: 100%;
				top: 0px;	left: 0px;
				display: inline-block;
			}
			#navigation_bar_container
			{
				position: relative; 
				top:80px; left: 0px; 
				width: 99%; height: 30px;
			}
			#navigation_bar
			{	
				margin: 0px auto;
				width: 900px;
				height: auto;	
			}
			#navigation_div{display: inline;position: relative;}
			#navigation_bar ul li {list-style-type: none; display: inline; padding: 5px 33px; cursor: pointer;}
			.other:hover{color: #000000;	background-color: #ffffff;	border-radius: 7px;	}
			.other{color: #ffffff;}
			.navigation_class
			{
				display: inline;
				position: relative; top:0px;
				cursor: pointer;	
			}
			#navigation_home{left: 0px;}
			#navigation_about_us{left: 128.5px;}
			#navigation_events{left:257px;}
			#navigation_team{left:385.5px;}
			#navigation_gallery{left:514px;}
			#navigation_feedback{left:642.5px;}
			#navigation_contact_us{left: 771px;}
			#container
			{
				position: relative;
				display: inline-block;
				top: 75px;	left: 0px;
				height: 550px;	width: 99%;	
			}
			#content
			{
				margin: 0px auto;
				background-color: rgba(0,0,0,0.8);
				width: 900px; min-height: 90%;
				overflow-x:hidden;
				color: #ffffff;
				padding-bottom: 30px;
			}
			#round_rotation
			{
				margin-top: 0px;	margin-right: auto;	margin-left: auto;
				background-color: rgba(0,0,0,0.8);
				width: 900px; min-height: 94%;
			}
			#round_center
			{
				position: relative;
				height: 150px;	width: 150px;
				top: 180px; left: 400px;
			}
			.nav_link
			{
				position: relative;
				height: 75px;	width: 75px;
				display: inline;
				cursor: pointer;
				opacity:0.7;				
			}
			.nav_link:hover{opacity: 1;}
			.nav_link li img{-moz-transition:all 0.2s ease-in-out; -webkit-transition:all 0.2s ease-in-out; -o-transition:all 0.2s ease-in-out;-ms-transition:all 0.2s ease-in-out;transition:all 0.2s ease-in-out;}
			.nav_link li img:hover{-moz-transform:scale(1.2,1.2);-webkit-transform:scale(1.2,1.2);-o-transform:scale(1.2,1.2);-ms-transform:scale(1.2,1.2);transform:scale(1.2,1.2);}
			#blog img{-moz-transition:all 0.2s ease-in-out; -webkit-transition:all 0.2s ease-in-out; -o-transition:all 0.2s ease-in-out;-ms-transition:all 0.2s ease-in-out;transition:all 0.2s ease-in-out; 	opacity: 0.7;}
			#blog img:hover{-moz-transform:scale(1.2,1.2);-webkit-transform:scale(1.2,1.2);-o-transform:scale(1.2,1.2);-ms-transform:scale(1.2,1.2);transform:scale(1.2,1.2);		opacity:1.0; }
			#home		{	top: -123px;	left: 395px;	}
			#about_us	{ top:45px;	left: 110px;	}
			#events		{ top:-65px;	left: 405px;	}
			#team		{ top:-65px;	left: -4px;}
			#gallery	{top:45px; left: 275px;}
			#feedback	{ top:155px; left: -162px;}
			#contact_us	{	top:155px; 	left: 91px;}
			#blog	
			{
				position: relative;
				height: 75px;	width: 75px;
				display: inline;
				cursor: pointer;
				top:200px; left: -155px;
			}

			#round_circle ul li
			{	display: inline;	}
			#round_circle img {height: 75px; width:75px;}
			.current
			{
				color: #000000;
				background-color: #ffffff;
				border-radius: 7px;
			}
		</style>
		<style type="text/css">
			#preloader{
			background:url('./imgs/preloader.gif') no-repeat center center / 100% 100% transparent;
			height: 50px;	width: 50px;
			display: none;
			position: relative;
			top:-242px;	left: 660px;

		}
		</style>
		
	</head>
	<body>
		<div id="wrapper">
			<?php require("header.inc")	?>			
			<div id="navigation_bar_container">
			<div id="navigation_bar">
				<ul id="navigation_ul">
					<li id="navigation_bar_home" class="li_home other navigation_menu_item">
						<span  class="navigation_class">Home</span>
					</li>
					<li id="navigation_bar_about_us" class="li_about_us other navigation_menu_item">
						<span  class="navigation_class">About Us</span>
					</li>
					<li id="navigation_bar_events" class="li_events other navigation_menu_item">
						<span  class="navigation_class">Events</span>
					</li>
					<li id="navigation_bar_team" class="li_team other navigation_menu_item">
						<span class="navigation_class">Team</span>
					</li>
					<li id="navigation_bar_gallery" class="li_gallery other navigation_menu_item">
						<span class="navigation_class">Gallery</span>
					</li>
					<li id="navigation_bar_feedback" class="li_feedback other navigation_menu_item">
						<span class="navigation_class">Feedback</span>
					</li>
					<li id="navigation_bar_contact_us" class="li_contact_us other navigation_menu_item">
						<span class="navigation_class">Contact Us</span>
					</li>
				</ul>
			</div>
			</div>
			<div id="container">
				<div id="content">
				</div>
				<div id="round_rotation">				
					<div id="round_center">
						<img src="./imgs/it_logo.png" height=150px width=150px>
					</div>
					<div id="round_circle">
						<ul id="nav_ul">
							<div id="home" class="nav_link"> 
								<li> <img src="./imgs/home.png"> 	</li> 
							</div>
							<div id="about_us" class="nav_link"> 
								<li><img src="./imgs/about_us.png"> 	</li>
							</div>
							<div id="events" class="nav_link"> 
								<li> <img src="./imgs/events.png"> 	</li>
							</div>
							<div id="team" class="nav_link">
								<li> <img src="./imgs/team.png"> 	</li>
							</div>
							<div id="gallery" class="nav_link">
								<li> <img src="./imgs/gallery.png"> </li>
							</div>
							<div id="feedback" class="nav_link">
								<li> <img src="./imgs/feedback.png"> </li>
							</div>
							<div id="contact_us" class="nav_link">
								<li> <img src="./imgs/contact_us.png"> </li>
							</div>
							<div id="blog">
								<li> <img src="./imgs/blog.png">	</li>
							</div>
						</ul>
					</div>				
				</div>
			</div>
			<?php require("footer.inc");	?>
			<div id="preloader"></div>
		</div>
	</body>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#navigation_bar_container').hide();
			$('#content').hide();
		});
	</script>
	<script type="text/javascript">
		function load_content(taburl)
		{
			$("#preloader").show();
			jQuery.ajax({
			url: taburl,
			cache: false,
			success: function(message) {
				jQuery("#content").empty().append(message);
				$("#preloader").hide();}
		});}
	</script>
	<script type="text/javascript">
		var currentTab;
		$('.nav_link').click(function(){
			tabId=$(this).attr('id');
			$('#round_rotation').fadeOut('fast');
			load_content('./'+tabId+'.php');
			$('#content').fadeIn('slow');
			$('#navigation_bar_container').fadeIn('slow');
			$('.li_'+tabId).removeClass("other");
			$('.li_'+tabId).addClass("current");
			currentTab=tabId;
		});
		$('.navigation_menu_item').click(function(){
			temptabId=$(this).attr('id');
			tabId=temptabId.substring(15);
			$('.li_'+currentTab).removeClass("current");
			$('.li_'+currentTab).addClass("other");
                        jQuery("#content").empty();
			load_content('./'+tabId+'.php');
			$('#content').fadeIn('slow');
			$('.li_'+tabId).removeClass("other");
			$('.li_'+tabId).addClass("current");
			currentTab=tabId;
		});
		$('#blog').click(function(){
			window.location.href="http://www.itassociation.in/blog";
		});
	</script>
</html>
			