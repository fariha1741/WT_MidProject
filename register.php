<?php

session_start();

$id = $name = $usertype = $pass = $c_pass = $email = $gender = "";
$id_er = $name_er = $email_er = $pass_er = $usertype_er = $c_pass_er = $gender_er = "";

if (isset($_POST['submit'])) {
	if (empty($_POST['id'])) {
		$id_er = "ID is required!";
	} else {
		$id = $_POST['id'];
		if (empty($_POST['uname'])) {
			$name_er = "Name is required!";
		} else {
			$name = $_POST['uname'];
			if (empty($_POST['email'])) {
				$email_er = "E-mail is required!";
			} else {
				$email = $_POST['email'];
				if (empty($_POST['password'])) {
					$pass_er = "Password is required!";
				} else {
					if (empty($_POST['confirmpassword'])) {
						$c_pass_er = "Confirmation Password is required!";
					} else {
						if (!(empty($_POST['pass'])) && !(empty($_POST['c_pass']))) {
							if ($pass != $c_pass) {
								$c_pass_er = "Passwords doesn't match!";
							}
						} else {
							$pass = $_POST['password'];
							if (empty($_POST['Gender'])) {
								$gender_er = "Select Gender";
							} else {
								$gender = $_POST['Gender'];
								if (empty($_POST['type'])) {
									$usertype_er = "Select User Type";
								} else {
									$usertype = $_POST['type'];
									$_SESSION['name'] = $name;
									$_SESSION['id'] = $id;
									$_SESSION['password'] = $pass;
									$_SESSION['email'] = $email;

									$_SESSION['type'] = $usertype;
									$_SESSION['Gender'] = $gender;
									$myfile = fopen('info.text', 'a');
									fwrite($myfile, "$id|$pass|$name|$email|$gender|$usertype\n");
									fclose($myfile);
									header('location: RegisterPart2.php');
								}
							}
						}
					}
				}
			}
		}
	}
}

?>

<html>

<head>
	<title>Registration</title>
</head>
<style>
	fieldset {
		border: 1px solid rgb(255, 232, 57);
		width: 400px;
		float: center;
	}
</style>

<body>
	<form method="POST">
		<fieldset align="center">
			<legend>REGISTRATION</legend>
			<table align="center" border="0">
				<tr>
					<td>Id: </td>
					<td><input type="text" name="id" required /> <?php echo $id_er ?></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" required /> <?php echo $pass_er ?></td>
				</tr>
				<tr>
					<td>Confirm Password:</td>
					<td><input type="password" name="confirmpassword" required /> <?php echo $c_pass_er ?></td>
				</tr>
				<tr>
					<td>Name: </td>
					<td><input type="text" name="uname" required /> <?php echo $name_er ?></td>
				</tr>
				<tr>
					<td>Email: </td>
					<td><input type="text" name="email" required /><?php echo $email_er ?></td>
				</tr>

				<tr>
					<td>User Type:</td>
					<td>
						<input type="radio" name="type" value="Admin" /> Admin
						<input type="radio" name="type" value="Teacher" /> Teacher
						<input type="radio" name="type" value="Student" /> Student
						<?php echo $usertype_er ?>
					</td>
				</tr>
				<tr>
					<td>Gender: </td>
					<td> <input type="radio" name="Gender" value="Male" /> Male
						<input type="radio" name="Gender" value="Female" /> Female
						<?php echo $gender_er ?></td>
				</tr>
				<td>
					<hr>
					<input type="submit" name="submit" value="Sign Up">
					<a href="login.php"> Sign In</a>
				</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>

</html>