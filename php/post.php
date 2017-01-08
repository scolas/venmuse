<<?php
require_once('../php/mysqli_connect.php');



$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$state = $_POST['state'];
$genre = $_POST['genre'];
 $first = filter_var($fname,FILTER_SANITIZE_STRING);
 $last = filter_var($lname,FILTER_SANITIZE_STRING);
 $e = filter_var($email,FILTER_SANITIZE_EMAIL);
 $s = filter_var($state,FILTER_SANITIZE_EMAIL);
 $g = filter_var($genre,FILTER_SANITIZE_STRING);


$query ="INSERT INTO users (user_id, fname, lname, email)
VALUES (NULL, '$fname', '$lname', '$email')";

//$stmt = $conn->prepare("INSERT INTO users (fname, lname, email)
//VALUES (?,?,?)");



$stmt = $conn->prepare("INSERT INTO people (fname, lname, email,state,genre)
VALUES (?,?,?,?,?)");
$stmt->bind_param('sssss',$first,$last,$e,$s,$g);

//$stmt->execute();
$stmt->execute();

///$response = @mysqli_query($conn,$query);

// //if($response){
// if($stmt){
//   echo 'Successful';
//
// }
//
//
// else {
//   "Query not proccesed";
//   echo mysqli_error($conn);
// }

//$stmt->close();
$stmt->close();

$conn->close();
//mysqli_close($conn);
 ?>
