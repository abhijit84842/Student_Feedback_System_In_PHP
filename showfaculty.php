<!DOCTYPE html>
<html>
<head>
  <title> Show Faculty </title>
     <!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
	    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="try.css">
</head>

<body>
    <center> <h1> All Faculty Details </h1> </center>

<table class="table table-hover text-center"> 
  <thead class="table-success">
    <tr>
      <th scope="col">Faculty Id</th>
      <th scope="col">Faculty Name</th>
      <th scope="col">Subject 1</th>
      <th scope="col">Subject 2</th>
      <th scop="col">Action</th>
     
    </tr>
  </thead>

  
  
  <tbody>
    <?php
    include("configASL.php");

   
    $h=mysqli_query($al,"select * from faculty");
	while($j=mysqli_fetch_array($h))
	{
		?>
        <tr>
       
       
                
              <tr>
                <td> <?php echo $j["faculty_id"] ?> </td>
                <td> <?php echo $j["name"] ?> </td>
                <td> <?php echo $j["s1"] ?> </td>
                <td> <?php echo $j["s2"] ?> </td>

                <td>
                    <a href="facultyupdate.php ? uid=<?php echo $j['faculty_id'] ?>"  class="link-dark"><i class="fa-solid fa-pen-to-square"></i></a>

                    <a href="deletefaculty.php ? uid=<?php echo $j['faculty_id'] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                </td>
                </tr>

                <?php
    }
        
    ?>


    

  </tbody>
</table>

<?php include('includes/footer.php')?>

</body>

</html>


