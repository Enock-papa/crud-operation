<!-- Footer -->
<?php include "../header.php"?>

<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['user_id']))
    {
      $userid = $_GET['user_id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM users WHERE id = $userid ";
      $view_users= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_users))
        {
          $id = $row['id'];
          $user = $row['username'];
          $email = $row['email'];
          $pass = $row['password'];
        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {
      $user = $_POST['user'];
      $email = $_POST['email'];
      $pass = $_POST['pass'];
      
      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE users SET username = '{$user}' , email = '{$email}' , password = '{$pass}' WHERE id = $userid";
      $update_user = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>";
      echo "alert('User data updated successfully!')";
     
      echo "</script>";
    } 

?>
