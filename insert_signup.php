<?php
include ('includes/header.php');
include ('includes/nav2.php');
require_once 'config.php';
require_once 'db_class.php';
$connection = new dbController(HOST,USER,PASS,DB);


$username = $_POST['username'];
$password = $_POST['password'];
$confirm = $_POST['passwordconfirm'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

if (!empty($username) && !empty($password) && !empty($firstname) && !empty($lastname)){
if ($password!=$confirm){
    echo "your password confirmation did not match, please re-enter it";
    echo "<br>";
    echo "<a href='signup.php'>return</a>";
} 
else {
    $sql = "INSERT INTO login (user,password,firstname,lastname) VALUES ('$username','$password','$firstname','$lastname')";
   
    if ($connection->executedQuery($sql)){
        echo "New account has been created";
    }
    else {
        echo '<p>New account is not inserted into the database </p>';
    }
}
} else{
    echo "You may not enter all the fields. PLease return and enter it";
    echo "<br>";
    echo "<a href='signup.php'>RETURN SIGNUP</a>";
}

echo "<br>";
echo "<a href='displayadmin.php'>RETURN</a>";

include ('includes/footer.php');
?>