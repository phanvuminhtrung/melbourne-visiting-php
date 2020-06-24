<?php

require_once ('config.php');
require_once ('db_class.php');

include ('includes/header.php');
include ('includes/nav2.php');

$connection = new dbController(HOST,USER,PASS,DB);
$keyword = $connection->cleanUp($_GET['keyword']);
$sql = "SELECT * from product WHERE description LIKE '%$keyword%' OR name LIKE '%$keyword%' OR location LIKE '%$keyword%'";
$record = $connection->getAllRecord($sql);
?>
<div id="tableblock">
<table>
    <tr id="table1">
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
    echo "<td>$name</td>";
    echo "<td><img src='$image' alt='$name' width=360px height=240px></td>";
    echo "<td>$location</td>";
    echo "<td>$description</td>";
    echo "<td><a id='link' href='update.php?id=$id'>Update</a></td>";
    echo "<td><a id='link' href='delete.php?id=$id'>Delete</a></td>";
echo "</tr>"; }
}
else {
    echo "<h2 id='headingform2'>No record has been found!<h2>";
}
echo "</table>";
echo "</div>";
include ('includes/footer.php');
?>