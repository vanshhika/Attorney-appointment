<?php 
session_start();
if(isset($_SESSION['username']))
        {
            echo "valid";
            // header('Location:selectionpage.php');
        }
        else{
            if($_POST['username']==$email_login && $_POST['password']==$password_login)
            {
                $_SESSION['username']=$email_login;
                header('Location:selectionpage.php');
            }
            else{
                echo "Invalid";
                header('Location:appointment.php');
            }
        }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Selection Page</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="offcanvas.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
      <a class="navbar-brand" href="#"><h4>Welcome User!!&nbsp;<?php echo $_SESSION['username'];?> 
      </h4></a>
      <button type="button" class="btn" style="font-size:15px;padding:5px;margin-left:1030px;" ><a href="Home.php" style="color:white;">Logout</a></button>
      </div>
    </nav>

    

    <main role="main" class="container">
    <div class="d-flex align-items-center p-4 my-4 text-white-50 bg-purple rounded box-shadow" style="background-color:purple;color:white;">
        <div class="lh-80" >
          <h2 class="mb-0 text-white lh-100">Select Data</h2>
          
        </div>
      </div>
      <div class="col-md-6" style="margin-top: 50px;position:relative;">
		  	<div class="form-group" style="width:400px;margin-left:0px;"> 
            <form action=""  method="POST">
                <label for="Area" style="font-size:40px;color:#000000;padding:5% 10% 0% 1%;font-weight: bold;line-height:39px;animation:Slide_up 1.2s ease;">Choose Details:</label><br><br>
                <select name="area" style="animation:Slide_up 1.2s ease;width:250px;" class="form-control" required >
                <option value=""  selected>--Select Area-- </option>
                <option value="Maninagar">Maninagar</option>
                <option value="Ghatlodia">Ghatlodia</option>
                <option value="Gurukul">Gurukul</option>
            </select><br>
            <select id="slct1" name="category" onchange="populate(this.id,'advocate')" class="form-control"  style="animation:Slide_up 1.2s ease;width:250px;"  required>
                <option value="starter" selected>--Select Category-- </option>
                <option value="Criminal">Criminal</option>
                <option value="Accident">Accident</option>
                <option value="Divorce">Divorce</option>
        </select>
            <br> 
            <select id="advocate" name="advocate" class="form-control"  style="animation:Slide_up 1.2s ease;width:250px;" required>
            <option  selected>--Select Advocate-- </option>
            </select><br>
        <input class="form-control" name="dateentered" style="animation:Slide_up 1.2s ease;width:250px;" type="date" id="dateControl" />
        <input type="submit" class="btn" style="font-size: 20px;padding: 10px;animation:Slide_up 1.2s ease;margin:5% 0% 0% 15%;background-color:green;color:white;"  value="Submit" name="add">  
   
    </div>
    </div>
    </form>
      </div><br>
      <h2>History</h2>
       <?php
       
		$conn = new mysqli("localhost","root","","website");           
     if(isset($_POST['add']))
     {
     
      $area = mysqli_real_escape_string($conn,$_POST["area"]);
      $category = mysqli_real_escape_string($conn,$_POST["category"]);
      $advocate= mysqli_real_escape_string($conn,$_POST["advocate"]);
      $date = mysqli_real_escape_string($conn,$_POST["dateentered"]);
        
      $sql = "INSERT INTO userdata (name,area,category,advocate,date) VALUES('" . $_SESSION['username'] . "','" . $area . "','" . $category . "','" . $advocate . "','" . $date. "' )";
	  
      mysqli_query($conn, $sql);
    }?> 

      <table class="table table-striped">
  <thead>
    <tr>
    <th>Name</th>
    <th>Date</th>
    <th>Area</th>
    <th>Category</th>
    <th>Status</th>
    </tr>
  </thead>
<?php   // LOOP TILL END OF DATA 
  
            $conn = new mysqli("localhost","root","","website");
            $name=$_SESSION['username'];
            $sql="SELECT * FROM userdata WHERE name='$name'" ;
            $sql1="select * from user u  ";  		
            $result = $conn->query($sql);
            $result1 = $conn->query($sql1);
                while($rows=$result->fetch_assoc())
                {    
             ?>
  <tbody>
  <tr>
  <td><?php echo $rows['name'];?></td>
           <td><?php echo $rows['date'];?></td>
             <td><?php echo $rows['area'];?></td>
                <td><?php echo $rows['category'];?></td>
				<td>
				<?php
					if($rows ['status']==0)
												{	
												echo "<b><p style=color:blue>Pending</p></b>";
												}
												else if($rows['status']==1)
												{
													echo "<b><p style=color:green>ACCEPTED</p></b>";
												}
												else if($rows['status']==2)
												{
													echo "<b><p style=color:red>REJECTED</p></b>";
												}
												?>
				</td>
                </tr>
                <?php
                }
            
                $conn->close(); 
             ?>
  </tbody>
</table>
    </main>

  

  </body>
</html>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</scrip>

<script type = "text/javascript" >  
	    function preventBack() { window.history.forward(); }  
	    setTimeout("preventBack()", 0);  
	    window.onunload = function () { null };  
	</script>



<script>
//
function populate(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	
	if(s1.value == "Criminal"){
		var optionArray = ["|","criminal |Vanshika"];
	} else if(s1.value == "Accident"){
		var optionArray = ["accident|Dhruvanshi",];
	} else if(s1.value == "Divorce"){
		var optionArray = ["divorce|Priyal"];
	}
	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value =pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}
</script>
<script type = "text/javascript" >  
	    function preventBack() { window.history.forward(); }  
	    setTimeout("preventBack()", 0);  
	    window.onunload = function () { null };  
	</script>