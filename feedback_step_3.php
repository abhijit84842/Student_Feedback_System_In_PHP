<?php
include "configASL.php";
session_start();
if(isset($_POST['roll']))
{
	$_SESSION['roll']=$_POST['roll'];
}

if(isset($_POST['faculty_id']))
{
	$_SESSION['faculty_id']=$_POST['faculty_id'];
}
//Fetch Faculty Name
$nm = mysqli_fetch_array(mysqli_query($al, "SELECT * FROM faculty WHERE faculty_id='".$_SESSION['faculty_id']."'"));
$_SESSION['name'] = $nm['name'];
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Student Feedback System</title>
    <link href="feedbackstep3.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <h1> Student Feedback Step III </h1>

    <div class="main">
        <div class="sub-container">
            <div class="wrapper-box">
                <form method="post" action="feedback_step_4.php">
                    <div class="roll-input">
                        <label for="roll">
                            Roll No: -
                        </label>
                        <input id="roll" type="text" disabled size="5" value="<?php echo $_SESSION['roll'];?>">
                        <input type="hidden" value="<?php echo $_SESSION['roll'];?>" name="roll" />
                    </div>
                    <div class="select-faculty-box">
                        <label for="faculty">Faculty: -</label>
                        <input type="text" disabled size="25" value="<?php echo $_SESSION['name'];?>" />
                        <input type="hidden" value="<?php echo $_SESSION['faculty_id'];?>" name="faculty_id" />
                    </div>
                    <div class="select-subject-box">
                        <label for="">Subjects:-</label>
                        <select name="subject" required>
                            <option value="NA" disabled selected> - - Select Subject - -</option>
                            <?php
			$x=mysqli_query($al,"select distinct s1,s2 from faculty WHERE faculty_id='".$_SESSION['faculty_id']."'");
			while($y=mysqli_fetch_array($x))
			{
			 ?>
                            <option value="<?php echo $y['s1'];?>"><?php echo $y['s1'];?></option>
                            <option value="<?php echo $y['s2'];?>"><?php echo $y['s2'];?></option>

                            <?php } ?>
                        </select>

                    </div>
                    <div class="button-box">
                        <input class="back" type="button" onClick="window.location='feedback_step_2.php'" value="BACK">
                        <input class="next" type="submit" value="NEXT" />
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>