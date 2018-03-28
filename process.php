<?php session_start();

$auth = $_POST['fullName'];
$top = $_POST['topic'];
$art = $_POST['article'];

//// JSON data storage

//Post Index Increment

//if (count($d) == 0)
//    { 
//        $c = 1; 
//    } else {
//        $c = count($d) + 1; 
//}
//
//$k = "profile".$c;
//
//$a = array(
//    "name" => $n,
//    "genre" => $g
//);
//
//$d[$k] = $a;

//Post Index Increment

$jsdata = array(
            "author" => "$auth",
            "topic" => "$top",
            "article" => "$art"
        );
               

$data_results = file_get_contents('data.json');
$temp = json_decode($data_results, true);

$key = count($temp);
++$key;

$temp[$key] = $jsdata; 


$j = json_encode($temp);
file_put_contents('data.json', $j);

////Connect to SQL DB
//

$connection = mysqli_connect('localhost', 'root', 'root', 'obthub');

$qry = "INSERT INTO users (fullName, topic, article) VALUES ('$auth', '$top', '$art');";

mysqli_query($connection, $qry);
mysqli_close($connection); 

//Redirect to index

header('Location:index.php');

?>
