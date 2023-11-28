<?php
include("configASL.php");
session_start();
if(!isset($_SESSION['aid']))
{
	header("location:index.php");
}
$aid=$_SESSION['aid'];
$x=mysqli_query($al,"select * from admin where aid='$aid'");
$y=mysqli_fetch_array($x);
$name=$y['name'];

?>
<!doctype html>
<html>
<head>

 <!-- Required meta tags -->
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="home.css">

    <title>Admin Section</title>
    <center>
        <h1>Welcome to Admin Section</h1>
    </center>


</head>

<body>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>


<div id="content" align="center">
<br>
<br>
<span class="SubHead">Admin Name Is :  <?php echo $name;?></span>
<br>
<br>





<!--Nav bar Create-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Feedback System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="manageFaculty.php">Manage Faculty</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="showfaculty.php">Show Faculty</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="feeds.php">Student's Feedback</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="changePass.php">Change Password</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>

            </ul>

        </div>
    </nav>
    
    <div class="m1head">

    <h1  class="h1" align="center"> Student Feedback System </h1>
    
    <h2  class="h2" align="center">Measure student & teacher feedback in educational institutions like schools, </h2> 
    <h3 class= "h3" align="center">colleges, and universities to improve academic experiences using actionable data & insights.  </h3>
    <h4 class="h4" align="center">Capture the feedback of students to measure their satisfaction and experience with your services, staff,</h4>
    <h5 class="h5" align="center">  study material, and peers. </h5>
</div>

</body>
</html>