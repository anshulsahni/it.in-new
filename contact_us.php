<head>
<script type="text/javascript" src="./jquery.js"></script>
	<style type="text/css">
		#contact_wrapper
		{
			height: 100%;	width:	100%;
		}
		#contact_content
		{
			margin: 50px auto;
			width: 900px;	height: 250px;
			background-color: rgba(19,19,19,0.5);
			border-width: 3px 0px 3px 0px;	border-style: solid;	border-color: #ffffff;
		}
		.contact_head_elements
		{
			position: relative;
			top:28px;	margin-left: auto;	margin-right: auto;
			width: 850px;
		}
		.contact_head_elements a
		{
			position: relative;
			top:-40px;	
			text-decoration: none;
			color: #ffffff;
		}
		.contact_elements_span
		{
			background-color: rgba(0,0,0,0.5);
			margin-top: 5px;
		}
		.contact_numbers_elements
		{		
			display: inline-block;
			padding: 0px 80px;	
		}
		.dp_contact
		{	margin-right: auto;	margin-left: auto;	}
		.contact_span
		{	margin-right: auto;	margin-left: auto	}
		.mode_elements
		{
			display: inline-block;
			list-style-type: none;
		}
		.mode_elements li{padding: 0px 65px; cursor: default;}
		#mode_list ul{margin-top: -50px;}
		.mode_elements:hover
		{	background-color: #ffffff;}
		.mode_elements li:hover{color: #000000;}
		.contact_mode_active{background-color: #ffffff;color: #000000;}
	</style>
</head>

<div id="contact_wrapper">
	<div id="contact_content">
		<div id="facebook_contact" class="contact_head_elements">
			<div style="margin-right:auto; margin-left:auto; width:320px;"><img src="./imgs/facebook_contact.png">
			<a href="https://www.facebook.com/itassociation.srm" target="_blank">facebook.com/itassociation.srm</a></div>
			<span class="contact_elements_span">Like us on facebook for getting latest technological updates and also for knowing the development that are happening around us in the world in the field of Information Technology and its inplementation in day-to-day life of a different sections of the society.</span>
		</div>

		<div id="twitter_contact" class="contact_head_elements">
			<div style="margin-right:auto; margin-left:auto; width:300px;"><img src="./imgs/twitter_contact.png">
			<a href="https://twitter.com/it_association" target="_blank">twitter.com/it_association</a></div>
			<span class="contact_elements_span">Follow us on twitter, for being the most updated person among your peers in terms of technology that is changing with pace of the light, as the technology moves constantly forward with a very high speed, so we keek you updating about the latest development in the field of Information Technology through world's most famous microblogging website twitter</span>
		</div>

		<div id="numbers_contact" class="contact_head_elements">
			<div id="vp" class="contact_numbers_elements">
				<img src="./imgs/vp_contact.jpg"class="dp_contact"><br><br>
				<span id="vp_desig" class="contact_span">Vice President</span><br>
				<span id="vp_name" class="contact_span">Vineet Sharma</span><br>
				<img src="./imgs/mobile_icon.png" class="mob_png"><span id="vp_contact" class="contact_span">9025624230</span><br><br><br>
				<a href="https://www.facebook.com/vineet.sharma.9400?fref=ts" target="_blank" style="height:32px; width:32px;"><img src="./imgs/facebook_contact_icon.png"></a>
			</div>

			<div id="sec" class="contact_numbers_elements">
				<img src="./imgs/sec_contact.jpg" class="dp_contact"><br><br>
				<span id="sec_desig" class="contact_span">Secretary</span><br>
				<span id="sec_name" class="contact_span">Suraj Thakur</span><br>
				<img src="./imgs/mobile_icon.png"class="mob_png"><span id="sec_contact" class="contact_span">9940522928</span><br><br><br>
				<a href="https://www.facebook.com/thinkpositiveskt?fref=ts" target="_blank" style="height:32px; width:32px;"><img src="./imgs/facebook_contact_icon.png"></a>
			</div>

			<div id="joint_sec" class="contact_numbers_elements">
				<img src="./imgs/joint_sec_contact.jpg" class="dp_contact"><br><br>
				<span id="joint_sec_desig" class="contact_span">Joint Secretary</span><br>
				<span id="join_sec_name" class="contact_span">Richa Bala</span><br>
				<img src="./imgs/mobile_icon.png" class="mobile_png"><span id="joint_sec_contact">9176168028</span><br><br><br>
				<a href="https://www.facebook.com/richabala26?fref=ts" target="_blank" style="height:32px; width:32px;"><img src="./imgs/facebook_contact_icon.png"></a>
			</div>
		</div>

		<div id="email_contact" class="contact_head_elements">
			<div style="margin-right:auto; margin-left:auto; width:300px;"><img src="./imgs/email_contact.png">
			<a href="">clubteamit@gmail.com</a></div>
			<span class="contact_elements_span">You can also contact us by sending your queries on following mail address</span>
		</div>
	</div>

	<div id="contact_mode_choose">
		<div id="mode_list">
			<ul>
				<div class="mode_elements" id="mode_numbers">	<li>	Contact Number 		</li>	</div>
				<div class="mode_elements" id="mode_email">		<li>	E-Mail				</li>	</div>
				<div class="mode_elements" id="mode_facebook">	<li>	Facebook 			</li>	</div>
				<div class="mode_elements" id="mode_twitter">	<li>	Twitter 			</li>	</div>
			</ul>
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			$('.contact_head_elements').hide();
			$('#numbers_contact').fadeIn();
		});
		$('.mode_elements').click(function(){
			$('.contact_head_elements').hide();
			$('.mode_elements').removeClass("contact_mode_active");
			$(this).addClass("contact_mode_active");
			contact_tabId=$(this).attr('id');
			$(contact_tabId+' li').addClass("contact_mode_active");
			contact_tabId=$(this).attr('id').substring(5);
			$('#'+contact_tabId+'_contact').fadeIn(400);
		});
		</script>
</div>