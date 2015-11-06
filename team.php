<head>	
	<script type="text/javascript">	
		$('.team_imgs').mouseenter(function(){
			$('.text_description').addClass("text_description_anim");
		});

		$('.team_imgs').mouseleave(function(){
			$('.text_description').removeClass("text_description_anim");
		});
	</script>
<style type="text/css">	
	#team_wrapper
	{
		position: relative;
		height: 100%;width: 100%;
	}
	#show_div
	{
		margin: 0px auto;
		height: 70%;	width: 380px;		
	}
	#show_div ul li{list-style-type: none; display: inline;}
	.text_description
	{
		background-color: #636363;
		padding-left: 5px;
		text-align: center;
		opacity: 0.8;
		-webkit-transition:-webkit-transform 0.2s ease-in-out ;
		-moz-transition:-moz-transform 0.2s ease-in-out;
		-o-transition:-o-transform 0.2s ease-in-out;
		-ms-transition:-ms-transform 0.2s ease-in-out;
		transition:transform 0.2s ease-in-out;
	}
	.team_imgs
	{
		width:300px; height: 300px;
		overflow: hidden;	
	}
	.text_description_anim
	{
		-webkit-transform:translate(0,-105%);
		-moz-transform:translate(0,-105%);
		-o-transform:translate(0,-105%);
		-ms-transform:translate(0,-105%);
		transform:translate(0,-105%);
	}
	#thumb_strip_wrapper
	{
		position: relative;
		width:1805px;	height: 125px;
		top:0px;	left:-270px;
	}
	#thumb_strip
	{
		position: relative;
		-webkit-transition:all 0.5s ease-in-out;
		-moz-transition:all 0.5s ease-in-out;
		-o-transition:all 0.5s ease-in-out;
		-ms-transition:all 0.5s ease-in-out;
		transition:all 0.5s ease-in-out;
	}
	#thumb_strip ul li {list-style-type: none; display: inline; position: relative;}
	.thumbs{display: inline; position: relative;}
	.tumb_imgs
	{position: relative;}
	.side_buttons
	{
		position: absolute;
		top:0px;	
		cursor: default;	
		padding: 50px 3px 54px 3px;
		color: #CCCCCC;
		/*font-weight: 800;*/
		background-color: #131313;
		vertical-align: middle;
	}
	.side_buttons:hover
	{
		background: -moz-linear-gradient(left,#131313 0%,#818f96 100%);
		background: -webkit-linear-gradient(left,#131313 0%,#818f96 100%);
		background: -o-linear-gradient(left,#131313 0%,#818f96 100%);
		background: -ms-linear-gradient(left,#131313 0%,#818f96 100%);
		background: linear-gradient(left,#131313 0%,#818f96 100%);
		color: #000000;
	}
	#thumb_prev
	{
		left: 10px;
		border-radius: 7px 0px 0px 7px;
	}
	#thumb_next
	{
		left: 894px;
		border-radius: 0px 7px 7px 0px;
	}
	.prev_function
	{
		-webkit-transform:translate(-51%,0);
		-moz-transform:translate(-51%,0);
		-o-transform:translate(-51%,0);
		-ms-transform:translate(-51%,0);
		transform:translate(-51%,0);
	}
	#left_side_menu
	{
		position: relative;
		top:66px;	left: -10px;
	}
	.team_menu_list li{display: inline;list-style-type: none;	cursor: default;}
	#left_side_menu ul{display: inline; cursor: default;}
	.team_menu_list
	{
		display: inline;
		padding-left: 28px; padding-right: 28px;
		cursor: default;
	}
	.team_menu_list:hover{background-color: #ffffff;	color: #000000;}
</style>
<style type="text/css">
	#patrons_container
	{
		position: relative;
		width: 750px;
		margin: 10px auto;
		height: 380px;
	}
	.patrons_elements
	{
		display: inline-block;
		width: 350px;
	}
	.patrons_img_div
	{
		margin: 0px auto;
		width: 170px;	height: 170px;
		overflow: hidden;
	}
	.patrons_text_description
	{
		
		background-color: #636363;
		padding-left: 3px;
		text-align: center;
		opacity: 0.8;
		-webkit-transition:-webkit-transform 0.2s ease-in-out ;
		-moz-transition:-moz-transform 0.2s ease-in-out;
		-o-transition:-o-transform 0.2s ease-in-out;
		-ms-transition:-ms-transform 0.2s ease-in-out;
		transition:transform 0.2s ease-in-out;
	}
	.patrons_message
	{
		width: 320px;
		margin: 10px auto;
	}
	#president
	{		top:-382px;	left: 350px;	}
	.team_menu_active{background-color: #ffffff; color: #000000;}
	.patrons_text_description_anim
	{
		-webkit-transform:translate(0,-105%);
		-moz-transform:translate(0,-105%);
		-o-transform:translate(0,-105%);
		-ms-transform:translate(0,-105%);
		transform:translate(0,-105%);
	}
</style>
</head>
<div id="team_wrapper">	
		<div id="team_containter">
		<div id="team_li">
		<div id="show_div">
			
			<ul id="team_main_page_ul">
				<div id="vineet" class="team_imgs">
					<li>	
						<img src="./imgs/team/vineet.jpg" height=auto width=auto />
						<div class="text_description">
							<span class="team_member_name">Vineet Sharma</span><br><span class="designation">Vice President</span><br><span class="team_member_contact">9025624230</span><br><span class="team_member_email">vineetsharma.slg.1990@gmail.com</span>
						</div>
					</li>
				</div>
				<div id="suraj" class="team_imgs">
					<li>	
							<img src="./imgs/team/suraj.jpg" height=auto width=auto />	
							<div class="text_description">
								<span class="team_member_name">Suraj Thakur</span><br><span class="designation">Secretary</span><br><span class="team_member_contact">9940522928</span><br><span class="team_member_email">thinkpositiveskt@gmail.com</span>
							</div>								
					</li>
				</div>
				<div id="richa" class="team_imgs">
					<li>	
						<img src="./imgs/team/richa.jpg" height=auto width=auto />
						<div class="text_description">
							<span class="team_member_name">Richa Bala</span><br><span class="designation">Joint Secretary</span><br><span class="team_member_contact">9176168028</span><br><span class="team_member_email">richa2607@gmail.com</span>
						</div>
					</li>
				</div>
				<div id="dhiraj" class="team_imgs">
					<li>	
						<img src="./imgs/team/dhiraj.jpg" height=auo width=auto />
						<div class="text_description">
							<span class="team_member_name">Dhiraj Kumar</span><br><span class="designation">Treasurer</span><br><span class="team_member_contact">9790777962</span><br><span class="team_member_email">musicfreakdhiraj@gmail.com</span>
						</div>
					</li>
				</div>
				<div id="chirag" class="team_imgs">
					<li>	
						<img src="./imgs/team/chirag.jpg" height=auto width=auto />	
						<div class="text_description">
						<span class="team_member_name">Chirag Mehta</span><br><span class="designation">Non Technical Oraganizer</span><br><span calss="team_member_contact">9677208061</span><br><span class="team_member_email">chiragmehtaz@gmail.com</span>
					</div>
					</li>
				</div>
				<div id="palash" class="team_imgs">
					<li>	
						<img src="./imgs/team/palash.jpg" height=auto width=auto />
						<div class="text_description">
							<span class="team_member_name">Palash Garg</span><br><span class="designation">Technical Organizer</span><br><span class="team_member_contact">9003264323</span><br><span class="team_member_email">prgarg@gmail.com</span>
						</div>
					</li>
				</div>
				<div id="tushar" class="team_imgs">
					<li>	
						<img src="./imgs/team/tushar.jpg" height=auto width=auto />	
						<div class="text_description">
							<span class="team_member_name">Tushar Garg</span><br><span class="designation">Technical Organizer</span><br><span class="team_member_contact">8939167165</span><br><span class="team_member_email">tusharrgarg93@gmail.com</span>
						</div>
					</li>
				</div>
				<div id="rajni" class="team_imgs">
					<li>	
						<img src="./imgs/team/rajni.jpg" height=auto width=auto />
						<div class="text_description">
							<span class="team_member_name">Rajni Priya</span><br><span class="designation">Public Relations Organizer</span><br><span class="team_member_contact">8056266776</span><br><span class="team_member_email">yerramsettyarajnipriya@gmail.com</span>
						</div>
					</li>
				</div>
				<div id="ishita" class="team_imgs">
					<li>	
						<img src="./imgs/team/ishita.jpg" height=auto width=auto />	
						<div class="text_description">
							<span class="team_member_name">Ishita Singh</span><br><span class="designation">Arts  Creative Organizer</span><br><span class="team_member_contact">9962618021</span><br><span class="team_member_email">ishitageeta@gmail.com</span>
						</div>
					</li>
				</div>
				<div id="shailabh" class="team_imgs">
					<li>	
						<img src="./imgs/team/shailabh.jpg" height=auto width=auto />	
						<div class="text_description">
							<span class="team_member_name">Shailabh Shailesh</span><br><span class="designation">Events  Logistics Organizer</span><br><span class="team_member_contact">9790842813</span><br><span class="team_member_email">shailabh.shailesh@gmail.com</span>
						</div>
					</li>
				</div>
				<div id="aakash" class="team_imgs">
					<li>	
						<img src="./imgs/team/aakash.jpg" height=auto width=auto />
						<div class="text_description">
							<span class="team_member_name">Aakash Saxena</span><br><span class="desgination">Publicity Organizer</span><br><span class="team_member_contact">9790878816</span><br><span class="team_member_email">aaakashsaxena@gmail.com</span>
						</div>
					</li>
				</div>
			</ul>

			<div id="thumb_strip_wrapper">
				<div id="thumb_strip">
					<ul id="thumb_strip_ul">
						<div id="thumb_vineet" class="thumbs">
							<li><img src="./imgs/team/vineet_thumb.jpg" class="thumb_imgs" /> </li>
						</div>
						&nbsp;&nbsp;
						<div id="thumb_suraj" class="thumbs">
							<li > <img src="./imgs/team/suraj_thumb.jpg" class="thumb_imgs" />  </li>
						</div>
						&nbsp;&nbsp;
						<div id="thumb_richa" class="thumbs">
							<li> <img src="./imgs/team/richa_thumb.jpg" class="thumb_imgs"> </li>
						</div>
						&nbsp;&nbsp;
						<div id="thumb_dhiraj" class="thumbs">
							<li> <img src="./imgs/team/dhiraj_thumb.jpg" class="thumb_imgs"> </li>
						</div>
						&nbsp;&nbsp;
						<div id="thumb_chirag" class="thumbs">
							<li> <img src="./imgs/team/chirag_thumb.jpg" class="thumb_imgs"> </li>
						</div>
						&nbsp;&nbsp;
						<div id="thumb_palash" class="thumbs">
							<li> <img src="./imgs/team/palash_thumb.jpg" class="thumb_imgs"> </li>
						</div>

						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

						<div id="thumb_tushar" class="thumbs">
							<li> <img src="./imgs/team/tushar_thumb.jpg" class="thumb_imgs"> </li>
						</div>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<div id="thumb_rajni" class="thumbs">
							<li> <img src="./imgs/team/rajni_thumb.jpg" class="thumb_imgs"> </li>
						</div>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<div id="thumb_ishita" class="thumbs">
							<li> <img src="./imgs/team/ishita_thumb.jpg" class="thumb_imgs"> </li>
						</div>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<div id="thumb_shailabh" class="thumbs">
							<li> <img src="./imgs/team/shailabh_thumb.jpg" class="thumb_imgs"> </li>
						</div>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<div id="thumb_aakash" class="thumbs">
							<li> <img src="./imgs/team/aakash_thumb.jpg" class="thumb_imgs"> </li>
						</div>
					</ul>

				</div>

				<div id="thumb_next" class="side_buttons">&gt;</div>
				<div id="thumb_prev" class="side_buttons">&lt;</div>
		</div>		
		</div>
		</div>
		<div id="patron_li">
			
			<div id="patrons_container">
				<ul style="display:inline-flex;">
					<li style="display:inline; list-style-type:none;"><div id="hod" class="patrons_elements">
						<div id="hod_img_div" class="patrons_img_div">
							<img src="./imgs/patrons/hod.jpg" height=170px width=170px>
							<div class="patrons_text_description"><span>Prof. Rajendran.S<br>IT-HOD</span>	</div>
						</div>
						<div id="hod_message" class="patrons_message">
							I am glad to see that the students of our department had come up with an idea of association and were successful. The work the committee has done so far is impeccable....I am sure that the committee continues to be devoted towards their goals and aspirations. I appreciate all the students and faculty associated with this self inspired committee and wish them all the best for their future endeavours.							
						</div>
					</div></li>
					<li style="display:inline; list-style-type:none;"><div id="president" class="patrons_elements">
						<div id="president_img_div" class="patrons_img_div">
							<img src="./imgs/patrons/president.jpg" height=170px width=170px>
							<div class="patrons_text_description"><span></span>Mrs. K.Nimala<br>President-IT Association</span></div>
						</div>
						<div id="president_message" class="patrons_message">
							I am very happy on being a part of this astounding association . The sincere and hardworking nature of our team made this day possible. The aim of this association is not only to train the students professionally but also personally to compete and succeed.I take this as an opportunity to congratulate the members of this association. We thank you for your support and intend to continue to pursue our goals. Thank you
						</div>
					</div></li>
				</ul>
			</div>
			
		</div>
		</div>
		<div id="left_side_menu">
		<ul>
			<div id="menu_team" class="team_menu_list">		<li>Core Team 	</li>	</div>
			<div id="menu_patrons" class="team_menu_list">	<li>Patrons   	</li>	</div>
		</ul>
		</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.team_imgs').hide();
		$('#patron_li').hide();
		$('#vineet').fadeIn('slow');
		$('#menu_team').addClass("team_menu_active")
	});
</script>
<script type="text/javascript">
	$('.thumbs').click(function(){
		thumb_id=$(this).attr('id');
		thumb_id=thumb_id.substring(6);
		$('.team_imgs').hide();
		$('#'+thumb_id).fadeIn('slow');
	});
</script>
<script type="text/javascript">
	$('#thumb_prev').click(function(){
		$("#thumb_strip").removeClass("prev_function");
	});
	$('#thumb_next').click(function(){
		$('#thumb_strip').addClass("prev_function");
	});
</script>
<script type="text/javascript">
	$('#menu_team').click(function(){
		$('#patron_li').hide();
		$('#team_li').fadeIn(400);
		$('#menu_patrons').removeClass("team_menu_active")
		$(this).addClass("team_menu_active");
	});
	$('#menu_patrons').click(function(){
		$('#team_li').hide();
		$('#patron_li').fadeIn(400);
		$('#menu_team').removeClass("team_menu_active")
		$(this).addClass("team_menu_active");
	});
</script>
<script type="text/javascript">
	$('.patrons_img_div').mouseenter(function(){
		imgId=$(this).attr('id');
		$('#'+imgId+' div').addClass("patrons_text_description_anim");
	});
	$('.patrons_img_div').mouseleave(function(){
		imgId=$(this).attr('id');
		$('#'+imgId+' div').removeClass("patrons_text_description_anim");
	});
</script>