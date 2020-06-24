<?php
include ('includes/header.php');
include ('includes/nav2.php');
?>

<h2 id="headingform2">INSERT A NEW PLACE TO VISIT IN VICTORIA: <h2>
<div id="formblock">
<form method="post" id="fontform" action="insert_form.php" enctype="multipart/form-data">
  
        <label>Name of the place: </label>
        <br>
        <input type="text" name="name" />
        <br><br>
        <label>Description of the place: </label>
        <br>
        <textarea cols="50" rows="8" name="description"></textarea>
        <br><br>
        <label>Select an image of the place: </label>
        <br>
        <input type="file" name="image"/>
        <br><br>
        <label>Set the caption for the selected image: </label>
        <br>
        <input type="text" name="caption" />
        <br><br>
        <label>Set location: </label>
        <br>
        <input type="text" name="location"/>
        <br><br>
        <input type="submit" name="submit" value="Insert" />
</form>
</div>

<?php
include ('includes/footer.php');
?>
