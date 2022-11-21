<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VTC - Book Online Airline Tickets</title>
  <link rel = "icon" href = "./images/favicon.png" type = "image/x-icon"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css1/style.css">
</head>
<body>
<?php 
session_start(); 
if(isset($_GET["userId"]))
{
	$_SESSION["userId"]=$_GET["userId"];
	header("location: chatbox.php");
}
 ?>
  <header>
    <nav class="navbar">
      <div class="bottom-nav">
        <ul class="bottom-nav-list">  
		<?php 
		   $connect = mysqli_connect("127.0.0.1","root","","ass");
			$users= mysqli_query($connect,"SELECT * FROM user WHERE ID = 35 ")or die(mysqli_error());
			$user=mysqli_fetch_assoc($users);
			echo '<li><a href="main(OP).php?userId='.$user["ID"].'">Online Contact</a></li>'
		   ?>
           <li><a href="#">Booking Record</a></li>
		 
		    
          <li><a href="main(OP).php">My Page</a></li>
          <li><a href="login.php"> Log Out</a></li>
		  
        </ul>
  </div>
        <div class="top-nav">
        <div class="left-nav">
        <a href="index.html"><img src="vtc.png" alt="logo" class="nav-item logo logo-nav"></a>
        <div class="nav-item">
		
        <span class="search">
          <input type="text" placeholder="Search for Ticket" class="search-input"> <a href="#" class="search-btn"><i class="fas fa-search"></i></a>
        </span>
      </div>
    </div>
        <div>
        
          <a href="#" class="nav-item"><i class="fas fa-bars"></i></a>
        </div>
      </div>
    
    </nav>
  </header>
  <main>
    <h2 class="text-center heading-dash"> All Booking Tickets <i class="fas fa-ticket-alt"></i> <span></span></h2>
    
  </main>


</body>
</html>