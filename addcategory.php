<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('config.php');

$add_cat = "SELECT * FROM `addcat`";

$data_cat = mysqli_query($connection, $add_cat);


?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Modal -->
<div class="modal fade" id="AddUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"> Add category Form</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="addcat.php" class="form-group" method="post">
              <div>
                <label for="Cname"> CName </label>
                <input type="text" name="Cname" class="form-control">
              </div>

              <div>
                <label for="Ctype"> Ctype</label>
                <input type="Ctype" name="Ctype" class="form-control">
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label for="Cdesc">Cdesc</label>
                  <input type="desc" name="Cdesc" class="form-control">
                </div>
                <div class="col-md-6">
                  <!-- <label for="cpass"> Confirm Password </label> -->
                  <!-- <input type="hidden" name="cpass" class="form-control"> -->
                </div>
              </div>

              <div class="col-md-6">
                <!-- <label for= phone> Phone </label>
                <input type="number" class="form-control" name="phone"> -->
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" name="upload" class="btn btn-primary">Add Category</button>
            </div>
        </form>

          

    </div>
  </div>
</div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Registered Categories</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Registered Categories</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

        <!-- Main content -->
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Registered  Categories Table</h3>
                <a href="addcat.php" class="btn btn-primary float-right btn-sm" data-bs-toggle="modal" data-bs-target="#AddUserModal"> Add Category</a>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>CId</th>
                    <th>CName</th>
                    <th>CTYPE</th>
                    <th>CDESC</th>
                     
                  </tr>
                  </thead>
                  <tbody>
                <?php
                   
                  while($row1 = mysqli_fetch_assoc($data_cat)){

                ?>

                  <tr>
                    <td><?php echo $row1['id']?></td>
                    <td><?php echo $row1['cname']?></td>
                    <td><?php echo $row1['ctype']?></td>
                    <td><?php echo $row1['cdescription']?></td>
                  </tr>


                  <?php
         }
        
         
        ?>
                  </tbody>
                </table>
              </div>
        </div>

        
 </div>

<?php
include('includes/footer.php');
?>