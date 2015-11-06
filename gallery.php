<head>

<style type="text/css">
	#gallery_wrapper
	{
		height: 100%;	width: 100%;
	}
	#gallery_side_menu
	{
		margin: -10px auto;
		width: 700px;
	}
	#ul_container ul 
	{
		display: inline-block;
		margin-left: 0px;	margin-top: 10px;
	}
	.gallery_side_menu_elements li{list-style-type: none;text-align: center;}
	.gallery_side_menu_elements:hover{background-color: #ffffff;color: #000000;}
	.gallery_side_menu_elements{cursor: default;color: #ffffff;display: inline-block;padding: 0px 60px 3px 60px;}

	#gallery_img_container
	{
		margin: 10px auto;
		width: 850px;	height:430px;
	}
	.gallery_side_menu_elements_active{color: #000000;background-color: #ffffff;}
</style>
</head>
<div id="gallery_wrapper">
	<div id="gallery_img_container">
	</div>
	<div id="gallery_side_menu">		
		<ul>
			<div id="ardeur13" class="gallery_side_menu_elements">			<li>ARDEUR'13</li>				</div>
			<div id="furor13" class="gallery_side_menu_elements">			<li>FUROR'13</li>				</div>
			<div id="ardeur12" class="gallery_side_menu_elements">			<li>ARDEUR'12</li>				</div>
		</ul>		
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#gallery_img_container').load('ardeur13.html');
		$('#ardeur13').addClass("gallery_side_menu_elements_active");
	})

	$('.gallery_side_menu_elements').click(function(){
		file_id=$(this).attr('id');
		$('#gallery_img_container').load(file_id+'.html');
		$('.gallery_side_menu_elements').removeClass("gallery_side_menu_elements_active");
		$('#'+file_id).addClass("gallery_side_menu_elements_active");
	});
</script>