<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VTC - Book Online Airline Tickets</title>
  <link rel = "icon" href = "./images/favicon.png" type = "image/x-icon"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>	
        <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/44f557ccce.js"></script>

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="./css1/style.css">
</head>
<script>
</script>
<style>
h2.brand {
    /* font-style: italic; */
    font-size: 27px !important;
}
.vl {
  border-left: 6px solid #424242;
  height: 400px;
}
.text-light2 {
    color: #d9d9d9;
}
h3 {
    /* font-weight: lighter !important; */
    font-size: 21px !important;
    margin-bottom: 20px;  
    font-family: Tahoma, sans-serif;
    font-weight: lighter;
}
p.head {
    text-transform: uppercase;
    font-family: arial;
    font-size: 17px;
    margin-bottom: 10px ;
    color: grey;  
}
p.txt {
    text-transform: uppercase;
    font-family: arial;
    font-size: 25px;
    font-weight: bolder;
}
.bord {
    border: 2px solid lightgray;
    /* border-left: 0px !important; */
}
.out {
    /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);   */
    background-color: white;
    padding-left: 25px;
    padding-right: 0px;
    padding-top: 20px;
    border: 2px solid lightgray;
    border-top-left-radius: 25px;
    border-bottom-left-radius: 25px;
}
h2 {
    font-weight: lighter !important;
    font-size: 35px !important;
    margin-bottom: 20px;  
    font-family :'product sans' !important;
    font-weight: bolder;
}
h1 {
    font-weight: lighter !important;
    font-size: 45px !important;
    margin-bottom: 20px;  
    font-family :'product sans' !important;
    font-weight: bolder;
  }
</style>
  
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
			$users= mysqli_query($connect,"SELECT * FROM user WHERE ID = 2 ")or die(mysqli_error());
			$user=mysqli_fetch_assoc($users);
			echo '<li><a href="main(OP).php?userId='.$user["ID"].'">Online Contact</a></li>'
		   ?>
           <li><a href="Booking.php">Booking Record</a></li>
		 
		    
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
  </header>
  <main>
  <div class="container-md mt-5">
    <h2 class="text-center heading-dash"> All Booking Tickets <i class="fas fa-ticket-alt"></i> <span></span></h2>
