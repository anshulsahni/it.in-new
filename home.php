<head>
	<style type="text/css">
		#home_wrapper{		height: 100%;	width:100%;		}
		#home_container
		{
			width: 875px;	min-height:0px;
			margin: 25px auto;
		}
		#home_side_announcement_menu
		{
			float: left;
			width: 100px;	height: 280px;
		}
		.announcement_menu_text
		{
			font-family: announcement_text;
			font-size: 25px;	font-weight: 900;
			position: relative;

			-webkit-transform:rotate(45deg);
			-moz-transform:rotate(45deg);
			-o-transform:rotate(45deg);
			-ms-transform:rotate(45deg);
			transform:rotate(45deg);
		}
		#think{			top:25px;	left: 0px;		}
		#design{		top:70px;	left: 0px;		}
		#present{		top:115px;	left: -15px;	}
		#home_imgs_slide_show
		{
			position: relative;
			width: 750px;	height:280px;
			left: 10px;	top:0px;
			display: inline-block;
		}
		.slide_show_imgs{height: 280px;	width: 750px;display: inline-block; left: 0px; position: absolute;}
		.slide_show_imgs li img{height: 280px;width: 750px;border-radius: 15px;}
		#home_imgs_slide_show ul{list-style-type: none;	display: inline-block; padding: 0px; margin-top: 0px;}
		#home_imgs_slide_show ul li{display: inline-block;}

		#middle_text
		{
			position: relative;
			top:20px;
		}
		.middle_text_components{text-align: center;}
		.middle_text_components span{position: relative;font-family: middle_text_font;font-size: 22px;}
		#together_span
		{
			-moz-animation:marq_together 10s infinite linear;		left: -7%;
			-webkit-animation:marq_together 10s infinite linear;		left: -7%;
			-ms-animation:marq_together 10s infinite linear;		left: -7%;
			-o-animation:marq_together 10s infinite linear;		left: -7%;
			animation:marq_together 10s infinite linear;		left: -7%;
		}
		#towards_span
		{
			-moz-animation:marq_towards 10s infinite linear;	left: 7%;
			-webkit-animation:marq_towards 10s infinite linear;	left: 7%;
			-ms-animation:marq_towards 10s infinite linear;	left: 7%;
			-o-animation:marq_towards 10s infinite linear;	left: 7%;
			animation:marq_towards 10s infinite linear;	left: 7%;
		}

		#home_bottom_text{position: relative;top:35px;}
		.bottom_text_contents
		{
			font-size: 22px;
			margin: 5px	auto;
			text-align: center;
		}
		
		@font-face
		{
			font-family: announcement_text;
			src:url('./fonts/ARIBLK_0.TTF');
		}
		@font-face
		{
			font-family: middle_text_font;
			src:url('./fonts/DS-DIGI.TTF');
		}
		@-moz-keyframes marq_together
		{
			0%{left:-66%;}
			40%{left: -7%;}
			60%{left: -7%;}
			100%{left: 66%;}
		}
		@-moz-keyframes marq_towards
		{
			0%{left: 66%;}
			40%{left: 7%;}
			60%{left: 7%;}
			100%{left: -66%;}

		}
		@-webkit-keyframes marq_together
		{
			0%{left:-66%;}
			40%{left: -7%;}
			60%{left: -7%;}
			100%{left: 66%;}
		}
		@-webkit-keyframes marq_towards
		{
			0%{left:66%;}
			40%{left:7%;}
			60%{left:7%;}
			100%{left:-66%;}
		}
		@-o-keyframes marq_together
		{
			0%{left:-66%;}
			40%{left: -7%;}
			60%{left: -7%;}
			100%{left: 66%;}
		}
		@-o-keyframes marq_towards
		{
			0%{left:66%;}
			40%{left:7%;}
			60%{left:7%;}
			100%{left:-66%;}
		}
		@-ms-keyframes marq_together
		{
			0%{left:-66%;}
			40%{left: -7%;}
			60%{left: -7%;}
			100%{left: 66%;}
		}
		@-ms-keyframes marq_towards
		{
			0%{left:66%;}
			40%{left:7%;}
			60%{left:7%;}
			100%{left:-66%;}
		}
		@keyframes marq_together
		{
			0%{left:-66%;}
			40%{left: -7%;}
			60%{left: -7%;}
			100%{left: 66%;}
		}
		@keyframes marq_towards
		{	
			0%{left:66%;}
			40%{left:7%;}
			60%{left:7%;}
			100%{left:-66%;}
		}
	</style>
</head>
<div id="home_wrapper">
	<div id="home_container">
		<div id="home_containter_top_content">
			<div id="home_side_announcement_menu">	
				<div id="think" class="announcement_menu_text">THINK</div>
				<div id="design" class="announcement_menu_text">DESIGN</div>
				<div id="present" class="announcement_menu_text">PRESENT</div>
			</div>
			<div id="home_imgs_slide_show">
				<ul>
					<div id="img1" class="slide_show_imgs" style="top:0px;">		<li>		<img src="./imgs/home_imgs/1.jpg">		</li>				</div>
					<div id="img2" class="slide_show_imgs" style="top:0px;">		<li>		<img src="./imgs/home_imgs/2.jpg">		</li>				</div>
					<div id="img3" class="slide_show_imgs" style="top:0px;">		<li>		<img src="./imgs/home_imgs/3.jpg">		</li>				</div>
					<div id="img4" class="slide_show_imgs" style="top:0px;">		<li>		<img src="./imgs/home_imgs/4.jpg">		</li>				</div>
					<div id="img5" class="slide_show_imgs" style="top:0px;">		<li>		<img src="./imgs/home_imgs/5.jpg">		</li>				</div>
					<div id="img6" class="slide_show_imgs" style="top:0px;">		<li>		<img src="./imgs/home_imgs/6.jpg">		</li>				</div>
					<div id="img7" class="slide_show_imgs" style="top:0px;">		<li>		<img src="./imgs/home_imgs/7.jpg">		</li>				</div>
					<div id="img8" class="slide_show_imgs" style="top:0px;">		<li>		<img src="./imgs/home_imgs/8.jpg">		</li>				</div>
				</ul>
			</div>
		</div>
		<div id="middle_text">
			<div id="together" class="middle_text_components">	<span id="together_span">	. . .Together With A Vision. . .		</span>		</div>
			<div id="towards" class="middle_text_components">	<span id="towards_span">	. . .Towards Transformation. . .		</span>		</div>
		</div>
		<div id="home_bottom_text">
			<div id="department_text" class="bottom_text_contents">		Department Of Information Technology				</div>
			<div id="faculty" class="bottom_text_contents">				Faculty Of Engineering And Technology				</div>
			<div id="srm" class="bottom_text_contents">					SRM University,Kattankulathur						</div>
		</div>
	</div>

</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.slide_show_imgs').hide();
		$('#img1').show();	
	});
</script>
<script type="text/javascript">
	var home_index=2;
	setInterval(function(){
		$('.slide_show_imgs').fadeOut(900);
		$('#img'+parseInt(home_index)).fadeIn(900);	
		// document.getElementById('home_side_announcement_menu').innerHTML=home_index;
		if (home_index>=8)
			{home_index=1;}
		else
			{home_index++;}
	},5000);
</script>