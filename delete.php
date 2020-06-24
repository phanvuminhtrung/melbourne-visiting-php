<?php

require_once ('config.php');
require_once ('db_class.php');


include ('includes/header.php');
include ('includes/nav2.php');
$id=$_GET['id'];
$connection = new dbController(HOST, USER, PASS, DB);
$sql = "SELECT * FROM product where id=$id";
$record = $connection->getOneRecord($sql);

if(!empty($record)){
    $name = $record['name'];
    $image = $record['image'];
    $caption = $record['caption'];
    $description = $record['description'];
    $location = $record['location'];
    echo "<div id='formblock2'>";
    echo "<h1> Are you sure you want to delete this record? </h1>";
    echo "<p>country id: $id </p>";
    echo "<p>country name: $name </p>";
    echo "<p>caption: $caption</p>";
    echo "<p>image: $image</p>";
    echo "<p>description: $description</p>";
    echo "<br>";
    echo "<a href='displayadmin.php'> Cancel </a>";
    echo "<br><br>";
    echo "<a href='insert_delete.php?id=$id && image=$image'> Delete </a>";
    echo "</div>";
}

include ('includes/footer.php');

?>