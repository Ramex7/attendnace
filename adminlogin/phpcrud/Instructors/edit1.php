<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
			$zz = $_POST['id'];
			$iname = $_POST['Fullname'];
			$uname = $_POST['Username'];
			$pass = $_POST['Password'];
	   
	   include('../Connection/connection.php');
		
	 			$query = ' UPDATE instructors set 
	 				ins_name = "'.$iname.'",  
					username="'.$uname.'",
					password="'.$pass.'", WHERE
					ins_id ="'.$zz.'" ';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "index.php";
		</script>
 </body>
</html>