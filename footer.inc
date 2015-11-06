<?php	
	$con=mysql_connect("localhost","instavid_ita","itassociation");
	mysql_select_db("instavid_ita");
	$latest_news=mysql_fetch_row(mysql_query("select * from latest_news"));
?>
<head>
	<style type="text/css">
		#footer
		{
			position: fixed;
			bottom: 0%;
			width: 100%;
			height: 50px;
			left: 0px;
			background: -moz-linear-gradient(bottom,rgba(0,0,0,1) 0%,rgba(0,0,0,0) 100%);
			background: -webkit-linear-gradient(bottom,rgba(0,0,0,1) 0%,rgba(0,0,0,0) 100%);
			background: -o-linear-gradient(bottom,rgba(0,0,0,1) 0%,rgba(0,0,0,0) 100%);
			background: -ms-linear-gradient(bottom,rgba(0,0,0,1) 0%,rgba(0,0,0,) 100%);
			background: linear-gradient(bottom,rgba(0,0,0,1) 0%,rgba(0,0,0,0) 100%);
		}
		#copyright
		{
			position: relative;
			top:15px;	left: 15px;
			float: left;
			color: #ffffff;
		}
		#latest_news
		{
			color: #ffffff;
			width: 1030px;	height: 30px;
			margin: 10px auto;
			background-color: #000000;
			border-radius: 5px;
		}
		#latest_news_label
		{
			float: left;
			color: #ffffff;
			width: 100px;	
			padding-left: 10px; padding-top: 5px;
		}
		#news
		{
			position: relative;
			padding-top: 7px;
			color: #ffffff;
			/*width: 930px;*/
			left: 0px;	top: 0px;
			overflow-x: hidden;
		}
		#news_span
		{
			position: relative;
			top:0px;
		}
		#social_networking_band
		{
			width:130px;
			float: right;
			margin-top:-40px;	margin-right: 15px;	
		}
		#social_networking_band a{text-decoration: none;}
		#social_networking_band a:visited{border-color: none;}

		.social_links{display: inline;}
		.social_icon_img{height:40px; width: 40px;}
	</style>
</head>

<div id="footer">
	<span id="copyright" class="footer_content">&copy; IT Association</span>
	<div id="latest_news" class="footer_content">
		<div id="latest_news_label">Happenings:</div>
		<div id="news"><span id="news_span"></span></div>
	</div>
	<div id="social_networking_band" class="footer content">
		<div id="facebook" class="social_links">
			<a href="https://www.facebook.com/itassociation.srm" target="_blank"> <img src="./imgs/facebook_fav_icon.png" class="social_icon_img" /> </a>
		</div>
		<div id="youtube" class="social_links">
			<a href="http://www.youtube.com/srmitassociation" target="_blank"> <img src="./imgs/youtube_fav_icon.png" class="social_icon_img" /> </a>
		</div>
		<div id="twitter" class="social_links">
			<a href="http://www.twitter.com/it_association" target="_blank"> <img src="./imgs/twitter_fav_icon.png" class="social_icon_img"> </a>
		</div>
	</div>
</div>
<script type="text/javascript">
	var data=<?php echo json_encode($latest_news[0]); ?>;
	var data_index=0;
	function animating_news()
	{
		if(data_index>=data.length-1)
		{
			clearInterval(T);
			setTimeout(function(){$('#news_span span').remove();data_index=0;T=setInterval("animating_news()",50);},2000);
		}
		data_elements='<span>'+data[data_index]+'</span>';
		$('#news_span').append(data_elements);
		data_index++;
	}
	var T=setInterval("animating_news()",50);
</script>