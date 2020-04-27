<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="style.css">
		<script src="jquery-3.2.1.min.js"></script>
		
		<title>RBC-NGI</title>
		<link re="icon" src="logo.png">
		
		<div class="head-banner">
			<img src="logo.png" width="5%" height="5%" style="float:left"></img>
			<h1 id="header_banner">Student Portal</h1>
		</div>
		
	</head>
	
	<body>
		<div><br><br><br><br><br></div>
		<center>
			<select class="careers">
				<option>----------</option>
				<option id="0" value="NULL">Finance/Accounting</option>
				<option id="1" value="sys-admin.php">System Adminitration</option>
				<option id="2" value="NULL">Risk Management</option>
				<option id="2" value="NULL">Project Management</option>
				<option id="2" value="NULL">Sales</option>
			</select>
			<p id="h_link"></p>
		</center>
		<script>
			$(document).ready(function(){
				$(".careers").change(function(){
					var value = $(this).val();
					if (value !== "NULL"){
						var style= "margin-top: 10px; padding-top: 5px; padding-left: 5px; padding-right: 5px; padding-bottom: 5px; background-color: #669df4;";
						$("#h_link").html("<a href=\'" + value + "\' target='_blank' style='" + style + "'>GO</a>");
					}
				});
			});
		</script>
	</body>
</html>