<!DOCTYPE html>
<html>
<head>
<title>Venmuse</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
</script>
<script>

  $(document).ready(function(){

    $("form").submit(function(event){




      var fn = $("#fname").val();
      var ln = $("#lname").val();
      var em = $("#email").val();
      var st = $("#state").val();
      var gn = $("#genre").val();
    //  alert(st+" this is st ");
      //alert(gn);
      event.preventDefault();
      var $form=$(this);
      var datastring = {fname:"fn", lname:"ls", email : "em"};
      var serialize = $form.serialize();
      //alert('works1');
    request =  $.ajax({
        type: 'post',
        cache: false,
        url: 'php/post.php',
        //data: serialize,
        data: {
          fname: fn,
          lname: ln,
          email: em,
          state: st,
          genre: gn
        },
        success: function(){
          alert('works-php');
        }


      });

      request.done(function (response, txtStatus, jqXHR){
        alert("Thank you");
        console.log("Thank you");
        $form[0].reset();
      });

      request.fail(function (response, txtStatus, errorThrown){
        alert(" Check log");
        console.error("Entry Unsuccessful" + txtStatus, errorThrown);
      });

    });
  });

</script>

</head>
<body>

<form action="#">



  <input type="text" id="fname" name="fname" placeholder="First name" required><br>
  <input type="text" id="lname" name="lname" placeholder="Last name" required><br>
  <input type="text" id="email" name="email" placeholder="Email" required><br>

  <select name="state" id="state" placeholder="State" required>
    <option value="" selected=" ">Select state</option>
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
   <option value="">Select genre</option>
   <?php

   $glist = array(
   'h'=>"Hip Hop",
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
