<!DOCTYPE html>
<html>


<head>

    <!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title> Faculty Details Update</title>
 


</head>

<body>

    <center><h1>Update Faculty Details</h1></center>

    <div class ="container">
            <?php
                  include("configASL.php");

                $u=$_GET["uid"];

                echo "Welcome to Trainer Details Update Panel";

                $select="SELECT * FROM faculty WHERE faculty_id='$u'";

                $cn=$al;

                $result=$cn->query($select);

            ?>
            <form action="perupdatefaculty.php" method="GET" style="width:50vw; min-width:300px; ">
            <?php
            $row= mysqli_fetch_assoc($result)
            
                ?>

                <table class="table">
                    <tr>
                        <label class="form-label">Faculty Name: </label>
                        <input type="text" class="form-control" <?php echo 'name="flname" '?>  value="<?php echo $row['name']  ?> ">

                    </tr>

                    <tr>
                        <label class="form-label">Subject 1: </label>
                        <input type="text" class="form-control" name="sub1" value="<?php echo $row['s1']  ?> ">

                    </div>


                    </tr>
                        <label class="form-label">Subject 2: </label>
                        <input type="text" class="form-control" name="sub2" value="<?php echo $row['s2']  ?> ">

                    </tr>
                    
                    <tr>.<center>
                    <?php
                        
			            echo "<input type='hidden' name='uid' value='$u'>";

			            echo "<input type='submit' value='Update'>";

                    ?>
                    </tr></center>

                </table>

            </form>
          
            
                
    </div>

  
    <?php include('includes/footer.php')?>


</body>


</html>
