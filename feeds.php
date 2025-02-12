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
    <meta charset="utf-8">
    <title>Feedback</title>
    <link href="feeds.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <h1>Check Student's Feedback</h1>

    <div class="main">
        <div class="wrapper">
            <div id="content" align="center">
                <br>
                <br>
                <span class="SubHead">Select faculty and subject</span>
                <br>
                <br>
                <form method="post" action="feeds_2.php">
                    <div id="table">
                        <div class="tr">
                            <div class="td1">
                                <label>Faculty : </label>
                            </div>
                            <div class="td">
                                <select class="select-faculty" name="faculty_id" required>
                                    <option value="NA" disabled selected> - - Select Faculty - -</option>
                                    <?php
			$x=mysqli_query($al,"select * from faculty");
			while($y=mysqli_fetch_array($x))
			{
			 ?>
                                    <option value="<?php echo $y['faculty_id'];?>"><?php echo $y['name'];?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="tr">
                            <div class="td2">
                                <label>Subject : </label>
                            </div>
                            <div class="td">

                                <div class="td">
                                    <select class="select-sub" name="subject" required>
                                        <option value="NA" disabled selected> - - Select Subject - -</option>
                                        <?php
			$x=mysqli_query($al,"select * from faculty");
			while($y=mysqli_fetch_array($x))
			{
			 ?>
                                        <option value="<?php echo $y['s1'];?>"><?php echo $y['s1'];?></option>
                                        <option value="<?php echo $y['s2'];?>"><?php echo $y['s2'];?></option>

                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tdd">
                        <input class="back-input" type="button" onClick="window.location='home.php'"
                            value="BACK">&nbsp;&nbsp;&nbsp;&nbsp;<input class="next-input" type="submit" value="NEXT" />
                    </div>

                    <br>
            </div>
            </form>

        </div>
    </div>
    </div>

</body>

</html>