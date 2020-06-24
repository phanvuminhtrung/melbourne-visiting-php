<?php
include ('includes/header.php');
include ('includes/nav2.php');


require_once 'config.php';
require_once 'db_class.php';
$connection = new dbController(HOST,USER,PASS,DB);

if(!isset($_POST['submit'])) {
    echo "Unauthorized Access";    
}
else {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $connection->cleanUp($_POST['description']);
    $caption = $connection->cleanUp($_POST['caption']);
    $location = $connection->cleanUp($_POST['location']);

    $image = 'images/'.$_FILES['image']['name'];
    $temp = $_FILES['image']['tmp_name'];

    if($_FILES['image']['error'] == 4){
        $sql = "update product set description ='$description', caption = '$caption', location = '$location' where id = $id";
    }
    else {
        $sql = "update product set description ='$description', image='$image' , caption = '$caption', location = '$location' where id = $id";
    }
    
    if($connection->executedQuery($sql)) {
        echo "<p> record successfully updated </p>";
        $connection->uploadImage($temp,$image);
    }
    else {
        echo "<p>fail to update the records</p>";
    }
}
echo "<br><br>";
echo "<a href='displayadmin.php'>RETURN</a>";

include ('includes/footer.php')
?>