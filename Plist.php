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
<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
	<link rel="icon" type="image/x-icon" href="images/icons/d.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
		<!-- CSS Files -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="assets/css/now-ui-dashboard.css" rel="stylesheet" />
		<!-- CSS Files -->
		<link id="pagestyle" href="assets/css/argon-dashboard.css" rel="stylesheet" />
		<!-- https://fontawesome.com/ -->
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<!-- https://getbootstrap.com/ -->
		<link rel="stylesheet" href="css/tooplate.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
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
  box-shadow: inset 0 0 2px white; 
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

canvas{

  width:98% !important;
  height:100% !important;

}
#myBtn {
  display: none;
  position: fixed;
  bottom: 10px;
  right: 10px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color:#FF280061;
  color: white;
  cursor: pointer;
  padding: 10px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #FF280090;
}
</style>
		</head>
	
	<body>
<div class="wrapper" style="overflow-x:hidden;height:100%">
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
		
		<!-- row -->
		<div class="row tm-content-row tm-mt-big" style="font-family: 'Lato', sans-serif;padding-left:1%;padding-top:auto%;padding-right:1%;padding-bottom:1%;">
                <div class="col-xl-20 col-lg-12 tm-md-12 tm-sm-12 tm-col" style="padding-top:1%;margin: auto; margin-bottom:2%;">
                    <div class="tm-block h-100" style="border-radius:10px;border-style: groove;background-color: #ffffff;opacity: 75%;">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
						<h2 class="tm-block-title d-inline-block" style="margin-left:3%;margin-top:2%;color:black;font-weight:bold;display:inline;">CNY Product Image List<h2><h2 style="margin-left:3%;margin-top:2%;color:maroon;font-weight:bold;display:inline;"></h2>			
<script>
date = new Date();
year = date.getFullYear();
month = date.getMonth() + 1;
day = date.getDate();
document.getElementById("current_date").innerHTML = month + "-" + day + "-" + year;
</script>
							
                            </div>
							<div>
							<hr>



</div>
                        </div>
                        <div class="table-responsive" style="width: auto%; height:500px; ">
                            <table class="table table-hover table-striped tm-table-striped-even mt-3">
                                <thead>
                                    <tr class="tm-bg-gray">
										<th scope="col" style="text-align:center;color:black;font-weight:bold;">Product Image</th>
										<th scope="col" style="text-align:center;color:black;font-weight:bold;">Product Name</th>
										<th> &nbsp; </th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                	<?php
									$conn = $connect;
									
									if ($conn->connect_error) {
									die("Connection failed: " . $conn->connect_error);
									}
									$sql = "SELECT * FROM product WHERE Category = 'col-lg-4 col-md-4 all cny'";
									$result = $conn->query($sql);
									if ($result->num_rows > 0) {

									while($row = $result->fetch_assoc()) {
									echo "<td style='text-align:center;color:black;font-weight:bold;'><img width='245px' src='images/" . $row["PImage"]. "'></td>" ;
									echo "<td style='text-align:center;color:black;font-weight:bold;'>".$row["PName"]."</td>" ;
                                     ?>  
                                    <td>
									<div class='btn-group'> 
									<a href="editProduct.php?details&id=<?php echo $row['PID'];?>" class="btn btn-secondary" >Edit</a></td>
									</div>
                                    <?php
									echo "</tr>" ;
									}
									echo "</table>";
									} else { echo "0 results"; }
									
									?>    
                                </tbody>
                            </table>
                        </div>
            </div>
        </div>
    </div>
	
	
			<div class="row tm-content-row tm-mt-big" style="font-family: 'Lato', sans-serif;padding-left:1%;padding-top:auto%;padding-right:1%;padding-bottom:1%;">
                <div class="col-xl-20 col-lg-12 tm-md-12 tm-sm-12 tm-col" style="padding-top:1%;margin: auto; margin-bottom:2%;">
                    <div class="tm-block h-100" style="border-radius:10px;border-style: groove;background-color: #ffffff;opacity: 75%;">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
						<h2 class="tm-block-title d-inline-block" style="margin-left:3%;margin-top:2%;color:black;font-weight:bold;display:inline;">Hari Raya Product Image List<h2><h2 style="margin-left:3%;margin-top:2%;color:maroon;font-weight:bold;display:inline;"></h2>			
<script>
date = new Date();
year = date.getFullYear();
month = date.getMonth() + 1;
day = date.getDate();
document.getElementById("current_date").innerHTML = month + "-" + day + "-" + year;
</script>
							
                            </div>
							<div>
							<hr>



