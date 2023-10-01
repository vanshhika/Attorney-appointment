
<?php 
session_start();

?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="styles.css">
</head>
<style>

.container .btn:hover  {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
  color: white;
}

@keyframes Slide_up {
  0%{
    transform:translateY(250px);
  }
  100%{
    tranform:translateY(0);
  }
}

</style>
<title>Appointment Page</title>
<body>
<?php 
  if(isset($_SESSION['status']) && $_SESSION['status'] != '')
  {
    echo '<h2 class="bg-danger text-white">'.$_SESSION['status'].'</h2>';
    unset($_SESSION['status']);
  }
 
?>
<form action="code.php" name="login" method="POST"> 
   <div class="container">
      <div class="col-md-6" style="margin-top: 50px;">
		  	<div class="form-group">    
              <p style="font-size:45px;color:#000000;padding:10% 10% 0% 20%;font-weight: bold;line-height:39px;animation:Slide_up 1.6s ease;">User Login!</p> <br>
              <input type="text"  class="form-control"  placeholder="User Name" name="username" style="animation:Slide_up 1.8s ease;width: 300px;margin:0% 0% 0% 20%;" /><br>
              <input type="password" class="form-control" size="10" placeholder="Password" name="password" style="animation:Slide_up 1.8s ;width:300px;margin:0% 0% 0% 20%;" /> <br>   
                <button type="submit"  name="login"  class = "btn" style="padding:10px 10px 10px 10px;animation:Slide_up 1.8s ease;margin-left:140px;;" >Login</button>              
          </div> 
      </div> 
   </div>  
   </form>
 
 </body>
</html>

