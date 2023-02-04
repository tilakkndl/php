<?php
// //file system: part 1
// $quote = readfile("readme.txt");
// echo $quote. '<br/>';

// $file = "readme.txt";
// if(file_exists($file)){
//     //read file
//     echo readfile($file). '<br/>';
//     //copy file
//     copy($file, 'quote.txt');

//     //absolute path
//     echo realpath($file). '<br/>';

//     //file size
//     echo filesize($file). '<br/>';

//     //rename file name
//     rename($file, "test.txt");
// }else{
//     echo "doesn't exist". '<br/>';
// }

//make directory
// mkdir("newDirectory");

// filesystem-2 
$file = "quote.txt";
//opening file for reading
$handle = fopen($file, "a+");

//read the file
// echo fread($handle, filesize($file)). '<br/>';

// //read a single line
// echo fgets($handle). '<br/>';
// echo fgets($handle). '<br/>';

// //read a single character
// echo fgetc($handle). '<br/>';
// echo fgetc($handle). '<br/>';

//writing to file
fwrite($handle, "\n Everything popular is wrong");
//closing file
fclose($handle);

//deleting file
unlink($file);
?>