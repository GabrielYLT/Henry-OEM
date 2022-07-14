
<?php

$connect = mysqli_connect("localhost","root","","oem");

if(!$connect)
{
		?>
		<script type="text/javascript">
		alert("Server Down");
		</script>
		<?php
	echo("Connect Unsuccessfully");
}else{echo("Connect Successful");}

?>