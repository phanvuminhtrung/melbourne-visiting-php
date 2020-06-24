<?php
include ('includes/header.php');
include ('includes/nav2.php');
?>

<h2 id="headingform2"> CREATE NEW ACCOUNT FOR *ADMINISTRATORS ONLY <h2>
<div id="formblock">
<form method="post" id="fontform" action="insert_signup.php" enctype="multipart/form-data">
  
        <label>Account Name/Username: </label>
        <br>
        <input type="text" name="username" />
        <br><br>
        <label>Password: </label>
        <br>
        <input type="password" name="password"/>
        <br><br>
        <label>Confirmed Password: </label>
        <br>
        <input type="password" name="passwordconfirm"/>
        <br><br>
        <label>FirstName: </label>
        <br>
        <input type="text" name="firstname" />
        <br><br>
        <label>Lastname: </label>
        <br>
        <input type="text" name="lastname" />

        <br><br>

        <input type="submit" name="submit" value="Insert" />
</form>
</div>
<?php
include ('includes/footer.php');
?>