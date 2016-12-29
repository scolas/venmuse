<<?php
require_once('../php/mysqli_connect.php');

$query = "Select * from users";

$response = @mysqli_query($conn,$query);

if($response){
  echo '<table align="left"
  cellspacing="5" cellpadding="8"
  <tr><td align="left"><b>First Name</b></td>
  <td align="left"><b>Last Name</b></td>
  <td align="left"><b>Email</b></td>';

  while($row = mysqli_fetch_array($response)){
    echo '<tr><td align="left">' .
    $row['fname'] . '</td><td align="left"'.
    $row['lname'] . '</td><td align="left"'.
    $row['email'] . '</td><td align="left">';

    echo '</tr>';
  }
  echo '</table>';
} else {
  "Query not proccesed";
  echo mysqli_error($conn);
}
mysqli_close($conn);
 ?>
