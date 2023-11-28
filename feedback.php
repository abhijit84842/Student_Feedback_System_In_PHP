<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> FeedBack Step 1</title>
<link href="feedback.css" rel="stylesheet" type="text/css" />
</head>

<body>
<center>


    <h1> Student Feedback Step I </h1>
</center>

<div class="main">
<div class="wrapper">
<div id="content" align="center">
<br>
<br>
<form method="post" action="feedback_step_2.php" >
<div id="table">
	
    
    
    <div class="tr">
		<div class="td">
        	<label>Roll No : </label>
        </div>
        <div class="td">
			<select name="roll" required>
            <option value="NA" disabled selected> - - Select Roll No. - -</option>
            <?php
			for($x=1;$x<=200;$x++)
			{
				?>
                <option value="<?php echo $x;?>"><?php echo $x;?></option>
                <?php } ?>
                </select>
        </div>
    </div>
</div>
		
        <div class="tdd">
        	<input type="button" onClick="window.location='index.php'" value="BACK">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="NEXT" />
        </div>
    
    <br>
</div>
</form>
<br>
</div>
</div>

</body>
</html>