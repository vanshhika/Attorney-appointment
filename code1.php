<?php 
  session_start();
  include('connection.php');
  if(isset($_POST['login']))
{
   
    $email_login=$_POST['username'];
    $password_login=$_POST['password'];
   
    $query="SELECT * FROM advocate WHERE username='$email_login' AND password='$password_login' ";
   
    $query_run=mysqli_query($con,$query);
    if(mysqli_fetch_array($query_run))
    {
        $_SESSION['username'] = $email_login;
        header('Location: advocatedashboard.php');
    }
    else
    {
      $_SESSION['status']='Email/Password is Invalid';
      header('Location:contactadvocate.php');
    }
    }
  
   ?>
