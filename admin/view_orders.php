<?php include 'pages/header.php';?>
<div class="page-content d-flex align-items-stretch">
  <!-- Side Navbar -->
  <nav class="side-navbar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="avatar">
        <img src="img/admin.png" alt="..." class="img-fluid rounded-circle">
      </div>
      <div class="title">
        <h1 class="h4">
        <?php echo $_SESSION['admin']; ?>
        </h1>
        <p>Bussiness Man</p>
      </div>
    </div>
    <ul class="list-unstyled">
      <li>
        <a href="view_customer.php">
          <i class="icon-user">
          </i>View Customer
        </a>
      </li>
      <li >
        <a href="add_product.php">
          <i class="icon-padnote">
          </i>Add Product
        </a>
      </li>
      <li>
        <a href="add_category.php">
          <i class="icon-bill"></i>
          Add Category
        </a>
      </li>
      <li class="">
        <a href="subcategory.php">
          <i class="icon-bill"></i>
          Add SubCategory
        </a>
      </li>
      <li>
        <a href="view_product.php">
          <i class="icon-interface-windows"></i>
          View Product
        </a>
      </li>
      <li class="active">
        <a href="view_orders.php">
          <i class="icon-interface-windows"></i>
          View Orders
        </a>
      </li>
      <li>
        <a href="change_slider.php">
          <i class="icon-picture"></i>
          Change Slider
        </a>
      </li>
      <li>
        <a href="logout.php">
          <i class="icon-paper-airplane"></i>
        Logout </a>
      </li>
    </ul>
  </nav>
  
  <div class="content-inner">
    <!-- Page Header-->
    <header class="page-header">
      <div class="container-fluid">
        <h2 class="no-margin-bottom">Dashboard</h2>
      </div>
    </header>
    <section class="updates padding-top">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <!-- Recent Updates-->
          <div class="col-lg-12">
            <div class="recent-updates card">
              <div class="card-close">
                <div class="dropdown">
                  <button type="button" id="closeCard6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                  <div aria-labelledby="closeCard6" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                </div>
              </div>

              <div class="card-header">
                <h3 class="h4">Contact Details</h3>
              </div>

              <div class="card-body">
                <table id="table" class="table table-bordered table-hover text-black text-center mt-4">
                  <thead class="text-black">
                    <tr class="text-black">
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Message</th>
                      <th>Date</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $query="SELECT * FROM contact";
                    $run=mysqli_query($con,$query);
                    while ($row=mysqli_fetch_array($run))
                    {
                    ?>
                    <tr>
                      <td><?php echo $row['id'];?></td>
                      <td><?php echo $row['name'];?></td>
                      <td><?php echo $row['email'];?></td>
                      <td><?php echo $row['phone'];?></td>
                      <td width="20%"><?php echo $row['message'];?></td>
                      <td width="15%"><?php echo $row['created_at'];?></td>
                      <td>
                        <button class="btn btn-outline-danger  btn-sm deleteConact font-weight-bold">Delete</button>
                      </td>
                    </tr>
                    <?php
                    }
                    ?>
                    
                  </tbody>
                  <!-- <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Category</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </tfoot> -->
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--delete code-->
<div class="modal fade" id="deleteContact">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <!-- Modal Header -->
      <div class="modal-header bg-primary" >
        <h4 class="modal-title text-white">Delete Item Category</h4>
        <button type="button" class="close text-warning" data-dismiss="modal">&times;</button>
      </div>
      <form action="" method="post">
        <!-- Modal body -->
        <div class="modal-body">
          
          <input type="hidden" name="delete_id" id="delete_id" >
          <h4>
          You want to delete -><span id="delete_item"></span>
          
          </h4>
          
        </div>
        <div class="modal-footer">
          
          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
          <button type="submit" name="delete"
          class="btn btn-primary font-weight-bold btn-sm">Delete</button>
        </div>
        
      </form>
      
    </div>
  </div>
</div>
<?php
  if (isset($_POST['delete'])) {
    $delete_id=mysqli_real_escape_string($con , $_POST['delete_id']);
    if (empty($delete_id)) {
?>
<script>
  sweetAlert(
  {
    title: "Somthing went wrong...!",
    text: "Just wait for a Second",
    type: "error"
  },
  function () {
    window.location.href = 'view_orders.php';
  });
</script>
<?php
}
else{
  $query="DELETE FROM contact WHERE id=$delete_id";
  $run=mysqli_query($con , $query);
  if ($run > 0) {
  ?>
<script>
  sweetAlert(
  {
    title: "Deleted Successfully..!",
    text: "Just wait for a Second",
    type: "success"
  },
  function () {
    window.location.href = 'view_orders.php';
  });
</script>
<?php
}
}
}
?>
<!-- Page Footer-->
<?php include 'pages/footer.php';?>

