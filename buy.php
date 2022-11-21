<?php 
require 'init_conn_db.php';                      
?> 	
<link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200&display=swap" rel="stylesheet">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VTC - Book Online Airline Tickets</title>
  <link rel = "icon" href = "./images/favicon.png" type = "image/x-icon"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="SeatPlan/jquery.seat-charts.css">
  <link rel="stylesheet" href="./SeatPlan/style(buy).css">
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
body {
	font-family: 'Roboto', sans-serif;
  background-color:#fafafa;
}
a {
	color: #b71a4c;
}
.front-indicator {
	width: 145px;
	margin: 5px 32px 15px 32px;
	background-color: #f6f6f6;	
	color: #adadad;
	text-align: center;
	padding: 3px;
	border-radius: 5px;
}
.wrapper {
	width: 100%;
	text-align: center;
  margin-top:150px;
}
.container {
	margin: 0 auto;
	width: 500px;
	text-align: left;
}
.booking-details {
	float: left;
	text-align: left;
	margin-left: 35px;
	font-size: 12px;
	position: relative;
	height: 401px;
}
.booking-details h2 {
	margin: 25px 0 20px 0;
	font-size: 17px;
}
.booking-details h3 {
	margin: 5px 5px 0 0;
	font-size: 14px;
}
div.seatCharts-cell {
	color: #182C4E;
	height: 25px;
	width: 25px;
	line-height: 25px;
	
}
div.seatCharts-seat {
	color: #FFFFFF;
	cursor: pointer;	
}
div.seatCharts-row {
	height: 35px;
}
div.seatCharts-seat.available {
	background-color: #B9DEA0;

}
div.seatCharts-seat.available.business-class {
/* 	background: url(vip.png); */
	background-color: #3a78c3;
}
div.seatCharts-seat.focused {
	background-color: #76B474;
}
div.seatCharts-seat.selected {
	background-color: #E6CAC4;
}
div.seatCharts-seat.unavailable {
	background-color: #472B34;
}
div.seatCharts-container {
	border-right: 1px dotted #adadad;
	width: 200px;
	padding: 20px;
	float: left;
}
div.seatCharts-legend {
	padding-left: 0px;
	position: absolute;
	bottom: 16px;
}
ul.seatCharts-legendList {
	padding-left: 0px;
}
span.seatCharts-legendDescription {
	margin-left: 5px;
	line-height: 30px;
}
.checkout-button {
	display: block;
	margin: 10px 0;
	font-size: 14px;
}
#selected-seats {
	max-height: 90px;
	overflow-y: scroll;
	overflow-x: none;
	width: 170px;
}
</style>
<header>
<div class="container-md mt-5">
    <nav class="navbar">
      <div class="bottom-nav">
        <ul class="bottom-nav-list">
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
        </ul>
  </div>
        <div class="top-nav">
        <div class="left-nav">
        <a href="index.html"><img src="vtc.png" alt="logo" class="nav-item logo logo-nav"></a>
      </div>
    </div>
</div>
        </div>
      </div>
  </header>
  <main>
  <div class="container">
      <ul class="progressbar">
        <li class="active">Reservation</li>
        <li>Payment</li>
        <li>Confirmation</li>
      </ul>
    </div>
  </ul>
  <h1>Flight Infomration</h1>
	<p>
  <?php  
	            if(isset($_POST["flight_id"])){
				$flightID=$_POST["flight_id"];
	            $sql = "SELECT * FROM flight WHERE flight_id='$flightID'";
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt,$sql);                
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                while ($row = mysqli_fetch_assoc($result)) {
					echo  
				   "<p>Airline :".$row['airline']."</p>
				   <p>Departure DateTime: ".$row['departure']."</p>
				   <p>Arrival DateTime:".$row['arrival']."</p>
				   <p>Departure Airport: ".$row['DepatureAirports']."</p>
				   <p>Total Seat: ".$row['Seats']."</p>";
				}
				} ?></p>
  <h1>Choose your Seat<h1>
