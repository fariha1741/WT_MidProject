<?php
session_start();
if (isset($_SESSION['id'])) {
	if ($_SESSION['type'] == "Admin") {
		header('AdminHome.php');
	} else
	if ($_SESSION['type'] == "Teacher") {

		?>

		<html>

		<head>
			<title>Welcome <?= $_SESSION['type'] ?> </title>
		</head>

		<body>
			<form method="POST">
				<fieldset align="center">
					<legend>Fill Out the Form to proceed</legend>
					<table border="0" align="center">
						<tr>
							<td>Course You want to Teach </td>
							<td><input type="text" name="Education" required /> </td>
						</tr>
						<tr>
							<td>Teaching Experience:</td>
							<td><input type="text" name="Level" required /> </td>
						</tr>
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

	<?php
		} else
		if ($_SESSION['type'] == "Student") {
			?>

		<html>

		<head>
			<title>Welcome <? $_SESSION['type'] ?> </title>
		</head>

		<body>
			<form method="POST">
				<fieldset align="center">
					<legend>Fill Out the Form to proceed</legend>
					<table border="0" align="center">
						<tr>
							<td>Education Type</td>
							<td><input type="text" name="Education" required /> </td>
						</tr>
						<tr>
							<td>Level</td>
							<td><input type="text" name="Level" required /> </td>
						</tr>
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
<?php
	}
}

$education = $level = "";


if (isset($_POST['submit'])) {
	if (empty($_POST['Education'])) { } else {
		$education = $_POST['Education'];
		if (empty($_POST['Level'])) { } else {
			$level = $_POST['Level'];
			$id = $_SESSION['id'];
			$type = $_SESSION['type'];
			$my = fopen('Moreinfo.text', 'a');
			fwrite($my, "$id|$type|$education|$level\n");
			fclose($my);
			if ($_SESSION['type'] == 'Teacher') {
				header('location: TeacherHome.php');
			} else
	if ($_SESSION['type'] == 'Student') {
				header('location: StudentHome.php');
			}
		}
	}
}

?>