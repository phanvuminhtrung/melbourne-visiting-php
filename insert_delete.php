<?php 

require_once ('config.php');
require_once ('db_class.php');

include ('includes/header.php');
include ('includes/nav2.php');

$id = $_GET['id'];
$image1 = $_GET['image'];
$subject = 'images/';
$image = str_replace($subject,' ',$image1);
$connection = new dbController(HOST,USER,PASS,DB);
$sql = "DELETE from product where id=$id";

if ($connection->executedQuery($sql)){
    echo "<a>Delete successfully</a>";
    echo "<br>";
    
    if(file_exists($image)){
        unlink($image);
        echo "<a>Image has been removed from the file: $image</a>";
    }
    else {
        echo "<a> no image has been found to delete</a>";
    }
}
else {
    echo "fail to delete the record";
}
echo "<br><br>";
echo "<a href='displayadmin.php'>RETURN</a>";
include ('includes/footer.php');
?>