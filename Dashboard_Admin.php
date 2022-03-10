<!DOCTYPE html>
<html lang="en">
<head>
	<title> Dashboard_Admin </title>
	
	<style>
        .top {
            text-align: center;
        }

        .h4 {
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .center {
            text-align: center;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

        }

        #right {
            text-align: center;
            font-size: x-small;
        }
		
		
    </style>
	
</head>

<body>

	<h1 class="top">Cloud Kitchen</h1>
	
        <hr>
		
		<br>
		<br>
		<h2 class="top">ADMIN DASHBOARD</h2>
		<br>
		<br>
		<div class="center">
			<form action="Our_Menu_Admin.php">
				<input style="width:300px; height:100 px;" type="submit" value="Our Menu" name="btnSave"> <br>
			</form>
		</div>
		<div class="center">
			<form action="Customers_Section_Admin.php">
				<input style="width:300px; height:100 px;" type="submit" value="Customers Section" name="btnSave"> <br>
			</form>
		</div>
		
		<div class="center">
			<form action="Riders_Section_Admin.php">
				<input style="width:300px; height:100 px;" type="submit" value="Riders Section" name="btnSave"> <br>
			</form>
		</div>
		
		<div class="center">
			<form action="Kitchen_Managers_Section_Admin.php">
				<input style="width:300px; height:100 px;" type="submit" value="Kitchen Managers Section" name="btnSave"> <br>
			</form>
		</div>
		
		<div class="center">
			<form action="Order_History_Admin.php">
				<input style="width:300px; height:100 px;" type="submit" value="Order History" name="btnSave"> <br>
				</form>
		</div>
		
		<div class="center">
			<form action="Financial_Admin.php">
				<input style="width:300px; height:100 px;" type="submit" value="Financial" name="btnSave"> <br>
			</form>
		</div>
		
		<div class="center">
			<form action="Feedback_Admin.php">
				<input style="width:300px; height:100 px;" type="submit" value="Feedback" name="btnSave"> <br>
			</form>
		</div>
		<br>
		<br>
		<br>
		
		<div class="center">
			<form action="Login_Page_Admin.php">
				<input type="submit" value="Logout" name="btnSave"> <br>
			</form>
		</div>
</body>

</html>
