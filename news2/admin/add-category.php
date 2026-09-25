<?php include "header.php"; 
if(isset($_POST['save'])){
	

include "config.php";
$catname=$_POST['cat'];

$sql="insert into category(category_name) values('{$catname}')";
$result=mysqli_query($conn,$sql)or die("query failed");
header("location://localhost/news/admin/category.php");
}
?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Add New Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form Start -->
                  <form action="http://localhost/news/admin/add-category.php" method="POST" autocomplete="off">
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="cat" class="form-control" placeholder="Category Name" required>
                      </div>
                      <input type="submit" name="save" class="btn btn-primary" value="Save" required />
                  </form>
                  <!-- /Form End -->
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
