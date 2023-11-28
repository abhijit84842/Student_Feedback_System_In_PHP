<!DOCTYPE html>

<html>

<body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="js/sweetalert.js"> </script>
<?php

    if(isset($_SESSION['status']) && $_SESSION['status'] !='' )
    {
        ?>

        <script>
            swal({
                title: "<?php echo  $_SESSION['status']; ?>",
                //text: "You clicked the button!",
                icon: "<?php echo  $_SESSION['status_code']; ?>",
                button: "Ok. Done!",
            });

        </script>

 

        <?php
        unset($_SESSION['status']);
    }

?>




</body>

</html>

