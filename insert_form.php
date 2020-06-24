<?php
include ('includes/header.php');
include ('includes/nav2.php');
require_once 'config.php';
require_once 'db_class.php';
$connection = new dbController(HOST,USER,PASS,DB);

$name = $connection->cleanUp($_POST['name']);
$description = $connection->cleanUp($_POST['description']);
$caption = $connection->cleanUp($_POST['caption']);
$location = $connection->cleanUp($_POST['location']);
$image = 'images/'.$_FILES['image']['name'];
$temp = $_FILES['image']['tmp_name'];


if (!empty($name) && !empty($description) && !empty($image) && !empty($caption) & !empty($location)){
    $sql = "INSERT INTO product (name,description,image,caption,location) values ('$name','$description','$image','$caption','$location')";
    echo $sql;

    if ($connection->executedQuery($sql)){
        echo '<p> New records successfully inserted to the database </p>';

        $connection->uploadImage($temp,$image);
    }
    else{
        echo '<p>Records not inserted into the database </p>';
    }
}
else  {
    echo "all the fields are required to enter, please check it again";
}
echo "<br><br>";
echo "<a href='form.php'>RETURN</a>";

include ('includes/footer.php');
?>