 <?php
//indexed array
$peopleOne = ["Tialk", "ceysat"];
$peopleOne[1];
$peopleTwo = array('ken', "chun-li");

$ages = [20, 30, 40, 50];
print_r($ages);
$ages[1] = 25;
$ages[] = 33;
//push func
array_push($ages, 77);
//array lentgth
echo count($ages);
//merge array
$peopleThree = array_merge($peopleOne, $peopleTwo);
print_r($peopleThree);
print_r($ages);
//associative array, 
$ninjasOne = ["shun"=>"Black", "Mario"=>"Orange", "luige"=>"Brown"];
echo $ninjasOne["Mario"];

$ninjasTwo = array("bowser"=>"green", 'peach'=>"yellow");
$ninjasOne["peach"] = "yellow";
echo count($ninjasOne);
print_r($ninjasOne);

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