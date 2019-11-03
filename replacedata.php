<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php

    session_start();


    $id = $_SESSION['id'];
    $pass = $_SESSION['password'];

    $new_id = $_REQUEST["id"];
    $new_name = $_REQUEST["name"];
    $new_email = $_REQUEST["email"];
    $new_gender = $_REQUEST["gender"];
    $new_type = $_REQUEST["acctype"];

    $newLine = "$new_id|$pass|$new_name|$new_email|$new_gender|$new_type\n";

    $arrayData = array();

    $myfile = fopen('info.text', 'r');

    while (!feof($myfile)) {
        $line = fgets($myfile);
        $data = explode("|", $line);
        if ($id == $data[0] && $pass == $data[1]) {
            array_push($arrayData, $newLine);
        } else {
            array_push($arrayData, $line);
        }
    }
    fclose($myfile);
    $myfile = fopen('info.text', 'w');
    fclose($myfile);

    for ($i = 0; $i < sizeof($arrayData); $i++) {


        $myfile = fopen('info.text', 'a');
        fwrite($myfile, $arrayData[$i]);
        fclose($myfile);
    }
    $_SESSION['name'] = $new_name;
    $_SESSION['id'] = $new_id;
    $_SESSION['email'] = $new_email;
    $_SESSION['type'] = $new_type;
    $_SESSION['Gender'] = $new_gender;


    $arrayData2 = array();

    $myfile2 = fopen('Moreinfo.text', 'r');

    while (!feof($myfile2)) {
        $line = fgets($myfile2);
        $data = explode("|", $line);
        if ($id == $data[0]) {

            array_push($arrayData2, "$new_id|$new_type|$data[2]|$data[3]");
        } else {
            array_push($arrayData2, $line);
        }
    }
    fclose($myfile2);


    $myfile2 = fopen('Moreinfo.text', 'w');
    fclose($myfile2);

    for ($i = 0; $i < sizeof($arrayData2); $i++) {
        $myfile2 = fopen('Moreinfo.text', 'a');
        fwrite($myfile2, $arrayData2[$i]);
        fclose($myfile2);
    }
    header('location: profile.php');
    ?>
</body>

</html>