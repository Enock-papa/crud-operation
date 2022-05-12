<!-- Header -->
<?php include "../header.php"?>
<?php include "modals.php"?>

  <div class="container">
    
    <h1 class="text-center mt-4  p-4" style="background-color: #5D6D7E;">CRUD OPERATION:</h1>
    <hr>
      <a href="#" class='btn btn-primary mb-2' data-bs-toggle="modal" data-bs-target="#staticBackdrop"> <i class="bi bi-person-plus"></i>User</a>

        <table id="myTable" class="table table-dark table-hover  table-striped text-muted">
          <thead>
            <tr>
              <th  scope="col">ID</th>
              <th  scope="col">Usename</th>
              <th  scope="col">Email</th>
              <th  scope="col">City</th>
              <th  scope="col" colspan="3" class="text-center">Action</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
 
          <?php
            $query="SELECT * FROM users";               // SQL query to fetch all table data
            $view_users= mysqli_query($conn,$query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_users)){
              $id = $row['id'];                
              $user = $row['username'];        
              $email = $row['email'];         
              $pass = $row['password'];        

              echo "<tr >";
              echo " <th scope='row' >{$id}</th>";
              echo " <td > {$user}</td>";
              echo " <td > {$email}</td>";
              echo " <td >{$pass} </td>";

              echo " <td class='text-center'> <a href='view.php?user_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> View</a> </td>";

              echo " <td class='text-center' > <a href='update.php?edit&user_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> EDIT</a> </td>";

              echo " <td  class='text-center'>  <a href='delete.php?delete={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> DELETE</a> </td>";
              echo " </tr> ";
                  }  
                ?>
              </tr>  
            </tbody>
        </table>
  </div>
    </div>

    


