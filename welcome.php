
<html>
<body>
Welcome <?php echo $_POST["firstname"]; ?><br>

<?php 


$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"]
echo "$firstname"
 
  if empty($firstname) and empty($lastname){
      echo "Welcome World!"
    elif empty($firstname){
        echo "Welcome $lastname!"
    }elif empty($lastname){
        echo "Welcome $firstname!"
    }else{
        echo "Welcome $firstname $lastname!"
    }
  }
 ?>
</body>
</html>