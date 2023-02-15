<?php 
include('../functions/myfunction.php');
    if(isset($_SESSION['auth']))
    {
        if($_SESSION['admin'] != 1)
        {     
            redirect("../index.php", "bn ko phai admin");
        }
    }
    else
    {
        redirect("../login.php", "tiep tuc login");
    }
?>
