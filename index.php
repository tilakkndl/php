 <?php
 //function
 function sayHello($name = "Tilak"){
    echo "Good morning $name";
 }
//  sayHello("Santosh");

function formatProduct($product){
    return "{$product['name']} costs Rs. {$product['price']} to buy";
}
$stat = formatProduct(["name"=>"Gold star", "price"=>3000]);
echo $stat;
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
    <!-- <?php echo "working on php";
    ?> -->
    <!-- <div><?php echo NAME; ?></div> -->
    <div><?php echo $name; ?></div>
</body>
</html>