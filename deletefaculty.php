<!DOCTYPE html>
<html>
<head>
      <!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
	    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    

    

</head>
<body>

<?php
   include("configASL.php");
	$ud=$_GET['uid'];
    $qr1="DELETE FROM faculty WHERE faculty_id='$ud'";

    
	$cn=$al;

		if($cn->query($qr1)== TRUE)
		{
            $_SESSION['status'] = "Data Deleted Successfully";
            $_SESSION['status_code'] = "success";
           
			header("Location: showfaculty.php");
		}
		else
        { 
            $_SESSION['status'] = " Data Not Deleted";
            $_SESSION['status_code'] = "error";
            header("Location: showfaculty.php");

        }
            