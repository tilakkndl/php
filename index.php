 <?php
//loops
//for loop
for($i=0;$i<5;$i++){
    echo "Loop is tobe run for 5th times". '<br/>';
}

//for each loop
$blogs = ["blog1", "blog2", "blog3"];
foreach($blogs as $blog){
    echo $blog.'<br/>';
    // echo "for each loop";
}

//while loop
$i=0;
while($i<count($blogs)){
    echo $blogs[$i];
    $i++;
}
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