</div>
                        </div>
                        <div class="table-responsive" style="width: auto%; height:500px; ">
                            <table class="table table-hover table-striped tm-table-striped-even mt-3">
                                <thead>
                                    <tr class="tm-bg-gray">
										<th scope="col" style="text-align:center;color:black;font-weight:bold;">Product Image</th>
										<th scope="col" style="text-align:center;color:black;font-weight:bold;">Product Name</th>
										<th> &nbsp; </th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                	<?php
									$conn = $connect;
									
									if ($conn->connect_error) {
									die("Connection failed: " . $conn->connect_error);
									}
									$sql = "SELECT * FROM product WHERE Category = 'col-lg-4 col-md-4 all hra'";
									$result = $conn->query($sql);
									if ($result->num_rows > 0) {

									while($row = $result->fetch_assoc()) {
									echo "<td style='text-align:center;color:black;font-weight:bold;'><img width='245px' src='images/" . $row["PImage"]. "'></td>" ;
									echo "<td style='text-align:center;color:black;font-weight:bold;'>".$row["PName"]."</td>" ;
                                     ?>  
                                    <td>
									<div class='btn-group'> 
									<a href="editProduct.php?details&id=<?php echo $row['PID'];?>" class="btn btn-secondary" >Edit</a></td>
									</div>
                                    <?php
									echo "</tr>" ;
									}
									echo "</table>";
									} else { echo "0 results"; }
									
									?>    
                                </tbody>
                            </table>
                        </div>
            </div>
        </div>
    </div>
	
				<div class="row tm-content-row tm-mt-big" style="font-family: 'Lato', sans-serif;padding-left:1%;padding-top:auto%;padding-right:1%;padding-bottom:1%;">
                <div class="col-xl-20 col-lg-12 tm-md-12 tm-sm-12 tm-col" style="padding-top:1%;margin: auto; margin-bottom:2%;">
                    <div class="tm-block h-100" style="border-radius:10px;border-style: groove;background-color: #ffffff;opacity: 75%;">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
						<h2 class="tm-block-title d-inline-block" style="margin-left:3%;margin-top:2%;color:black;font-weight:bold;display:inline;">Mooncake Product Image List<h2><h2 style="margin-left:3%;margin-top:2%;color:maroon;font-weight:bold;display:inline;"></h2>			
<script>
date = new Date();
year = date.getFullYear();
month = date.getMonth() + 1;
day = date.getDate();
document.getElementById("current_date").innerHTML = month + "-" + day + "-" + year;
</script>
							
                            </div>
							<div>
							<hr>



</div>
                        </div>
                        <div class="table-responsive" style="width: auto%; height:500px; ">
                            <table class="table table-hover table-striped tm-table-striped-even mt-3">
                                <thead>
                                    <tr class="tm-bg-gray">
										<th scope="col" style="text-align:center;color:black;font-weight:bold;">Product Image</th>
										<th scope="col" style="text-align:center;color:black;font-weight:bold;">Product Name</th>
										<th> &nbsp; </th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                	<?php
									$conn = $connect;
									
									if ($conn->connect_error) {
									die("Connection failed: " . $conn->connect_error);
									}
									$sql = "SELECT * FROM product WHERE Category = 'col-lg-4 col-md-4 all mkf'";
									$result = $conn->query($sql);
									if ($result->num_rows > 0) {

									while($row = $result->fetch_assoc()) {
									echo "<td style='text-align:center;color:black;font-weight:bold;'><img width='245px' src='images/" . $row["PImage"]. "'></td>" ;
									echo "<td style='text-align:center;color:black;font-weight:bold;'>".$row["PName"]."</td>" ;
                                     ?>  
                                    <td>
									<div class='btn-group'> 
									<a href="editProduct.php?details&id=<?php echo $row['PID'];?>" class="btn btn-secondary" >Edit</a></td>
									</div>
                                    <?php
									echo "</tr>" ;
									}
									echo "</table>";
									} else { echo "0 results"; }
									
									?>    
                                </tbody>
                            </table>
                        </div>
            </div>
        </div>
    </div>
	

		<div class="content" style="min-height:10%">
			<div class="row">
			  
			</div>
			<div class="row">
			  
			</div>
		</div>

</div>
	<script src="assets/js/core/jquery.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>
	<script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
	<script src="assets/js/now-ui-dashboard.min.js" type="text/javascript"></script>
	</body>
</html>