</div>
<form action="payment.php" method="POST">
<div id="seat-map">
      <div class="front-indicator">Front</div>
    </div>
    <div class="booking-details">
      <h2>Booking Details</h2>
      <h3> Selected Seats (<span name="counter" id="counter">0</span>):</h3>
      <ul id="selected-seats" name="selected-seats">
      </ul>
      Total: <b>$<span id="total" name="total"></span></b>
      <input type="submit" value="Checkout &raquo;" onclick="send()">
      <div id="legend"></div>
    </div> 
  </div>
</div>
<input type='hidden' id='total2' name='total' >
<input type='hidden' id='count2' name='count' >
<input type='hidden' id='category2' name='category' >
<input type='hidden' id='seatID' name='seatID' >
<input type='hidden' id='flightID' name='flightID' value="<?php echo $flightID; ?>">
</form>
<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script> 
<script src="SeatPlan/jquery.seat-charts.js"></script> 
<script>
			var firstSeatLabel = 1;
			$(document).ready(function() {
				var $cart = $('#selected-seats'),
					$counter = $('#counter'),
					$total = $('#total'),
					sc = $('#seat-map').seatCharts({
					map: [
						'ff_ff',
						'ff_ff',
						'ff_ff',
						'ff_ff',
						'ff_ff',
						'_____',
						'ee_ee',
						'ee_ee',
						'ee_ee',
						'ee_ee',
						'ee_ee',
                        'ee___',
						'ee_ee',
						'ee_ee',
						'ee_ee',
						'ee_ee',
						'ee___',
						'ee_ee',
						'ee_ee',
						'ee_ee',
						'eeeee',
					],
					seats: {
						f: {
							price   : 4000,
							classes : 'business-class', 
							category: 'Business Class'
						},
						e: {
							price   : 3092,
							classes : 'economy-class', 
							category: 'Economy Class'
						}					
					
					},
					naming : {
						top : false,
						getLabel : function (character, row, column) {
							return firstSeatLabel++;
						},
					},
					legend : {
						node : $('#legend'),
					    items : [
							[ 'f', 'available',   'Business class' ],
							[ 'e', 'available',   'Economy Class'],
							[ 'f', 'unavailable', 'Already Booked']
					    ]					
					},
					click: function () {
						if (this.status() == 'available') {
							$('<li>'+this.data().category+' Seat # '+this.settings.label+': <b>$'+this.data().price+'</b> <a href="#" class="cancel-cart-item">[cancel]</a></li>')
								.attr('id', 'cart-item-'+this.settings.id)
								.data('seatId', this.settings.id)
								.appendTo($cart);
							$counter.text(sc.find('selected').length+1);
							$total.text(recalculateTotal(sc)+this.data().price);
							$text=this.settings.label+" ";
							document.getElementById("total2").value =$total.text();
							document.getElementById("count2").value =$counter.text();
							document.getElementById("category2").value=$cart.text();
							document.getElementById("seatID").value+=$text;
							
							
							return 'selected';
						} else if (this.status() == 'selected') {
							$counter.text(sc.find('selected').length-1);

							$total.text(recalculateTotal(sc)-this.data().price);
							document.getElementById("total2").value =$total.text();
							document.getElementById("count2").value =$counter.text();
							$('#cart-item-'+this.settings.id).remove();
							$text=this.settings.label;
							$sett=document.getElementById("seatID").value;
							$sett=$sett.replace($text,"");
							document.getElementById("seatID").value=$sett;
						    document.getElementById("category2").value=$cart.text();
							return 'available';
						} else if (this.status() == 'unavailable') {
							return 'unavailable';
						} else {
							return this.style();
						}
					}
				});
				$('#selected-seats').on('click', '.cancel-cart-item', function () {
					sc.get($(this).parents('li:first').data('seatId')).click();
				});

	
				sc.get(['1_2', '4_1', '7_1', '7_2']).status('unavailable');
		
		});

		function recalculateTotal(sc) {
			var total = 0;
			sc.find('selected').each(function () {
				total += this.data().price;
			});
			
			return total;
		}
		
		</script><script type="text/javascript">

</script>
</body>
</main>
