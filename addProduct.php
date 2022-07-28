<?php
include("Connection.php");
session_start();
error_reporting(0);
?>
<?php
if(!isset($_SESSION['id']))
{
?>
    <script>
    alert("Please login. Thank you!!!");
    </script>
    <?php
    header("refresh:0.001;url=login.php");
    //exit();
	
	
}
?>
?>
<?php
if(isset($_POST["sbtn"]))
{
	$productname = $_POST["pname"];
	$product_image = $_FILES['profileImage']['name'];
	$rmk = $_POST["remark"];
	$cat = $_POST["category"];


	$sql=mysqli_query($connect,"INSERT INTO product(PName,PImage,PDesc,Category)VALUES('$productname','$product_image','$rmk','$cat')");

	header("refresh:0.001;url=addProduct.php");
	$target = 'images/' . $product_image;
        if(move_uploaded_file($_FILES['profileImage']['tmp_name'],$target))
        {
          $msg = "upload successfully";
		  $css_class = "alert-sucess";
        }
        else{
          $msg = "problem occur.";
		  $css_class = "alert-danger";
        }

?>-->
		<script type="text/javascript">
		alert("Added Successfully!");
		
		</script>
		
	<?php 
 header("refresh:0.001;url=addProduct.php");
}
?>-->

<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<title>Add New Product</title>
	<link rel="icon" type="image/x-icon" href="images/icons/d.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
		<!-- CSS Files -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"/>
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
		<!-- CSS Files -->
  <link id="pagestyle" href="assets/css/argon-dashboard.css" rel="stylesheet" />
		<!-- https://fontawesome.com/ -->
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<!-- https://getbootstrap.com/ -->
		<link rel="stylesheet" href="css/tooplate.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<style>
/* width */
::-webkit-scrollbar {
  width: 5px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 2px grey; 
  border-radius: 5px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: grey; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #fff; 
}

	


</style>
		</head>
	
	<body>
<div class="wrapper"  style="background:none;" >
    <div class="sidebar" data-color="orange">
	
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="admin.php" class="simple-text logo-mini">
          Oem
        </a>
        <a href="admin.php" class="simple-text logo-normal">
          Cookies Setting
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper" >
        <ul class="nav">
          <li>
            <a href="admin.php">
              <i class="now-ui-icons education_paper"></i>
              <p>Home Page Settings </p>
            </a>
          </li>
			<li>
				<a href="addProduct.php">
				  <i class="now-ui-icons files_paper"></i>
				  <p>Add Product</p>
				</a>
			</li>
		   <!--<li>
            <a href="admin_list.php">
              <i class="now-ui-icons users_circle-08"></i>
              <p>Product</p>
            </a>
          </li>-->
          <li>
            <a href="Plist.php">
              <i class="now-ui-icons loader_gear"></i>
              <p>Product Settings</p>
            </a>
          </li>
		  <li>
            <a href="logout.php">
              <i class="fa fa-power-off"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
	  </div>
    </div>
    <div class="main-panel" id="main-panel" style="height:100%;background-image: url('images/bg.jpg');background-size: cover;background-attachment: fixed;">
		
		<div style="height:10%;"></div>
			<!-- row -->
        <div class="row tm-content-row tm-mt-big" style="font-family: 'Lato', sans-serif;margin: auto;" >
            <div class="tm-col tm-col-big" style="padding-top:1%;padding-bottom:1%;margin: auto;width: 700px;">
                <div class="tm-block" style="border-radius:10px;border-style: groove;background-color: #ffffff;opacity: 75%;">
                    <div class="row" style="margin: auto;">
                        <div class="col-12" >
                            <h1 class="tm-block-title" style="color:black;">Add New Product</h1>
                        </div>
                    </div>
                    <div class="row" style="margin: auto;">
                        <div class="col-12">
                            <form name = "updatAdmin" method="post" class="tm-signup-form" enctype="multipart/form-data">
							<div >
								<label for="profileImage">Product Image</label>
								<input type="file" name="profileImage" id="profileImage" class="form-control">
							</div>
                                <div class="form-group">
                                    <label for="email">Product Name </label>
                                    <input value="" placeholder="Please Enter Product Name"  name="pname" type="text" class="form-control validate" autocomplete="off" required>
									<span id="erroremail"></span>	
                                </div>
								<div class="form-group" style="margin-bottom:0%;">
                                    <label for="email">Description </label>
                                    <textarea style="border-radius:10px;border: 1px solid #00000030;" value="" rows="4" cols="50"  placeholder="Remarks" id="email" name="remark" type="text" class="form-control validate"></textarea>
									<span id="erroremail"></span>	
                                </div>
								<div class="select">
									<label for="gender">Category &nbsp; </label>
									<select  class="form-control selectList" name="category" id="gender" required>
									<option value="" disabled selected>Please Select Product Category</option>
									<optgroup label="Group">
									<option value="col-lg-4 col-md-4 all cny">New Year Cookies</option>
									<option value="col-lg-4 col-md-4 all hra">Raya Cookies</option>
									<option value="col-lg-4 col-md-4 all mkf">Mooncakes</option>
									</select>
                                </div>
								<hr>
                                <div class="form-group">
                                    <div class="col-12 col-sm-6" style="float:right;">
									
                                        <button style="float:right;" type="submit" name="sbtn" class="btn btn-secondary" onclick="Profile Updated">Add</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
		</div>


	</div>

		<script src="assets/js/core/jquery.min.js"></script>
		<script src="assets/js/core/bootstrap.min.js"></script>
		<script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
		<script src="assets/js/now-ui-dashboard.min.js" type="text/javascript"></script>
	</body>
</html>