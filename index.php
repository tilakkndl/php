 <?php

//comparision booleans (true or false)
echo true;//"1"
echo false;//""
//numbers
echo 5<10;
echo 5==10;
echo 5 != 10;

//strings
echo 'shan'<'yoshi'; //true as s comes faster than y
echo 'shan'>'Shan'; //true

//loose vs strict equal comparisions
echo 5 == "5" // true;
echo 5 === "5"//false
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