    <?php
    session_start();//session is a way to store information (in variables) to be used across multiple pages.  
   
    
    if(isset($_SESSION['username']))
    {
            session_destroy();
            header("Location: Home.php");
    }
    else
    {
        header('Location:appointment.php');
    }
    ?>
