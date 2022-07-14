<?php
include("Connection.php");
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>iCREAM - Ice Cream Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
	<script src="lib/anime.min.js"></script>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
	
	<!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/templatemo-klassy-cafe.css">
	
<!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
	
	<link rel="stylesheet" href="css/templatemo-sixteen.css">
	<style>
		.letter {
		  display: inline-block;
		  opacity: 0;
		}
		.letter2 {
		  display: inline-block;
		}

	</style>
</head>

<body>

    <!-- Navbar Start -->
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky background-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav" style="padding-left:31.75%;padding-right:31.75%;">
                            <li class="scroll-to-section"><a href="home.html">Home</a></li>
                            <li class="scroll-to-section"><a href="home.html">About</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="submenu">
                                <a href="#product">Products</a>
                                <ul>
                                    <li><a href="#">Products Page 1</a></li>
                                    <li><a href="#">Products Page 2</a></li>
                                    <li><a href="#">Products Page 3</a></li>
                                    <li><a href="#">Products Page 4</a></li>
                                </ul>
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#contact">Contact Us</a></li>
							 <li class="scroll-to-section"></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <!-- Navbar End -->




	<!-- Page Content -->

    
    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
              <ul>
                  <li class="active" data-filter="*">All Products</li>
                  <li data-filter=".cny">Chinese New Year Cookies </li>
                  <li data-filter=".hra">Hari Raya Aidilfitri Cookies</li>
                  <li data-filter=".mkf">Mooncake Festival</li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">
						<?php
									$conn = $connect;
										
									if ($conn->connect_error) {
									die("Connection failed: " . $conn->connect_error);
									}
									$sql = "SELECT * FROM product";
									$result = $conn->query($sql);
									if ($result->num_rows > 0) {

									while($row = $result->fetch_assoc()) {
									echo "<div class='".$row["Category"]."'> ";
									echo "<div class='product-item'>" ;
									echo "<a ><img src='images/" . $row["PImage"]. "' alt='' style='object-fit:contain;width:100%;height:500px;'></a>";
									echo "<div class='down-content'>";
									echo "<a><h4>".$row["PName"]."</h4></a>";
									echo "<p>".$row["PDesc"]."</p>";
									echo "</div></div></div>";
									
									}
									echo "";
									} else { echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No results Found !"; }
									?>    
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <footer>
      <div class="container"></div>
        
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="js/custom.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>
	

    <!-- Back to Top --><div id="myBtn">
    <a href="#home" class="btn btn-secondary px-2 back-to-top" ><i class="fa fa-angle-double-up"></i></a>
	<a class="btn btn-secondary px-2 facebook" href="#" style="border-radius:45px;"><i class="fab fa-facebook-f"></i></a>
	<a class="btn btn-secondary px-2 insta" href="#" style="border-radius:45px;"><i class="fab fa-instagram"></i></a>
    <a class="btn btn-secondary px-2 whatsapp" href="#" style="border-radius:45px;"><i class="fab fa-whatsapp"></i></a></div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
	var mybutton = document.getElementById("myBtn");
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	  if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
		mybutton.style.display = "block";
	  } else {
		mybutton.style.display = "none";
	  }
	}
		$(document).ready(function(){
		  // Add smooth scrolling to all links
		  $("a").on('click', function(event) {

			// Make sure this.hash has a value before overriding default behavior
			if (this.hash !== "") {
			  // Prevent default anchor click behavior
			  event.preventDefault();

			  // Store hash
			  var hash = this.hash;

			  // Using jQuery's animate() method to add smooth page scroll
			  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
			  $('html, body').animate({
				scrollTop: $(hash).offset().top
			  }, 800, function(){
		   
				// Add hash (#) to URL when done scrolling (default click behavior)
				window.location.hash = hash;
			  });
			} // End if
		  });
		});
	</script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>


</body>

</html>