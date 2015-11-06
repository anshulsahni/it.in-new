  <head>
	<style type="text/css">
		#header
		{
			background: -moz-linear-gradient(top,rgba(0,0,0,1) 0%,rgba(0,0,0,0) 100%);
			background: -webkit-linear-gradient(top,rgba(0,0,0,1) 0%,rgba(0,0,0,0) 100%);
			background: -o-linear-gradient(top,rgba(0,0,0,1) 0%,rgba(0,0,0,0) 100%);
			background: -ms-linear-gradient(top,rgba(0,0,0,1) 0%,rgba(0,0,0,0) 100%);
			background: linear-gradient(top,rgba(0,0,0,1) 0%,rgba(0,0,0,0) 100%);
			position:fixed;
			top: -7px;		left: 0px;
			height: 100px;	width: 100%;
			display: inline-block;
		}
		#srm_logo
		{
			position: relative;
			height: 80px; width: 80px;
			left: 10px;	top:10px;
			background: url(./imgs/srmseal.png) no-repeat center center / 100% 100%;
		}
		#it_association_text
		{
			width: 800px;	height: 80px;
			margin: -75px auto;
			background: url('./imgs/it_association_text.png') no-repeat center center / 100% 100%;
		}
		#subscribe_button
		{
			float: right;
			height: 25px;	width: 100px;
			border-radius: 5px;
			box-shadow: 0px 0px 5px rgb(59,59,59) inset;
			margin-top: 25px;	margin-right: 50px;
			background-color: #ffffff;
			cursor: pointer;
		}
		#subscribe_button:hover{	box-shadow: 0px 0px 5px rgb(0,0,0) inset;}
		#button_id
		{
			background: none;
			border-radius: 0px;
			border-width: 0px;
			cursor: pointer;
			height: 100%;	width: 100%;
		}
	</style>
</head>

<div id="header">
	<div id="srm_logo"></div>
	<div id="it_association_text"></div>
	<div id="subscribe_button">	<input type="submit" value="SUBSCRIBE"  id="button_id"/ onClick="subscribe_open()">	</div>			
</div>

<script type="text/javascript">
	function subscribe_open()
	{
		window.open('./subscribe.php','','directories=no,fullscreen=no,resizable=no,height=325px,width=325px,status=no,location=no,screenX=50px,screenY=50px,toolbar=no,scrollbars=no,titlebar=no,menubar=no',false);
		
	}
</script>