</div>
    <div class="row mb-5">                                                         
                        <div class="col-8 out">
                            <div class="row ">                                                     
                                <div class="col">
                                    <h2 class="text-secondary mb-0 brand">
                                        Online Flight Booking</h2> 
                                </div>
                                <div class="col">
                                    <h2 class="mb-0">BUSINESS CLASS</h2>
                                </div>
                            </div>
                            <hr>
                            <div class="row mb-3">  
                                <div class="col-4">
                                    <p class="head">Airline</p>
                                    <p class="txt">Hong Kong Airways</p>
                                </div>            
                                <div class="col-4">
                                    <p class="head">from</p>
                                    <p class="txt">Odonhull</p>
                                </div>
                                <div class="col-4">
                                    <p class="head">to</p>
                                    <p class="txt">Oyladnard</p>                
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-8">
                                    <p class="head">Passenger</p>
                                    <p class=" h5 text-uppercase">
                                    Chiu Kai Hei
                                    </p>                              
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <p class="head">departure</p>
                                    <p class="txt mb-1">2022-10-01</p>
                                    <p class="h1 font-weight-bold mb-3"> 17:00</p>  
                                </div>            
                                <div class="col-3">
                                    <p class="head">arrival</p>
                                    <p class="txt mb-1">2022-10-01</p>
                                    <p class="h1 font-weight-bold mb-3"> 00:55</p>  
                                </div>
                                <div class="col-3">
                                    <p class="head">gate</p>
                                    <p class="txt">A22</p>
                                </div>            
                                <div class="col-3">
                                    <p class="head">seat</p>
                                    <p class="txt">11</p>
                                </div>                
                            </div>                    
                        </div>
                        <div class="col-3 pl-0" style="background-color:#376b8d !important;
                            padding:20px; border-top-right-radius: 25px; border-bottom-right-radius: 25px;">
                            <div class="row">  
                                <div class="col">                                    
                                <h2 class="text-light text-center brand">
                                    Online Flight Booking</h2> 
                                </div>                                      
                            </div>                             
                            <div class="row justify-content-center">
                                <div class="col-12">                                    
                                    <img src="airtic.png" class="mx-auto d-block" height="200px" width="200px" alt="">
                                </div>                                
                            </div>
                            <div class="row">
                                <h2 class="text-light2 text-center mt-2 mb-0">
                                &nbsp; Thank you for choosing us. <br> <br>
                                       Please be at the gate at boarding time</h2>   
                            </div>                            
                        </div>   
                        <div class="col-1">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    
                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i> 
                                </button>  
                                <div class="dropdown-menu" style="">
                                    <form class="px-4 py-3" action="ticket.php" method="post">
                                        <input type="hidden" name="ticket_id" value="8">
                                        <button class="btn btn-danger btn-sm" name="cancel_but">
                                            <i class="fa fa-trash" aria-hidden="true"></i> &nbsp; Cancel Ticket</button>
                                    </form>
                                    <form class="px-4 py-3" action="e_ticket.php" target="_blank" method="post">
                                        <input type="hidden" name="ticket_id" value="8">
                                        <button class="btn w-100 mb-3 btn-primary btn-sm" name="print_but">
                                            <i class="fa fa-print" aria-hidden="true"></i> &nbsp; Print Ticket</button>
                                    </form>                                    
                                </div>
                            </div>              
                        </div>                          
                        </div>
                        <div class="row mb-5">                                                         
                        <div class="col-8 out">
                            <div class="row ">                                                     
                                <div class="col">
                                    <h2 class="text-secondary mb-0 brand">
                                        Online Flight Booking</h2> 
                                </div>
                                <div class="col">
                                    <h2 class="mb-0">BUSINESS CLASS</h2>
                                </div>
                            </div>
                            <hr>
                            <div class="row mb-3">  
                                <div class="col-4">
                                    <p class="head">Airline</p>
                                    <p class="txt">Hong Kong Airways</p>
                                </div>            
                                <div class="col-4">
                                    <p class="head">from</p>
                                    <p class="txt">Odonhull</p>
                                </div>
                                <div class="col-4">
                                    <p class="head">to</p>
                                    <p class="txt">Oyladnard</p>                
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-8">
                                    <p class="head">Passenger</p>
                                    <p class=" h5 text-uppercase">
                                    Hunag Yin Chak
                                    </p>                              
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <p class="head">departure</p>
                                    <p class="txt mb-1">2022-07-05</p>
                                    <p class="h1 font-weight-bold mb-3"> 17:00</p>  
                                </div>            
                                <div class="col-3">
                                    <p class="head">arrival</p>
                                    <p class="txt mb-1">2022-07-06</p>
                                    <p class="h1 font-weight-bold mb-3"> 00:55</p>  
                                </div>
                                <div class="col-3">
                                    <p class="head">gate</p>
                                    <p class="txt">A22</p>
                                </div>            
                                <div class="col-3">
                                    <p class="head">seat</p>
                                    <p class="txt">12</p>
                                </div>                
                            </div>                    
                        </div>
                        <div class="col-3 pl-0" style="background-color:#376b8d !important;
                            padding:20px; border-top-right-radius: 25px; border-bottom-right-radius: 25px;">
                            <div class="row">  
                                <div class="col">                                    
                                <h2 class="text-light text-center brand">
                                    Online Flight Booking</h2> 
                                </div>                                      
                            </div>                             
                            <div class="row justify-content-center">
                                <div class="col-12">                                    
                                    <img src="airtic.png" class="mx-auto d-block" height="200px" width="200px" alt="">
                                </div>                                
                            </div>
                            <div class="row">
                                <h2 class="text-light2 text-center mt-2 mb-0">
                                &nbsp; Thank you for choosing us. <br> <br>
                                       Please be at the gate at boarding time</h2>   
                            </div>                            
                        </div>   
</div>
                        <div class="col-1">
                                        <button class="btn btn-danger btn-sm" name="cancel_but">
                                            <i class="fa fa-trash" aria-hidden="true" onclick="delete1()"></i> &nbsp; Cancel Ticket</button>                                
                            
                            </div>              
                        </div>                          
                        </div>
  </main>


</body>
</html>