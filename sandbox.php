<?php

$score = 40;
//ternery operator
echo $score>30?"High score": "Low score";

//superglobals
echo $_SERVER['SERVER_NAME']. '<br/>';
echo $_SERVER['REQUEST_METHOD']. '<br/>';
echo $_SERVER['SCRIPT_FILENAME']. '<br/>';
echo $_SERVER['PHP_SELF']. '<br/>';

//SESSIONS
if(isset($_POST['submit'])){

    //cookies
    setcookie("gender", $_POST['gender'], time()+86400);
    //$_SESSION['name'] = "Santosh";
    session_start();



    $_SESSION['name'] = $_POST['name'];
    header("location: index.php");

    // accessing cookies
    // $gender = $_COOKIE['gender'] ?? "Unknown";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<input type="text" name="name">
        <select name="gender">
			<option value="male">male</option>
			<option value="female">female</option>
		</select>
		<input type="submit" name="submit" value="submit">
	</form>

    
</body>
</html>