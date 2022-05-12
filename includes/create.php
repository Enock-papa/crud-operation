

<?php 
include('../db.php');
if(isset($_POST['create'])) 
    {

 $user = $_POST['user'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];

  $sql = "INSERT INTO users(username, email, password)
  VALUES('$user','$email','$pass')";

  $result = mysqli_query($conn,$sql);

  if ($result) {
   echo '<script>alert("inserted successfully");</script>';
  }
  else{
    echo "failed: ".mysqli_error($conn);
  }
}

?>

