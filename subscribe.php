<?php 
	if(isset($_POST['subscribe_submit']))
	{
		$name=$_POST['subscribe_name'];
		$contact_no=$_POST['subscribe_number'];
		$email=$_POST['subscribe_email'];

		$con=mysql_connect('localhost','instavid_ita','itassociation') or die("Could no connect to database");
		mysql_select_db("instavid_ita");
		$query="insert into subscription_data values ('$name','$contact_no','$email')";
		mysql_query($query);
	}
 ?>
<html>
	<head>
		<link rel="shortcut icon" href="./imgs/it_logo_favicon.png">
		<title>IT Association-Get Subscribed</title>
		<style type="text/css">
			body
			{
				background:url(./imgs/background.jpg) repeat-y scroll center / 100% 100%; background-attachment: fixed;
			}
			*{font-family: "calibri"}
			#wrapper
			{
				width: 300px;	height: 300px;
				margin: 0px	auto;
				overflow: hidden;
			}
			#container{margin-top: 30px;background-color: rgba(0,0,0,0.8);	padding: 30px 0px;}
			form
			{
				margin: 0px	auto;
			}
			table
			{
				margin: 0px	auto;
			}
			table tr td{padding: 10px 5px; color: #ffffff}
			td:nth-child(1){padding-right: 20px;}
			#subscribe_submit_button
			{
				width: 100px;	height: 25px;
				border-radius: 5px;
				box-shadow: 0px 0px 5px rgb(59,59,59) inset;
				background-color: #ffffff;
				cursor: pointer;
				margin: 10px auto;
			}
			#subscribe_submit_button:hover{box-shadow: 0px 0px 5px rgb(0,0,0) inset;}
			#subscribe_submit_button input
			{
				width: 100%;	height: 100%;
				background: none;
				border-radius: 0px;
				border-width: 0px;
				cursor: pointer;
			}
		</style>
	</head>
	<body>
		<div id="wrapper">
			<div id="container">
				<form action="subscribe.php" method='post'>
					<table border=0px>
						<tr>
							<td>	<span class="subscribe_labels">Name:</span>														</td>
							<td>	<input type="text" name="subscribe_name" placeholder="Name" class='subscribe_inputs' maxlength=25>			</td>
						</tr>
						<tr>
							<td>	<span class="subscribe_labels">Contact No.:</span>												</td>
							<td>	<input type="text" name="subscribe_number" placeholder="Contact No." class='subscribe_inputs' maxlength=10>	</td>
						</tr>
						<tr>
							<td>	<span class="subscribe_labels">E-Mail:</span>													</td>
							<td>	<input type="text" name="subscribe_email" placeholder="E-Mail" class='subscribe_inputs' maxlenght=40>		</td>
						</tr>
					</table>
							<div id="subscribe_submit_button">	<input type="submit" value="SUBMIT" name="subscribe_submit" onClick="return subscription_validate()">		</div>
				</form>
			</div>
		</div>
	</body>
	<script type="text/javascript">
		function subscription_validate()
		{
			var name=document.forms[0].subscribe_name.value;
			var contact=document.forms[0].subscribe_number.value;
			var email=document.forms[0].subscribe_email.value;

			if(name.length==0 || contact.length==0 || email.length==0 )
				{alert("Please fill all the fields");	return false;}
			else if(name.length>25)
				{alert("Name should not increase 25 characters");	 return false;}
			else if(contact.length!=10)
				{alert("Enter a valid contact number");	return false;}
			else if(email.length>40)
				{alert("Email Address cannot exceed 40 characters");	return false;}
			else if(valid_email(email)==false)
				{alert("Please enter a valid Email Address");	return false;}
			else
				{return true;}
		}
		function valid_email(email)
		{
			var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    		return re.test(email);
		}
		document.forms[0].subscribe_number.onkeypress=function(e)
		{
			if (e.which>47 && e.which<58){}
				else
					e.preventDefault();
		}
	</script>
</html>