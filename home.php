<?php
include ('includes/header.php');
include ('includes/nav.php');

require_once('config.php');
require_once('db_class.php');

$connection = new dbController(HOST,USER,PASS,DB);
$sql = "SELECT id,name,image,caption,description,location FROM product";
$record = $connection->getAllRecord($sql); 
?>

<?php
echo "<h2 class='headhome'> EXPLORE VICTORIA'S regions </h2>";
echo "<div class='home'>";
if (!empty($record)){
foreach ($record as $row){  
    $id = $row['id'];
    $name = $row['name'];
    $image = $row['image'];
    $location = $row['location'];

    echo "<div>";
    echo "<a>$name</a>";
    echo "<br><br>";
    echo "<img src='$image' alt='$name' width=380px height=260px>";
    echo "<br>";
    echo "<a>$location</a>";
    echo "<br>";
    echo "<a id='link' href='detailspage.php?id=$id'>Read More</a>";
    echo "<br>";
    echo "</div>";
    }
}
else {
    echo "<p> no record has been found </p>";
}
echo "</div>";

include ('includes/footer.php');
?>

