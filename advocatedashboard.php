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
                header('Location:advocatedashboard.php');
            }
            else{
                echo "Invalid";
                header('Location:contactadvocate.php');
            }
        }
?>


<!doctype html>
<html lang="en">
  <head>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Advocate dashboard</title>


    <link href="offcanvas.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
      <a class="navbar-brand" href="#"><h4>Welcome Advocate!!&nbsp;<?php echo $_SESSION['username'];
      
	  ?> 
		</h4></a></a>
	  <button type="button" class="btn" style="font-size:15px;padding:5px;margin-left:900px;" ><a href="Home.php" style="color:white;">Logout</a></button>
      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault"> </div>
    </nav>

  
    <main role="main" class="container">
	<div class="d-flex align-items-center p-4 my-4 text-white-50 bg-purple rounded box-shadow" style="background-color:purple;color:white;">
        <div class="lh-80" >
          <h2 class="mb-0 text-white lh-100">Notifications</h2>
          
        </div>
      </div>

	  <h1 id="myButton1"></h1>
	 
	  <table id="table1" class="table table-striped">
	  <?php
						$conn = new mysqli("localhost","root","","website");
						$sql1="SELECT * from advocate";
						$result1= $conn->query($sql1);
						// while($rows=$result1->fetch_assoc())
						// {
							if($_SESSION['username']=='vanshika')
							{
						$sql="SELECT * FROM userdata where category='Criminal'";
						
						$result = $conn->query($sql);
					
						
						
	 
		?>
	  <thead>
	  	<th>Name</th>
		<th>Area</th>
		<th>Category</th>
		<th>Date</th>
		<th>Action</th>
		</thead>
		<?php   
                while($rows=$result->fetch_assoc())
                {
					
             ?>
            <tr>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['area'];?></td>
                <td><?php echo $rows['category'];?></td>
                <td><?php echo $rows['date'];?></td>
				<!--<td><button onclick="change()" class="btn btn-success" id="button" >Accept</button>
        <button onclick="change1()" class="btn btn-danger" id="button1">Decline</button> </td>-->
		
	<!--<td>
	<img  src="accept.png"   height='20' title='Accept' onclick="change()"/>
	<img  src="reject.png"   height='20' title='Reject' onclick="change1()"/>
       </td>-->
	   
	   
	   <td>
	   <?php
	   if($rows ['status']==0)
												{	
												echo"<a href=\"accept.php?name=$rows[name]\"><img
												src=\"accept.png\"   height='20' title='Accept'/> </a> &nbsp; &nbsp;
												<a href=\"reject.php?name=$rows[name]\"><img
												src=\"reject.png\"   height='20' title='Reject'/> </a>";
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
	
		<script>
			function change()
			{
			document.getElementById("myButton1").innerHTML = "You Accepted the request";
			var btn = document.getElementById('button');
			var btn1 =document.getElementById('button1');
				btn.remove();
				btn1.remove();	
				document.getElementsByTagName("tr")[1].remove();
				}

				function change1()
				{
			document.getElementById("myButton1").innerHTML = "You Rejected the request";
			var btn = document.getElementById('button');
			var btn1 =document.getElementById('button1');
				btn.remove();
				btn1.remove();	
				document.getElementsByTagName("tr")[1].remove();
				}
					
							</script>
            </tr>
            <?php
                }
			}
		
             ?>
	  </table>
	
	 
	  <table id="table1" class="table table-striped">
	  <?php
						$conn = new mysqli("localhost","root","","website");
						$sql1="SELECT * from advocate";
						$result1= $conn->query($sql1);
						// while($rows=$result1->fetch_assoc())
						// {
							if($_SESSION['username']=='dhruvanshi')
							{
						$sql="SELECT * FROM userdata where category='Accident'";
						
						$result = $conn->query($sql);
					
						
	 
		?>
	  <thead>
	  	<th>Name</th>
		<th>Area</th>
		<th>Category</th>
		<th>Date</th>
		<th>Request</th>
		</thead>
		<?php   
                while($rows=$result->fetch_assoc())
                {
					
             ?>
            <tr>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['area'];?></td>
                <td><?php echo $rows['category'];?></td>
                <td><?php echo $rows['date'];?></td>
				<td>
				<?php
	   if($rows ['status']==0)
												{	
												echo"<a href=\"accept.php?name=$rows[name]\"><img
												src=\"accept.png\"   height='20' title='Accept'/> </a> &nbsp; &nbsp;
												<a href=\"reject.php?name=$rows[name]\"><img
												src=\"reject.png\"   height='20' title='Reject'/> </a>";
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
				<!--<td><button onclick="change()" class="btn btn-success" id="button" >Accept</button>
        <button onclick="change1()" class="btn btn-danger" id="button1">Decline</button> </td>-->
	
		<script>
			function change()
			{
			document.getElementById("myButton1").innerHTML = "You Accepted the request";
			var btn = document.getElementById('button');
			var btn1 =document.getElementById('button1');
				btn.remove();
				btn1.remove();	
				document.getElementsByTagName("tr")[1].remove();
				}

				function change1()
				{
			document.getElementById("myButton1").innerHTML = "You Rejected the request";
			var btn = document.getElementById('button');
			var btn1 =document.getElementById('button1');
				btn.remove();
				btn1.remove();	
				document.getElementsByTagName("tr")[1].remove();
				}
					
							</script>
            </tr>
            <?php
                }
			}
		
             ?>
	  </table>
	  
	  <table id="table1" class="table table-striped">
	  <?php
						$conn = new mysqli("localhost","root","","website");
						$sql1="SELECT * from advocate";
						$result1= $conn->query($sql1);
						// while($rows=$result1->fetch_assoc())
						// {
							if($_SESSION['username']=='priyal')
							{
						$sql="SELECT * FROM userdata where category='Divorce'";
						
						$result = $conn->query($sql);
					
					
						
	 
		?>
	  <thead>
	  	<th>Name</th>
		<th>Area</th>
		<th>Category</th>
		<th>Date</th>
		<th>Action</th>
		</thead>
		<?php   
                while($rows=$result->fetch_assoc())
                {
					
             ?>
            <tr>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['area'];?></td>
                <td><?php echo $rows['category'];?></td>
                <td><?php echo $rows['date'];?></td>
				<td>
	   <?php
	   if($rows ['status']==0)
												{	
												echo"<a href=\"accept.php?name=$rows[name]\"><img
												src=\"accept.png\"   height='20' title='Accept'/> </a> &nbsp; &nbsp;
												<a href=\"reject.php?name=$rows[name]\"><img
												src=\"reject.png\"   height='20' title='Reject'/> </a>";
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
				<!--<td><button onclick="change()" class="btn btn-success" id="button" >Accept</button>
        <button onclick="change1()" class="btn btn-danger" id="button1">Decline</button> </td>-->
	
		<script>
			function change()
			{
			document.getElementById("myButton1").innerHTML = "You Accepted the request";
			var btn = document.getElementById('button');
			var btn1 =document.getElementById('button1');
				btn.remove();
				btn1.remove();	
				document.getElementsByTagName("tr")[1].remove();
				}

				function change1()
				{
			document.getElementById("myButton1").innerHTML = "You Rejected the request";
			var btn = document.getElementById('button');
			var btn1 =document.getElementById('button1');
				btn.remove();
				btn1.remove();	
				document.getElementsByTagName("tr")[1].remove();
				}
					
							</script>
            </tr>
            <?php
                }
			}
		
             ?>
	  </table>
    </main>
	<?php if(isset($message)) { ?> <div class="error"><?php echo $message; ?></div> <?php } ?>


	<?php if(isset($success)) { ?> <div class="success"><?php echo $success;?></div> <?php } ?>
  </body>
</html>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<script type = "text/javascript" >  
	    function preventBack() { window.history.forward(); }  
	    setTimeout("preventBack()", 0);  
	    window.onunload = function () { null };  
	</script>
