<?php

    include("configASL.php");

    $ud=$_GET["uid"];

    $fn=$_GET["flname"];

    $subj1=$_GET["sub1"];

    $subj2=$_GET["sub2"];

    

    $cn=$al;

    $update="UPDATE faculty SET name='$fn', s1='$subj1', s2='$subj2'  WHERE faculty_id='$ud'  ";
    if ($cn->query($update)===TRUE)
    {
        $_SESSION['status'] = "Data Updated Successfully";
        $_SESSION['status_code'] = "success";

        header("Location: showfaculty.php");
    }
    else
    {   
        $_SESSION['status'] = "Data Not Updated ";
        $_SESSION['status_code'] = "error";

        header("Location: showfaculty.php");

    }



?>
