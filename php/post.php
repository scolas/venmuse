<<?php
require_once('../php/mysqli_connect.php');



$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
 $first = filter_var($fname,FILTER_SANITIZE_STRING);
 $last = filter_var($lname,FILTER_SANITIZE_STRING);
 $e = filter_var($email,FILTER_SANITIZE_EMAIL);



$query ="INSERT INTO users (user_id, fname, lname, email)
VALUES (NULL, '$fname', '$lname', '$email')";

$stmt = $conn->prepare("INSERT INTO users (fname, lname, email)
VALUES (?,?,?)");
$stmt->bind_param('sss',$first,$last,$e);

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

$stmt->close();
$conn->close();
//mysqli_close($conn);
 ?>
