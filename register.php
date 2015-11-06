<?php
	If(isset($_POST['register_data_submit']))
	{
		$name=$_POST['name'];
		$reg_no=$_POST['reg_no'];
		$course=$_POST['course'];
		$branch=$_POST['branch'];
		$year_of_study=$_POST['year'];
		$section=$_POST['section'];
		$email_addr=$_POST['email_addr'];
		$contact_no=$_POST['contact_no'];
		$facebook_id=$_POST['facebook_id'];
		$date=date("Y/m/d");		
		$time=date("H:i:s,A");

		$con=mysql_connect("localhost","instavid_ita","itassociation") OR die("Could Not connect to databse <a href='./register.php'>Back</a>");
		mysql_select_db("instavid_ita");
		$query="insert into register_data values ('$name','$reg_no','$course','$branch','$year_of_study','$section','$email_addr','$contact_no','$facebook_id','$date','$time')";
		mysql_query($query) or die("Could Not Insert The values into the databse".mysql_error());
		mysql_close($con);		
	}
?>
<html>
	<head>
		<title>IT Associaiton Subscription Form</title>
		<script type="text/javascript" src="./jquery.js"></script>
		<link rel="shortcut icon" href="./imgs/it_logo_favicon.png">
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
				height: 100%;
				width: 100%;
			}
			#container
			{
				position: relative;
				display: inline-block;
				top: 75px;	left: 0px;
				height: 550px;	width: 99%;
			}
			.register_labels{color: #ffffff}
			.register_inputs{width: 170px;}
			#content
			{
				width: 900px;	min-height: 94%;
				background-color: rgba(0,0,0,0.8);
				margin: 0px auto;
				color: #ffffff;
				padding-top: 5px;	padding-bottom: 30px;
			}
			table
			{			margin: 0px auto;		}
			td:nth-child(1){padding-right: 130px;}
			td{padding-top: 10px;	padding-bottom: 10px;}
			#submit_button_div
			{
				width: 100px;	height: 25px;
				margin: 35px auto;	
				border-radius: 5px;
				box-shadow: 0px 0px 5px rgb(59,59,59) inset;
				background-color: #ffffff;
				cursor: pointer;
			}
			#submit_button_div:hover{box-shadow: 0px 0px 5px rgb(0,0,0) inset;}
			#submit_button_div input
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
			<?php require 'header.inc'; ?>
			<div id="container">
				<div id="content">
					<form id="subscription_form" name="subscribe_form" action="register.php" method='post'>
						<table border=0px>
							<tr>
								<td><span class="register_labels">Name:</span></td>
								<td><input type="text" name="name" class="register_inputs"></td>
							</tr>
							<tr>
								<td><span class="register_labels">Registration No.:</span></td>
								<td><input type="text" name="reg_no" class="register_inputs"></td>
							</tr>
							<tr>
								<td><span class="register_labels">Course:</span></td>
								<td><input type="text" name="course" class="register_inputs"></td>
							</tr>
							<tr>
								<td><span class="register_labels">Branch</span></td>
								<td><input type="text" name="branch" class="register_inputs" value="Information Technology" onFocus="change_focus()"></td>
							</tr>
							<tr>
								<td><span class="register_labels">Year:</span></td>
								<td>
									<select name="year" class="register_inputs" id="year_id">
										<option>First</option>
										<option>Second</option>
										<option>Third</option>
										<option>Fourth</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><span class="register_labels">Section:</span></td>
								<td>
									<select name="section" class="register_inputs">
										<option>A</option>
										<option>B</option>
										<option>C</option>
										<option>D</option>
										<option>E</option>
								</select>
								</td>
							</tr>
							<tr>
								<td><span class="register_labels">E-Mail Address</span></td>
								<td><input type="email" name="email_addr" class="register_inputs"></td>
							</tr>
							<tr>
								<td><span class="register_labels">Contact No.:</span></td>
								<td><input type="text" name="contact_no" class="register_inputs"></td>
							</tr>
							<tr>
								<td><span class="register_labels">Facebook Id Link</span></td>
								<td><input type="text" name="facebook_id" class="register_inputs"></td>
							</tr>
						</table>
						<div id="submit_button_div"><input type="submit" value="SUBMIT" id="submit_button" style="width:100%" name="register_data_submit"></div>
					</form>
				</div>
				<?php include ("footer.inc");	?>
			</div>
		</div>
	</body>
	<script type="text/javascript">
	function change_focus(){document.getElementById('year_id').focus();}
	</script>
</html>