<head>
	<script type="text/javascript" src="./jquery.js"></script>
	<style type="text/css">
		#about_us_wrapper
		{
			width: 100%;
			margin: 0px 0px;
			color: #ffffff;
		}
		#about_us_wrapper_inside
		{
			position: relative;
			width: 100%;	height: 200px;
			border-width: 3px 0px 3px 0px;	border-color: #ffffff;	border-style: solid;
			top:90px;
			padding-top: 5px;	padding-bottom: 5px;
		}
		#about_us_side_menu
		{
			float: left;
			height: 105%;			width: 162px;			
			border-width: 0px 3px 0px 0px;	border-color: #ffffff;	border-style: solid;
			margin-top: -5px;
		}
		.about_menu_elements li
		{
			list-style-type: none;
			margin-left: -35px;
			padding-top: 5px;	padding-bottom: 5px;
			cursor: default;
		}
		.about_menu_elements li:hover{background-color: #ffffff;	color: #000000;}
		#about_us_content
		{
			/*float: right;*/
			/*width: 738px;*/
			margin-left: 175px;	margin-top:0px;
		}
		.about_menu_active{background-color: #ffffff; color: #000000;}
	</style>

</head>
<div id="about_us_wrapper">
	<div id="about_us_wrapper_inside">
		<div id="about_us_side_menu">
			<div id="menu_list">
				<ul>
					<div id="menu_about_us_it" class="about_menu_elements">	<li>About IT Association</li>	</div>
					<div id="menu_our_aim" class="about_menu_elements">		<li>Our Aim</li>				</div>
					<div id="menu_about_srm" class="about_menu_elements">	<li>About SRM University</li>	</div>
					<div id="menu_history" class="about_menu_elements">		<li>History</li>				</div>
				</ul>
			</div>
		</div>

		<div id="about_us_content">
			<div id="about_us_it" class="about_us_content_elements">
				<br>IT Association is a platform where students are given an opportunity to enhance their talents and skills required in a complete, ideal IT professional. The Association body primarily consists of students of the Department of Information Technology at SRM University, and is guided under the expertise of senior faculty members of the Department. The IT Association focuses on overall development of the student; concentrating on entrepreneurship development, training, student’s welfare, cultural activities, research and corporate coordination. The Association conducts technical as well as non technical events, both at inter-department and intra-department level, as well as various seminars on current technologies. We, at the IT Associtaion, can be directly contacted at clubteamit@gmail.com. We are also available to everyone on Facebook
			</div>

			<div id="our_aim" class="about_us_content_elements">
				<br>"Together With a Vision, Towards Transformation".<br><br>Our aim is to offer the students a platform where they can enhance their skills and develop their talent. As our tagline says, through our quality events and endeavour we aim at making people aware about the various day developmets around them as well as provide them with facilities and opportunities to develope into a complete candidate for a better future.
			</div>

			<div id="about_srm" class="about_us_content_elements">
				<br>Started in 1985, and now ranked among the top universities in India, SRM University provides a wide range of undergraduate, postgraduate and doctoral programmes in the fields of Engineering, Management, Medicine and Health Sciences and Science and Humanities.<br>The collaborations with world reknowned universities like MIT, Carnegie Mellon, UC Davis, Warwick help us to improve the curriculum and set global standards.<br>The University has accreditations from the national agencies like the UGC, AICTE and boasts a ‘A’ grade from the NAAC.
			</div>

			<div id="history" class="about_us_content_elements">
				<br>The association was formed in 1998 as a collaborative effort by the faculty and students of IT department to facilitate interaction and growth of individual and department. It got a head start when it was reinaugurated on 3rd August 2012 by our HOD sir along with Nimala ma'am, the president of the Association. It was followed by an induction process. Various events like Ardeur'12, TCS Workshop, Furor'13 and Ardeur'13 followed under the expert guidance of our Vice President Vineet Sharma along with the organizing team. There was also a special event for the faculty in Ardeur'13.
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.about_us_content_elements').hide();
		$('#about_us_it').fadeIn(400);
		$('#menu_about_us_it li').addClass('about_menu_active');
	});
	$('.about_menu_elements').click(function(){
		$('.about_us_content_elements').hide();
		$('.about_menu_elements li').removeClass("about_menu_active");
		tabId=$(this).attr('id');
		$('#'+tabId+" li").addClass("about_menu_active");
		tabId=$(this).attr('id').substring(5);

		$('#'+tabId).fadeIn(400);
	});
</script>