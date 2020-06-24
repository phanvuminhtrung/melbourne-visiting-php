<?php
include ('includes/header.php');
include ('includes/nav.php');

$id = $_GET['id'];
require_once 'config.php';
require_once 'db_class.php';
$connection = new dbController(HOST,USER,PASS,DB);
$sql = "SELECT id,name,image,caption,description,location FROM product where id=$id";
$record = $connection->getOneRecord($sql);

$name = $record['name'];
$image = $record['image'];
$description = $record['description'];
$location = $record['location'];

echo "<section>";
    echo "<h2 id='headdetail'>$name<h2>";
    echo "<p id='locationdetail'> $location </p>";
    echo "<div id='firstdetailblock'><img src='$image' alt='$name' width=800px height=500px ></div>";
    echo "<div id='seconddetailblock'><p id='descriptiondetail'> $description </p></div>";
    echo "<a id='return' href='home.php'>RETURN</a>";
echo "</section>";


include ('includes/footer.php');
?>