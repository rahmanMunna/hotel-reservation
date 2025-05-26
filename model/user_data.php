<?php


$location = "127.0.0.1";
$userName = "root";
$password = "";
$dbName = "hotel-reservation";

//connect to db
$connection =  mysqli_connect($location,$userName,$password,$dbName); // returns an object

//write query
$query = 'SELECT * FROM `users`';

//Execute query
$result = mysqli_query($connection,$query); // returns an object

//to get data: we need to convert $result object into associative array
// $row = mysqli_fetch_assoc($result); // return only the first single row

// //print all the value of the first row
// foreach($row as $key => $value){
//     echo "<h2>$key : $value</h2><br>";
// }

//TO get all the rows

while($row = mysqli_fetch_assoc($result)){
    print_r($row);
    // foreach($row as $key => $value){
    //     echo "<h1>$key : $value</h1><br>";
    // }
}