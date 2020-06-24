
<?php

require_once ('config.php');
require_once ('db_class.php');

include ('includes/header.php');
include ('includes/nav.php');

$connection = new dbController(HOST,USER,PASS,DB);
?>

<h2 id="headingform2">ENTER YOUR USERNAME & PASSWORD: <h2>
<div id="formblock3">
<form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" id="fontform">
<label>username: </label>
<input type="text" name="username">
<br><br>
<label>password: </label>
<input type="password" name="password">
<br><br>
<input type="submit" name="login" value="LOGIN"/>  

</form> 
</div>
<?php 
    if (isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(!empty($username)||!empty($password)) {

            if ($connection->checkLogin($username, $password)) {
                header('location: displayadmin.php');
                exit();
            } else {
                echo "you have enter incorrected password";
                echo "<br>";
                echo "<a href='loginform.php'>return</a>";
                exit();
            }
        } else {
            echo "<h2 id='headingform2'>You must enter USERNAME and PASSWORD!<h2>";
        }
}
include ('includes/footer.php');
?>