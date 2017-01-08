
//$(document).ready(function(){
function go(){
  //$("form").submit(function(event){






    var $form=$(this);

    var serialize = $form.serialize();
    alert('works1');
  request =  $.ajax({
      type: "post",
      url: "php/post.php",
      data: serialize,
      success: function(){
        //alert('works-php');
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

//  });
}
//});
