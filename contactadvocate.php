
<?php 
session_start();

?>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="styles.css">
</head>
<title>Advocate Login</title>
<body> 

<?php 
  if(isset($_SESSION['status']) && $_SESSION['status'] != '')
  {
    echo '<h2 class="bg-danger text-white">'.$_SESSION['status'].'</h2>';
    unset($_SESSION['status']);
  }
 
?>
<form  action="code1.php" method="POST"> 
   <div class="container">
      <div class="col-md-6" style="margin-top: 50px;">
		  	<div class="form-group">    
              <p style="font-size:45px;color:#000000;padding:10% 10% 0% 20%;font-weight: bold;line-height:39px;animation:Slide_up 1.6s ease;">Advocate Login!!</p> <br>
              <input type="text"  class="form-control"  placeholder="User Name" name="username" style="animation:Slide_up 1.8s ease;width: 300px;margin:0% 0% 0% 20%;" /><br><br>
              <input type="password" class="form-control" size="10" placeholder="Password" name="password" style="animation:Slide_up 1.8s ;width:300px;margin:0% 0% 0% 20%;" /> <br><br>    
                <button type="submit"  name="login" class = "btn" style="padding:10px 10px 10px 10px;animation:Slide_up 1.8s ease;margin:0% 0% 0% 30%" >Login</button>              
          </div> 
      </div>
   </div>  
   </form> 
   

       
</body> 


</html>
