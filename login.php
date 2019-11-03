<?php
session_start();

if (isset($_POST['submit'])) {

	$id = $_POST['id'];
	$password = $_POST['password'];
	if (empty($id) == true || empty($password) == true) {
		echo "null submission!";
	} else {
		$id = $_POST['id'];
		$pass = $_POST['password'];
		$myfile = fopen('info.text', 'r');
		while (!feof($myfile)) {
			$line = fgets($myfile);
			$data = explode("|", $line);
			if ($id == $data[0] && $pass == $data[1]) {
				$_SESSION['name'] = $data[2];
				$_SESSION['id'] = $data[0];
				$_SESSION['password'] = $data[1];
				$_SESSION['email'] = $data[3];

				$_SESSION['type'] = $data[5];
				$_SESSION['Gender'] = $data[4];

				fclose($myfile);

				if ($_SESSION['type'] == "Admin") {
					header('location: AdminHome.php');
				}
				if (data[5] == "Teacher") {
					header('location: TeacherHome.php');
				} else {
					header('location: StudentHome.php');
				}
			}
		}
	}
}






?>
<html>

<head>
	<title>LOGIN</title>

</head>
<style>
	fieldset {
		border: 1px solid rgb(255, 232, 57);
		width: 400px;
		float: center;
	}
</style>

<body>

	<table border="0" align="center">
		<tr>
			<td>
				<img src="0.png" align="center" width="200px">
			</td>
			<td> </td>
		</tr>
	</table>

	<form method="POST">
		<table border="0" align="center">
			<tr>
				<td>
					<fieldset align="center" style="width:50">
						<legend>LOGIN</legend>
						<table align="center" border="0" bgcolor="GreenYellow">
							<tr>
								<td>ID: </td>
								<td><input type="text" name="id" placeholder="Enter your id.." required /></td>
							</tr>
							<tr>
								<td>PASSWORD:</td>
								<td><input type="password" name="password" placeholder="Enter your password.. " required/></td>
							</tr>
							<td>
								<hr>
								<input type="submit" name="submit" value="Login">
								<a href="register.php"> Register</a>
							</td>
						</table>
					</fieldset>
				</td>
			</tr>
		</table>
	</form>
</body>

</html>