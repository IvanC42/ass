<?php 
require 'init_conn_db.php';                      
?> 	
<link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200&display=swap" rel="stylesheet">
<head>
<?php 
session_start(); 
	if(isset($_GET["userId"]))
{
	$_SESSION["userId"]=$_GET["userId"];
	header("location: chatbox.php");
}
 ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VTC - Book Online Airline Tickets</title>
  <link rel = "icon" href = "./images/favicon.png" type = "image/x-icon"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css1/style.css">
    <style>   	
.container {
  width: 100%;
}
.progressbar {
  counter-reset: step;
}
.progressbar li {
  list-style: none;
  display: inline-block;
  width: 30.33%;
  position: relative;
  text-align: center;
  cursor: pointer;
}
.progressbar li:before {
  content: counter(step);
  counter-increment: step;
  width: 30px;
  height: 30px;
  line-height : 30px;
  border: 1px solid #ddd;
  border-radius: 100%;
  display: block;
  text-align: center;
  margin: 0 auto 10px auto;
  background-color: #fff;
}
.progressbar li:after {
  content: "";
  position: absolute;
  width: 100%;
  height: 1px;
  background-color: #ddd;
  top: 15px;
  left: -50%;
  z-index : -1;
}
.progressbar li:first-child:after {
  content: none;
}
.progressbar li.active {
  color: green;
}
.progressbar li.active:before {
  border-color: green;
} 
.progressbar li.active + li:after {
  background-color: green;
}
</style>
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
        <div class="nav-item">
		
      </div>
    </div>
        <div>
        </div>
      </div>
    </nav>
</header>
<main>
<div class="container-md mt-5">
      <ul class="progressbar">
        <li>Reservation</li>
        <li>Payment</li>
        <li class="active">Confirmation</li>
      </ul>
    </div>
    <p>
    <?php 
    echo $_SEESION["flight_id"];
    ?>
    </p>
<h1>Confirmation Booking Ticket</h1>
</div>
<fieldset class="row1">
<legend>Passenger Details</legend>
<form action="main.php" method="POST">
<table>
<?php if(isset($_POST)==true && empty($_POST)==false){ 
	$chkbox = $_POST['chk'];                            
	$CreditCardNumber = $_POST['CreditCardNumber'];
	$year = $_POST['Year'];
	$month = $_POST['month'];
	$BX_NAME=$_POST['BX_NAME'];        
	$BX_age=$_POST['BX_age'];	   	
	$BX_gender=$_POST['BX_gender'];    
	$BX_Meal=$_POST['BX_Meal'];	   
    $BX_PassPort=$_POST['BX_PassPort'];
    $BX_Seat=$_POST['BX_Seat'];
    $Email=$_POST['email'];
    $cardName=$_POST['cardName'];
    $mob=$_POST['mob'];
    if($BX_Meal)
    ?>
    <?php
    foreach($BX_NAME as $a => $b){ ?>
        <tr>
        <p>
            <td>
                <?php echo $a+1; ?>
            </td>
            <td>
                <label>Name</label>
                <input type="text" readonly="readonly" name="BX_NAME[$a]" value="<?php echo $BX_NAME[$a]; ?>">
            </td>
            <td>
                <label for="BX_age">Age</label>
                <input type="text" readonly="readonly" class="small"  name="BX_age[]" value="<?php echo $BX_age[$a]; ?>">
            </td>
            <td>
                <label for="BX_gender">Gender</label>
                <input type="text" readonly="readonly" name="BX_gender[]" value="<?php echo $BX_gender[$a]; ?>">
            </td>
            <td>
                <label for="BX_PassPort">PassPort</label>
                <input type="text" readonly="readonly" name="BX_PassPort[]" value="<?php echo $BX_PassPort[$a]; ?>">
            </td>            
            <td>
                <label for="BX_Seat">Seat</label>
                <input type="text" readonly="readonly" name="BX_Seat[]" value="<?php echo $BX_Seat[$a]; ?>">
            </td> 
            <td>
                <label for="BX_Meal">Meal</label>
                <input type="text" readonly="readonly" name="BX_Meal[]" value="<?php echo $BX_Meal[$a];  ?>">
            </td>
        </p>
        </tr>
    <?php } 
}				
?>
</table>
				<div class="clear"></div>
            </fieldset>
            <fieldset class="row2">
                <legend>Payment Details</legend>
                <p>
                <label>Credit Card Number
                </label>
                <input name="CreditCardNumber" type="text" readonly="readonly"  value="<?php echo $CreditCardNumber; ?>">
                <label>Expiry Date
</label>
                <input name="ExpiryDate" type="text" readonly="readonly" value="<?php printf("%s / %s",$month,$year)  ?>">
</p>
                <label>CreditCardName:
                <input name="cardName" readonly="readonly" type="text" value="<?php echo $cardName; ?>">
                <label>Email:
                <input name="email" readonly="readonly" type="text" value="<?php echo $Email; ?>">
                <label>Mobile Phone:
                <input name="mob" readonly="readonly" type="text" value="<?php echo $mob; ?>">
                <div class="clear"></div>
            </fieldset>
            <fieldset class="row3">
            <legend>Ticket Confirm</legend>
            <table cellpadding="10" cellspacing="1">
            <tbody>
                <tr>
                    <th style="text-align: left;"><strong>Name</strong></th>
                    <th style="text-align: left;"><strong>Seat</strong></th>
                    <th style="text-align: right;"><strong>Price</strong></th>
                </tr>	
                <tr>
                <td style="text-align: left; border-bottom: #F0F0F0 1px solid;"><strong>Business Class</strong></th>
                <td style="text-align: left; border-bottom: #F0F0F0 1px solid;"><strong>11</strong></th>
                <td style="text-align: left; border-bottom: #F0F0F0 1px solid;"><strong>4000</strong></th>
                
</tr>
<tr>
                <td style="text-align: left; border-bottom: #F0F0F0 1px solid;"><strong>Business Class</strong></th>
                <td style="text-align: left; border-bottom: #F0F0F0 1px solid;"><strong>12</strong></th>
                <td style="text-align: left; border-bottom: #F0F0F0 1px solid;"><strong>4000</strong></th>
                
</tr>
<tr>
                    <td colspan="3" align=right><strong>Total:8000</strong></td>
                    <td></td>
                </tr>
            </tbody>
        </table>		
<div class="clear"></div>
    </fieldset>
    <div class="clear"></div>
    <input class="submit" type="submit" value="Confirm »">
    <a class="submit" href="buy.php">Back to Chose Seat</a>
    <div class="clear"></div>
</form>
    <?php 
    if(isset($_POST['submit'])){
      extract($_POST);
      $flight_id=$_SESSION["flight_id"];
      $connect = mysqli_connect("127.0.0.1","root","","ass");
    }
        ?>
</main>