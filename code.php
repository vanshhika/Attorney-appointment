<?php 
 session_start();
 include('connection.php');  
if(isset($_POST['login']))
{
   
    $email_login=$_POST['username'];
    $password_login=$_POST['password'];

    $query="SELECT * FROM user WHERE username='$email_login' AND password='$password_login' ";
   
    $query_run=mysqli_query($con,$query);
    if(mysqli_fetch_array($query_run))
    {
        $_SESSION['username'] = $email_login;
        header('Location: selectionpage.php');
    }
    else
    {
      $_SESSION['status']='Email/Password is Invalid';
      header('Location:appointment.php');
    }

       
        

    }

    //running
    
    
    // if(is_array($query_run))
    // {
    //     $_SESSION['username']=$query_run['username'];
    // }else{
    //     $message="";
    // }
    // if(isset($_SESSION['username']))
    // {
    //     header('Location:selectionpage.php');
    // }

   

?>