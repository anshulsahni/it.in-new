<?php
	if(isset($_POST['feedback_submit']))
	{
		$name=$_POST['feedback_name'];
		$reg_no=$_POST['reg_no'];		
		$course=$_POST['course'];
		$year_of_study=$_POST['year_of_study'];
		$branch=$_POST['branch'];
		$section=$_POST['section'];
		$contact_no=$_POST['contact_no'];
		$e_mail=$_POST['e_mail'];
		$feedback_content=$_POST['feedback_content'];

		$con=mysql_connect("localhost","instavid_ita","itassociation") or die("Not able to connect to the database");
		mysql_select_db("instavid_ita") or die("Cant select the database");
		$query="insert into feedback_data values ('$name','$reg_no','$course','$year_of_study','$branch','$section','$contact_no','$e_mail','$feedback_content')";
		mysql_query($query) or die("Fail to enter the data into database");
		header("Location: ./index.php");
		end;
	}
?>
<head>
	<style type="text/css">
		#feedback_form_wrapper
		{	width: 100%;	}
		#form_div
		{
			width: 500px;
			margin: 0px auto;
		}
		.feedback_inputs{width: 170px;}
		.feedback_labels{color: #ffffff;}
		#form_div form{margin: 30px auto;}
		table{margin: 0px auto;}
		td:nth-child(1){padding-right: 130px;}
		td{padding-top: 10px;	padding-bottom: 10px;}
		#feedback_text
		{
			position: relative;
			left: 56px;
			resize:none;
		}
		#submit_button_div
		{
			padding: 3px 0px;
			border-radius: 5px;
			box-shadow: 0px 0px 5px rgb(59,59,59) inset;	
			background-color: #ffffff;
			width: 100px;
			margin: 20px auto;
			cursor: pointer;
		}
		#submit_button_div:hover{box-shadow: 0px 0px 5px rgb(0,0,0) inset;	}
		#submit_button
		{
			background: none;
			border-radius: 0px;
			border-width: 0px;
			margin: 0px 0px;
			cursor: pointer;
		}
	</style>
</head>

<div id="feedback_form_wrapper">	
	<div id="form_div">
		<form action="./feedback.php" method='POST' name="feedback_form">
			<table border=0px>
				<tr>
					<td><span class="feedback_labels">Name:</span></td>
					<td><input type="text" name="feedback_name" class="feedback_inputs" maxlength=25></td>
				</tr>
				<tr>
					<td><span class="feedback_labels">Registration No.:</span></td>	
					<td><input type="text" name="reg_no" class="feedback_inputs" maxlength=10></td>
				</tr>
				<tr>
					<td><span class="feedback_labels">Course:</span></td>
					<td><input type="text" name="course" class="feedback_inputs" maxlength=15></td>
				</tr>
				<tr>
					<td><span class="feedback_labels">Year:</span></td>
					<td>
						<select name="year_of_study" class="feedback_inputs">
							<option value="">Select...</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><span class="feedback_labels">Branch:</span>n</td>
					<td>
						<select name="branch" class="feedback_inputs" onChange="check_branch()">
							<option value="">Select...</option>
							<option value="it">Information Technology</option>
							<option value="other">Other</option>
						</select>
					</td>
				</tr>
				<tr id="section_tr">
					<td><span class="feedback_labels">Section</span></td>
					<td>
						<select name="section" class="feedback_inputs">
							<option value="">Select...</option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><span class="feedback_labels">Contact No.:</span></td>
					<td><input type="text" name="contact_no" class="feedback_inputs" maxlength=10></td>
				</tr>
				<tr>
					<td><span class="feedback_labels">E-Mail:</span></td>
					<td><input type="text" name="e_mail" class="feedback_inputs" maxlength=40></td>
				</tr>
				<tr>
					<td><span class="feedback_labels">Feedback:</span></td>
				</tr>	
			</table>
			<div>
				<textarea name="feedback_content" id="feedback_text" cols=42 rows=3 maxlength=255></textarea>
			</div>
			<div id="submit_button_div"><input type="submit" value="SUBMIT" id="submit_button" name="feedback_submit" style="width:100%;" onClick="return feedback_validate()"></div>
		</form>
	</div>		
</div>

<script type="text/javascript">
	$(document).ready(function(){
		
		$('#section_tr').hide();
	});
</script>
<script type="text/javascript">
	function check_branch()
	{
		var x=document.forms[0].branch.value;
		if(x=="it"){$('#section_tr').show();}
		else{$('#section_tr').hide();}
	}
	function feedback_validate()
	{
		var name=document.forms[0].feedback_name.value;
		var reg_no=document.forms[0].reg_no.value;
		var course=document.forms[0].course.value;
		var year=document.forms[0].year_of_study.value;
		var branch=document.forms[0].branch.value;
		var contact=document.forms[0].contact_no.value;
		var email=document.forms[0].e_mail.value;
		var feedback=document.forms[0].feedback_text.value;

		if(name.length==0 || course.length==0 || year.length==0 || contact.length==0 || email.length==0 || feedback.length==0)
			{alert("Please Enter all the Fields given in the Form"); 	return false;}
		else if(reg_no.length!=10)
			{alert("Please Enter a Valid 10 digit Registration Number");	return false;}
		else if (valid_email(email)==false) 
			{alert("Please Enter a Valid Email Adress");	return false;}
		else if(contact.length!=10)
			{alert("Please Enter a Valid Contact Number");	 return false;}
		else
			{return true;}
	}
	document.forms[0].contact_no.onkeypress=function(e)
		{
			if (e.which>47 && e.which<58){}
				else{e.preventDefault();}
		}
	document.forms[0].reg_no.onkeypress=function(e)
		{
			if (e.which>47 && e.which<58){}
				else{e.preventDefault();}
		}
	function valid_email(email)
		{
			var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    		return re.test(email);
		}

</script>