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

//multidimensionalArray
$blogs=[
    ["title"=>"marion party", "author"=>"mario", "content"=>'lorem', "like"=>30],
    ["title"=>"marion kart chaeadts", "author"=>"toad", "content"=>"lorem", "like"=>25],
    ["title"=>"Selda hidden chests", "author"=>"link", "content"=>"lorem", "like"=>50]
];

echo $blogs[2]["author"];


$blogs[] = ["title"=>"castle pary", "author"=>"peach", 'content'=>"lorem", "like"=>100];
echo count($blogs);
print_r($blogs);
$popped = array_pop($blogs);
print_r($popped);
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