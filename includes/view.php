<!-- Header -->
<?php  include '../header.php'?>



  <div class="container">
    <h1 class="text-center mt-4 text-info  p-4" style="background-color: #5D6D7E;">View Details:</h1>
    <hr>
    <table id="myTable" class="table table-bordered table-condensed table-hover table-striped text-muted">
      <thead class="table-dark">
        <tr>
          <th  scope="col" >ID</th>
          <th  scope="col">Username</th>
          <th  scope="col">Email</th>
          <th  scope="col"> City</th>
        </tr>  
      </thead>
        <tbody>
          <tr>
               
            <?php
              //  first we check using 'isset() function if the variable is set or not'
              //Processing form data when form is submitted
              if (isset($_GET['user_id'])) {
                  $userid = $_GET['user_id']; 

                  // SQL query to fetch the data where id=$userid & storing data in view_user 
                  $query="SELECT * FROM users WHERE id = {$userid} ";  
                  $view_users= mysqli_query($conn,$query);            

                  while($row = mysqli_fetch_assoc($view_users))
                  {
                      $id = $row['id'];
                      $user = $row['username'];
                      $email = $row['email'];
                      $pass = $row['password'];

                        echo "<tr >";
                        echo " <td >{$id}</td>";
                        echo " <td > {$user}</td>";
                        echo " <td > {$email}</td>";
                        echo " <td >{$pass} </td>"; 
                        echo " </tr> ";
                  }
                }
            ?>
          </tr>  
        </tbody>
    </table>
    
    <a href="../index.php" class="btn btn-primary mb-3">BACK</a>
    
  
  
  </div>

 

  