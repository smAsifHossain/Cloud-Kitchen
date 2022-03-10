<!DOCTYPE html>
<html lang="en">
<head>
	<title> Login_Page_Admin </title>
	
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


	<form action="Dashboard_Admin.php">

		<h1 class="top">Cloud Kitchen</h1>
	
			<hr>
		
			<br>
			<br>
			<h2 class="top">ADMIN LOGIN</h2>
			<br>
			<br>
			<div class="center">
				<p>Login ID: <input type="text" name="id" id="id"> </p>
				<p>Password: <input type="password" name="pass" id="pass"></p>
				<br>
				<br>
				<br>
				<input type="submit" value="Login" name="btnSave"> <br> <br>
		
			</div>
	</form>	

</body>

</html>
