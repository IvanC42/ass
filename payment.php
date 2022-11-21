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
      <script>
  function addRow(tableID) {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
  var passenger= document.getElementById("count2").value;
	if(rowCount < passenger){                            // limit the user from creating fields more than your limits
		var row = table.insertRow(rowCount);
		var colCount = table.rows[0].cells.length;
		for(var i=0; i <colCount; i++) {
			var newcell = row.insertCell(i);
			newcell.innerHTML = table.rows[0].cells[i].innerHTML;
		}
	}else{
		 alert("Maximum Passenger per ticket is "+passenger);
			   
	}
}

function deleteRow(tableID) {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	for(var i=0; i<rowCount; i++) {
		var row = table.rows[i];
		var chkbox = row.cells[0].childNodes[0];
		if(null != chkbox && true == chkbox.checked) {
			if(rowCount <= 1) {               // limit the user from removing all the fields
				alert("Cannot Remove all the Passenger.");
				break;
			}
			table.deleteRow(i);
			rowCount--;
			i--;
		}
	}
}
        </script>
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
  <main>
    <body>
    <input type='hidden' id='count2' name='count' value="<?php echo $_POST["count"]; ?>" >
    <div class="container-md mt-5">
      <ul class="progressbar">
        <li>Reservation</li>
        <li class="active">Payment</li>
        <li>Confirmation</li>
      </ul>
    </div>
    <input type='text' id='flight' name='flight' value="<?php echo $_POST["flightID"]; ?>" >
    <form action="Confirmation.php" class="register" method="POST">
<fieldset class="row1">
				<legend>Passenger Details</legend>
				<p> 
					<input type="button" value="Add Passenger" onclick="addRow('dataTable')"> 
					<input type="button" value="Remove Passenger" onclick="deleteRow('dataTable')"> 
					</p><p>(All acions apply only to entries with check marked check boxes only.)</p>
				<p></p>
               <p>
						</p><p></p><table id="dataTable" class="form" border="1">
                  <tbody>
                    
              <tr><td><input type="checkbox" required="required" name="chk[]" checked="checked"></td><td>
							<label>Name</label>
							<input type="text" required="required" name="BX_NAME[]">
						 </td><td>
							<label for="BX_age">Age</label>
							<input type="text" required="required" class="small" name="BX_age[]">
					     </td><td>
							<label for="BX_gender">Gender</label>
							<select id="BX_gender" name="BX_gender[]" required="required">
								<option>....</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						 </td><td>
              <label for="BX_PassPort">PassPort No.</label>
							<input type="text" required="required" class="small" name="BX_PassPort[]">
						 </td>
             <td>
              <label for="BX_Seat">Seat</label>
              <select id="BX_Seat" name="BX_Seat[]" required="required">
								<option>....</option>
                <?php
                $seatID=explode(" ",$_POST["seatID"]);
                for($i=0;$i<count($seatID);$i++){
                  $sett=$seatID[$i];
                  echo "<option value='$sett'>'$sett'</option> ";
                }
                ?>
							</select>
						 </td><td>
              <label for="BX_Meal">Reserve The Meal?</label>
              <select id="BX_Meal" name="BX_Meal[]" required="required">
								<option>....</option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
						 </td>
            </tr></tbody>
                </table>
				<div class="clear"></div>
            </fieldset>
            <fieldset class="row2">
                <legend>Payment Information</legend>
				<p>
                    <label>Credit Card Number
                    </label>
                    <input name="CreditCardNumber" type="text" required="required">
                    <label>Expiry Date
                    </label>
                    <select class="date" name="month">
                        <option value="1">01
                        </option>
                        <option value="2">02
                        </option>
                        <option value="3">03
                        </option>
                        <option value="4">04
                        </option>
                        <option value="5">05
                        </option>
                        <option value="6">06
                        </option>
                        <option value="7">07
                        </option>
                        <option value="8">08
                        </option>
                        <option value="9">09
                        </option>
                        <option value="10">10
                        </option>
                        <option value="11">11
                        </option>
                        <option value="12">12
                        </option>
                    </select>
                    <select name="Year">
                        <option value="2022">2022
                        </option>
                        <option value="2023">2023
                        </option>
                        <option value="2024">2024
                        </option>
                        <option value="2025">2025
                        </option>
                        <option value="2026">2026
                        </option>
                        <option value="2027">2027
                        </option>
                        <option value="2028">2028
                        </option>
                        <option value="2029">2029
                        </option>
                        <option value="2030">2030
                        </option>
                        <option value="2031">2031
                        </option>
                        <option value="2032">2032
                        </option>
                        <option value="2033">2033
                        </option>
                    </select>					
                </p>
                <p>
                <label>Name:
                    </label>
                    <input name="cardName" required="required" type="text">
					<label>Email
                    </label>
                    <input name="email" required="required" type="text">
                </p>
                <p>
                    <label>Mobile *
                    </label>
                    <input name="mob" required="required" type="text">
                    <label>Repeat Mobile*
                    </label>
                    <input name="mob" required="required" type="text">
                    <label>(You will receive the ticket in this )
                    </label>
                </p>
				<div class="clear"></div>
            </fieldset>
            <fieldset class="row4">
            <table cellpadding="10" cellspacing="1">
            <tbody>
                <tr>
                    <th style="text-align: left;"><strong>Ticket Infomration</strong></th>
                </tr>
                <?php
                $category=explode("[cancel]",$_POST["category"]);  
                for($i=0;$i<count($category);$i++){
                echo "
                <tr>
                <td style='text-align: left'>".$category[$i]."<strong></strong></th></tr>";}
?>
<tr>
                    <td colspan="3" align=right><strong><?php echo $_POST["total"];?></strong></td>
                    <td></td>
                </tr>
            </tbody>
        </table>		
<div class="clear"></div>
    </fieldset>
				<div class="clear"></div>
            </fieldset>
            <fieldset class="row4">
                <legend>Further Information</legend>
				<p>The identification details are required during journey. One of the passenger booked on the ticket should have any of the identity cards ( Passport / PAN Card / Driving License / Photo ID card issued by Central / State Govt / Student Identity Card with photograph) during the journey in original. </p>
        <h2> The passenger only can cancel and update their flight THREE Days before the schedule.</h2>
				<div class="clear"></div>
            </fieldset>
            <fieldset class="row5">
                <legend>Terms and Mailing</legend>
                <p class="agreement">
                    <input type="checkbox" value="">
                    <label>*  I accept the <a href="#">Terms and Conditions</a></label>
                </p>
                <p class="agreement">
                    <input type="checkbox" value="">
                    <label>I want to receive personalized offers by your Service</label>
                </p>
				
				<div class="clear"></div>
            <input class="submit" type="submit" value="Confirm »">
            <a class="submit" href="Buy.php">Back to Chose Seat</a>
            <div class="clear"></div>
</form>
</main>
</main>