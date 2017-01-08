<!DOCTYPE html>
<html>
<head>
<title>Venmuse</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
</script>
<script type="text/javascript" src="js/ajaxphp.js"></script>

</head>
<body>

<form action="#" onsubmit="return go()" method="post">


  seperate js<br>
  <input type="text" id="fname" name="fname" placeholder="First name" required><br>
  <input type="text" id="lname" name="lname" placeholder="Last name" required><br>
  <input type="text" id="email" name="email" placeholder="Email" required><br>

  <select name="state" id="state" placeholder="State" required>
    <option value=""></option>
    <?php

    $state_list = array('AL'=>"Alabama",
    'AK'=>"Alaska",
    'AZ'=>"Arizona",
    'AR'=>"Arkansas",
    'CA'=>"California",
    'CO'=>"Colorado",
    'CT'=>"Connecticut",
    'DE'=>"Delaware",
    'DC'=>"District Of Columbia",
    'FL'=>"Florida",
    'GA'=>"Georgia",
    'HI'=>"Hawaii",
    'ID'=>"Idaho",
    'IL'=>"Illinois",
    'IN'=>"Indiana",
    'IA'=>"Iowa",
    'KS'=>"Kansas",
    'KY'=>"Kentucky",
    'LA'=>"Louisiana",
    'ME'=>"Maine",
    'MD'=>"Maryland",
    'MA'=>"Massachusetts",
    'MI'=>"Michigan",
    'MN'=>"Minnesota",
    'MS'=>"Mississippi",
    'MO'=>"Missouri",
    'MT'=>"Montana",
    'NE'=>"Nebraska",
    'NV'=>"Nevada",
    'NH'=>"New Hampshire",
    'NJ'=>"New Jersey",
    'NM'=>"New Mexico",
    'NY'=>"New York",
    'NC'=>"North Carolina",
    'ND'=>"North Dakota",
    'OH'=>"Ohio",
    'OK'=>"Oklahoma",
    'OR'=>"Oregon",
    'PA'=>"Pennsylvania",
    'RI'=>"Rhode Island",
    'SC'=>"South Carolina",
    'SD'=>"South Dakota",
    'TN'=>"Tennessee",
    'TX'=>"Texas",
    'UT'=>"Utah",
    'VT'=>"Vermont",
    'VA'=>"Virginia",
    'WA'=>"Washington",
    'WV'=>"West Virginia",
    'WI'=>"Wisconsin",
    'WY'=>"Wyoming");
    foreach($state_list as $key => $value):
      echo '<option value="'.$value.'">'.$value.'</option>';
    endforeach;

    ?>
  </select><br>

 <select name="genre" id="genre" required>
   <option value=""></option>
   <?php

   $glist = array(
   'j'=>"Jazz",
   'p'=>"Pop",
   'r'=>"Rock",
   'rb'=>"R&B",
   'o'=>"Other");
   foreach($glist as $key => $value):
     echo '<option value="'.$value.'">'.$value.'</option>';
   endforeach;
   ?>
 <!-- <option value="Hip Hop">Hip Hop</option>
    <option value="Jazz">Jazz</option>
    <option value="Pop">Pop</option>
    <option value="Rock">Rock</option>
    <option value="R&B">R&B</option>
    <option value="Other">Other</option> -->
 </select>
<br>

  <input type="submit" value="Submit">
</form>




</body>
</html>
