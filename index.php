 <?php
 $stringOne = 'My name is';
 $stingTwo = 'Ram';
 echo $stringOne.$stingTwo."\n";

$name = 'mario';
echo "hey, my name is". $stingTwo."\n";
echo "Hey , my name is $name";
//escape character
echo "Santosh said \"hah\"\n";
echo 'santosh said "hah"\n';
echo $name[1];

echo strlen($name);
echo strtolower($name);
echo strtoupper($name);
echo str_replace("m", "w", $name);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "working on php";
    ?>
    <!-- <div><?php echo NAME; ?></div> -->
    <div><?php echo $name; ?></div>
</body>
</html>