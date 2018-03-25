<?php session_start();

$auth = $POST_['author'];
$top = $POST_['topic'];
$art = $POST_['article'];

// JSON data storage

//$jsdata = array(
//    "1" =>  array(
//            "author" => "$auth",
//            "topic" => "$top",
//            "article" => "$art"
//        )
//               );
//
//$data_results = file_get_contents('data.json');
//$temp = json_decode($data_results, true);
//
//$temp[] = $jsdata; 
//
//
//$j = json_encode($temp);
//file_put_contents('data.json', $j);

//Connect to SQL DB

$connection = mysqli_connect('localhost', 'root', 'root', 'obthub');

$qry = "INSERT INTO users (author, topic, article) VALUES ('$auth', '$top', '$art');";

mysqli_query($connection, $qry);
mysqli_close($connection); 

header('Location:index.php');

?>
