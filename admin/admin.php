<?php 
	$con=mysql_connect("localhost","instavid_ita","itassociation") OR die("Could Not Connect To Database");
	mysql_select_db("instavid_ita");
?>

<?php
	if(isset($_POST['submit_news_change']))
	{
		$latest=$_POST['news_input'];
		$news_time=date('h:i:s',time());	
		$news_date=date('y/m/d',time());	
		mysql_query("INSERT INTO news VALUES ('$news_date','$news_time','$latest')");
		mysql_query("UPDATE latest_news SET news='$latest'");
	}
?>
<?php	
	$news_query=mysql_query("select * from news");	
	$news_latest_query=mysql_query("select * from latest_news");
	$current_entry=mysql_fetch_array($news_latest_query);
?>
<html>
<head>
	<title>IT Association Admin's Page</title>
	<style type="text/css">
		#wrapper
		{
			position: relative;
			width: 100%; height: 100%;
			left:0px;	top:0px;
		}
		#latest_news_changing_form
		{
			top:35px;  width:827px; position: relative;
		}
		#latest_news_column
		{
			float:right; 
			width:400px; 
			position: relative;
		}
	</style>
</head>
<body>
	<div id="wrapper">
		<div id="latest_news_column" style="">
			<caption>Latest News History</caption>
			<table border=1>
			<th>Date</th>
			<th>Time</th>
			<th>News Posted</th>
			<?php
				while ($row=mysql_fetch_assoc($news_query)) 
				{
					echo"				
					<tr>
					<td>$row[date]</td>
					<td>$row[time]</td>
					<td>$row[news]</td>
					</tr>
					 ";
				}
			?>
			</table>
		</div>

		<div id="latest_news_changing_form">
			<form name="changin_form" method=post action="admin.php">
				<textarea type="text" id="spl_id"name="news_input" cols=100 rows=1 placeholder="Enter your news (100 characters maximum)" onkeydown="count_char()"  style="resize:none;"><?php echo $current_entry[0]?></textarea>No. Of Characters:<span id="no_of_char"></span><br>
				<input type="submit" value="POST NEWS" name="submit_news_change" style="float:right;">
			</form>
		</div>
	</div>
</body>
<script type="text/javascript">
	function count_char()
	{
		document.getElementById('no_of_char').innerHTML=document.getElementById('spl_id').value.length;
	}
</script>
</html>

