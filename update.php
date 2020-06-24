<?php
include ('includes/header.php');
include ('includes/nav2.php');

require_once 'config.php';
require_once 'db_class.php';
$id=$_GET['id'];
$connection = new dbController(HOST,USER,PASS,DB);
$sql = "SELECT id,name,image,caption,description,location FROM product where id=$id";
$record = $connection->getOneRecord($sql);

if (!empty($record)) {
$name = $record['name'];
$image = $record['image'];
$caption = $record['caption'];
$description = $record['description'];
$location = $record['location'];
}
else {
    echo "there was a problem retrieving the record";
}
?>
<h2 id="headingform2">UDATE YOUR RECORDS: <h2>
<div id="formblock">
<form method="post" action="insert_update.php" enctype="multipart/form-data" id="fontform">
        <br>
        <label>Description of the place: </label>
        <br><br>
        <textarea cols="50" rows="8" name="description"> <?php echo $description ?> </textarea>
        <br><br>
        <label>Select an image of the place: </label>
        <br>
        <input type="file" name="image"/>  <?php echo "<img src=$image width=240px height=160px>"; ?>
        <br><br>
        <label>Set the caption for the selected image: </label>
        <br>
        <input type="text" name="caption" value="<?php echo $caption ?>"/>  
        <br><br>
        <label>Set location: </label>
        <br>
        <input type="text" name="location" value="<?php echo $location ?>"/>  
        <br><br>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="hidden" name="name" value="<?php echo $name ?>">

        <br><br>
        <input type="submit" name="submit" value="UPDATE" />
</form>
</div>

<?php
include ('includes/footer.php');
?>
