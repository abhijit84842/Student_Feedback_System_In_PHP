<?php
include("configASL.php");
session_start();
if(isset($_SESSION['aid']))
{
	header("location:home.php");
}
if(!empty($_POST))
{
	$aid=mysqli_real_escape_string($al,$_POST['aid']);
	$pass=mysqli_real_escape_string($al,sha1($_POST['pass']));
	
	$sql=mysqli_query($al,"select * from admin where aid='$aid' and password='$pass'");
	if(mysqli_num_rows($sql)==1)
	{
		$_SESSION['aid']=$_POST['aid'];
		header("location:home.php");
	}
	else
	{
		?>
        <script type="text/javascript">
		alert("Incorrect Admin ID or Password");
		</script>
      <?php
	}
}
?>
<!doctype html>
<html>
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="stylesheet.css">

    <title> Student Feedback System</title>
    <center>
        <h1>Give Your Best Feedback To Us</h1>
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

<!--Use to give the icon-->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>




<div class="main">
    <div class="wrapper1">
        <div class="form-box login">
            <h2>Admin Login</h2>

<form method="post" action="" >
				<div class="input-box">
                    <span class="icon"><ion-icon name="mail-unread"></ion-icon></span>
					<input type="text" name="aid" size="25" required />
                    <label> User Id</label>
				</div>

				<div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
					<input type="password" name="pass" size="25" required />
                    <label>Password</label>
                </div>

    
				
                <button type="submit" value="Login" class="btn">Login</button>
				

                

            </form>
            


        </div>
        
    </div>

   

</div>
<center>

<div class="b1">

<span class="SubHead" style="font: weight 300px;">Give Your Valuable Feedback to us....... <a href="feedback.php" class="link">Click Here</a></span>



</div>

</center>


</body>

</html>

	
    
 