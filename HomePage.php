
<!doctype html>
<html>
<p id="YES">IT IS ME</p>

<!--START OF FORM HTML-->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="NameTxtBox">Movie Name:</label>
    <input type="text" name="MovieName" id="NameTxtBox"><br>
    <input type="submit" name="submit" value="Submit">
</form>
<!--END OF FORM-->

<?php

if(empty($_POST["MovieName"])){
    echo "<br>" . "GET READY TO READ SOME SCRIPTS!";
}else{
    echo "<br>";
    readfile($_POST["MovieName"]) or die("WE DONT HAVE THAT MOVIE, TRY AGAIN");
}
?>


<script src="script.js"></script>
</html>
