<!DOCTYPE html>
<html lang="en">
<?php 
require 'init_conn_db.php';   
session_start(); 
	if(isset($_GET["userId"]))
{
	$_SESSION["userId"]=$_GET["userId"];
	header("location: chatbox.php");
}
 ?>
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
  <header>
  <nav class="navbar">
      <div class="bottom-nav">
        <ul class="bottom-nav-list">
		<?php 
    
		   $connect = mysqli_connect("127.0.0.1","root","","ass");
			$users= mysqli_query($connect,"SELECT * FROM user WHERE ID = 2 ")or die(mysqli_error());
			$user=mysqli_fetch_assoc($users);
			echo '<li><a href="main.php?userId='.$user["ID"].'">Online Help</a></li>'
		   ?>		
           <li><a href="booking.php">Booking Record</a></li>
          <li><a href="main.php">My Page</a></li>
          <li><a href="login.php"> Log Out</a></li>
		  
        </ul>
  </div>
        <div class="top-nav">
        <div class="left-nav">
        <a href="index.html"><img src="vtc.png" alt="logo" class="nav-item logo logo-nav"></a>

        
      </div>
    </div>
        <div>
        
          <a href="#" class="nav-item"><i class="fas fa-bars"></i></a>
        </div>
      </div>
    </nav>
<style>
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  float: left;
  width: 30%;
}
.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

  </style>
  </header>
  <main>
  <h2 class="text-center">Searching Airline<i class="fas fa-ticket-alt"></i> <span></span></h2>
  <div class="responsive">
  <div class="gallery">
  <a target="_blank" href="https://www.kansai-airport.or.jp/en/">
    <img src="hero.jpg"  width="600" height="400" >
    </a>
    <div class="desc">Click The Picture About Kansai</div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
  <a target="_blank" href="https://www.shanghaiairport.com/index_en.html">
    <img src="ShangHai.jpg" width="600" height="400">
    </a>
    <div class="desc">Click The Picture About ShangHai </div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="https://www.taoyuan-airport.com/">
    <img src="Taoyuen.jpg" width="600" height="400">
    </a>
    <div class="desc">Click The Picture About TaoYuen </div>
  </div>
</div>
<div>
</div>
  <form action="search.php" method="post">
    <section class="main-section">
    <div class="booking-heading">
    <h4 class="text-center"><span><i class="fas fa-circle"></i>Step 1</span> Please select Departure,Location</h4>
  </div>

  <div class="date-n-cinema">
    
    <select class="pick-multiplex" select value="0" name="dep_city">
      <option value="HK">Hong Kong</option>
    </select>
    <select class="pick-multiplex" select value="0" name="arr_city" >
      <option value="" disabled selected>Select Location</option>
      <option value="Shanghai" jose="">Shanghai Pudong</option>
      <option value="Kansai">Kansai</option>
      <option value="Taoyuan">Taoyuan</option>
    </select>
    
  </div>

  <div class="booking-heading">
    <h4 class="text-center"><span><i class="fas fa-circle"></i>Step 2</span> Please select Depart Date And Time, Number Of Adult and Children</h4>
  </div>



<div class="date-n-cinema">
	<p style="color:white;">Departure date</p>
  <input class="form-control" name="dep_date" type="date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
	
    <select class="pick-multiplex" name="NoOfAdult">
      <option value="" disabled selected>Number Of Adult</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
    </select>
    <select class="pick-multiplex" name="NoOfKid">
      <option value="" disabled selected>Number Of Children</option>
      <option value="1">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
    </select>
    <input class="bi bi-search" type="submit"  value="Search Flights" name="search_but">
  </div>
</form>



  
    </section>
  </main>


</body>
</html>