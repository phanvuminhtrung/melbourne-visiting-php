<?php

session_start();
include ('includes/header.php');
include ('includes/nav2.php');

require_once('config.php');
require_once('db_class.php');

$connection = new dbController(HOST,USER,PASS,DB);
$sql = "SELECT id,name,image,caption,description,location FROM product";
$record = $connection->getAllRecord($sql); 
echo "<h2 class='headhome'> Welcome {$_SESSION['login']['firstname']} {$_SESSION['login']['lastname']}</h2>";
?>


<div id="tableblock">
<table>
    <tr id="table1">
        <th>Id</th>
        <th>Place </th>
        <th>Image </th>
        <th>Location</th>
        <th>Description</th>
        <th>Updates</th>
        <th>Deleted</th>
    </tr>
<?php

if (!empty($record)){
foreach ($record as $row){  
    $id = $row['id'];
    $name = $row['name'];
    $description = $row['description'];
    $image = $row['image'];
    $location = $row['location'];

echo "<tr id='table2'>";
    echo "<td>$id</td>";
    echo "<td>$name</td>";
    echo "<td><img src='$image' alt='$name' width=360px height=240px></td>";
    echo "<td>$location</td>";
    echo "<td>$description</td>";
    echo "<td><a id='link' href='update.php?id=$id'>Update</a></td>";
    echo "<td><a id='link' href='delete.php?id=$id'>Delete</a></td>";
echo "</tr>"; }
}
else {
    echo "<p> no record has been found </p>";
}
echo "</table>";
echo "</div>";
include ('includes/footer.php');
?>