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

if(!empty($_POST))
{
	$fc=$_POST['fc'];
	$sub=$_POST['sub'];
	$subb=$_POST['subb'];
	$faculty_id = uniqid();
	$u=mysqli_query($al,"insert into faculty(faculty_id,name,s1,s2) values('$faculty_id','$fc','$sub','$subb')");
	if($u==true)
	{
		?>
        <script type="application/javascript">
		alert('Successfully added');
		</script>
        <?php }
}
		
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
    
    <link rel="stylesheet" type="text/css" href="managefaculty.css">
    <title>Add Faculty Details</title>

   
</head>

<body>

        <script src="js/sweetalert.js"></script>

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

        <div class="main">
        <form method="post" action="" >
            <center>
                <table border="0" cellspacing="11">
                    <tr>
                        <td><label>* Faculty Name </label></td>
                        <td><input type="text" name="fc" placeholder="Enter Faculty Name" required></td>
                    </tr>


                    <tr>
                        <td><label>* Subject 1</label></td>
                        <td><input type="text" name="sub" placeholder="Enter Subject " required></td>
                    </tr>

                    <tr>
                        <td><label>* Subject 2</label></td>
                        <td><input type="text" name="subb" placeholder="Enter Subject" required></td>
                    </tr>


                </table>
                <button type="submit" value="ADD FACULTY" class="btn btn-success">ADD</button>
            </center>
        </form>
    </div>



</body>

</html>


