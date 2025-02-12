<?php
include "configASL.php";
session_start();
if(isset($_POST['roll']))
{
	$_SESSION['roll']=$_POST['roll'];
}

?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Student Feedback System</title>

    <link href="feedbackstep2.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <h1> Student Feedback Step II </h1>

    <div class="main">
        <div class="sub-container">
            <div class="wrapper-box">
                <form method="post" action="feedback_step_3.php">
                    <div class="roll-input">
                        <label for="roll">
                            Roll No: -
                        </label>
                        <input id="roll" type="text" disabled size="5" value="<?php echo $_SESSION['roll'];?>">
                    </div>
                    <div class="select-faculty-box">
                        <label for="faculty">Faculty: -</label>
                        <select name="faculty_id" required>
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
                    <div class="button-box">
                        <input class="back" type="button" onClick="window.location='feedback.php'" value="BACK">
                        <input class="exit" type="button" onClick="window.location='exit.php'" value="EXIT">
                        <input class="next" type="submit" value="NEXT" />
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>