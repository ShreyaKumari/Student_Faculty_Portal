<?php
  # Connect
include_once 'connect.php';
   
  # Perform database query
  $query = "SELECT * from tbl_courses";
  $result = mysqli_query($link,$query);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8">
    <title>Select - onchange AJAX example</title>
  </head>

  <body>
    <label for="meetingPlace">Meeting place: </label>
    <select id="meetingPlace">
      <option value="0">Please select</option>
      <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<option value="' . $row['id'] . '">' . $row['title'] . '</option>';
        }
      ?>
    </select>

    <div>
      <label for="element_5_1">Street Address</label>
      <input id="element_5_1" name="element_5_1" class="element text large" type="text">
    </div>

    <div>
      <span class="floatLeft">
        <label for="element_5_3">City</label>
        <input id="element_5_3" name="element_5_3" class="element text medium" style="width:14em" type="text">
      </span>

      <span style="float:left">
        <label for="element_5_4">State</label>
        <input id="element_5_4" name="element_5_4" class="element text medium" style="width:4em" type="text">
        </select>
      </span>

      <span style="float:left">
        <label for="element_5_5">Zip Code</label>   
        <input id="element_5_5" name="element_5_5" class="element text medium" style="width:6em" type="text">
      </span>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
      function insertResults(json){
        $("#element_5_1").val(json["code"]);
        $("#element_5_3").val(json["structure"]);
        $("#element_5_4").val(json["type"]);
        $("#element_5_5").val(json["credits"]);
      }

      function clearForm(){
        $("#element_5_1, #element_5_3, #element_5_4, #element_5_5").val("");
      }

      function makeAjaxRequest(placeId){
        $.ajax({
          type: "POST",
          data: { placeId: placeId },
          dataType: "json", 
          url: "process_ajax.php",
          success: function(json) {
            insertResults(json);
          }
        });
      }

      $("#meetingPlace").on("change", function(){
        var id = $(this).val();
        if (id === "0"){
          clearForm();
        } else {
          makeAjaxRequest(id);
        }
      });
    </script>
  </body>
</html>