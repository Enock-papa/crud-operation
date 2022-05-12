<?php include "db.php";
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="https//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Crud operations</title>
</head>
<body> 
<div class="container">
    
    <h1 class="text-center mt-4 text-info  p-3" style="background-color: #5D6D7E;">CRUD OPERATION:</h1>
    <hr>
   

    
        <a href="#" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add New</a>

        <table id="myTable" class="table table-bordered table-condensed table-hover table-striped text-muted">
          <thead class="table-dark">
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

              echo " <td class='text-center'> <a href='includes/view.php?user_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> View</a> </td>";

              
              echo " <td  class='text-center'>  <a href='includes/delete.php?delete={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> DELETE</a> </td>";
              echo " </tr> ";
                  }  
                ?>
              </tr>  
            </tbody>
        </table>


<!-- Add Modal -->
<div class="modal fade text-muted m-2" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add New User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form action="" method="post">
      <div class="form-group">
        <label for="user" class="form-label">Username</label>
        <input type="text" name="user"  class="form-control">
      </div>

      <div class="form-group">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email"  class="form-control">
      </div>
    
      <div class="form-group">
        <label for="pass" class="form-label">City</label>
        <input type="text" name="pass"  class="form-control">
      </div>    
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="create"  class="btn btn-primary">Save</button>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
      </div>
    </div>
  </div>
</div>
      

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

      <!-- jquery cdn Js-->
<script type="text/javascript" src="https//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

</body>
</html>






