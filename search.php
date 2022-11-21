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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VTC - Book Online Airline Tickets</title>
  <link rel = "icon" href = "./images/favicon.png" type = "image/x-icon"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css1/style.css">
<style>
table {
  background-color: white;
}
@font-face {
  font-family: 'product sans';
  src: url('assets/css/Product Sans Bold.ttf');
}
h1{
    font-family :'product sans' !important;
	color: #000; ;
	font-size:40px !important;
	margin-top:20px;
	text-align:center;
}

th {
  font-size: 22px;
}
td {
  margin-top: 10px !important;
  font-size: 16px;
  font-weight: bold;
  color: #424242;
}
td.details-control {
    background:url("https://purepng.com/public/uploads/large/purepng.com-eyeseyesorgans-of-the-visual-systemorganisms-visionoptical-systemlightfocuseslensclipart-1421526883579uxc0i.png")  no-repeat center center;
    cursor: pointer;
    background-size: 80px 80px;
}
tr.details td.details-control {
    background: url('close.png') no-repeat center center;
    background-size: 80px 80px;
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
        
          <a href="#" class="nav-item"><i class="fas fa-bars"></i></a>
        </div>
      </div>
    
    </nav>
  </header>
    <main>
      
        <?php if(isset($_POST['search_but'])) { 
            $dep_date = $_POST['dep_date'];                            
            $dep_city = $_POST['dep_city'];  
            $arr_city = $_POST['arr_city'];
            $No_Children=$_POST['NoOfKid'];
            $No_Adult=$_POST['NoOfAdult'];
            $_SESSION['$No_Adult']=$No_Adult;
            $_SESSION['$No_Children']=$No_Children;

            if($dep_city === $arr_city){
              header('Location: index.php?error=sameval');
              exit();    
            }
            if($dep_city === '0') {
              header('Location: index.php?error=seldep');
              exit(); 
            }
            if($arr_city === '0') {
              header('Location: index.php?error=selarr');
              exit();              
            }
            ?>
          <div class="container-md mt-2">
            <h1 class="display-4 text-center text-light"
              >SEARCHING RESULT FROM: <br> <?php echo $dep_city; ?> 
                 to <?php echo $arr_city ?> </h1>
            <form method="post" action='buy.php'>
            <table class="table table-striped table-bordered table-hover">
              <thead>
                <tr class="text-center">
                  <th scope="col"></th>
                  <th scope="col">FlightID</th>
                  <th scope="col">Airline</th>
                  <th scope="col">Departure</th>
                  <th scope="col">Arrival</th>
                  <th scope="col">Depature Airport</th>
                  <th scope="col">Available Seats</th>
                  <th scope="col">Fare</th>
                  <th scope="col">Buy</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sql = 'SELECT * FROM flight WHERE source=? AND Destination =? AND DATE(departure)=? ';
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt,$sql);                
                mysqli_stmt_bind_param($stmt,'sss',$arr_city,$dep_city,$dep_date);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                while ($row = mysqli_fetch_assoc($result)) {
                  $id=(int)$row["flight_id"];
                  $price = (int)$row['Price'];  
                  echo "
                  <tr class='text-center'> 
                    <td class='details-control'></td>
                    <td><input type='hidden' name='flight_id' value='$id'>".$id."</td>            
                    <td>".$row['airline']."</td>
                    <td>".$row['departure']."</td>
                    <td>".$row['arrival']."</td>
                    <td>".$row['DepatureAirports']."</td>
                    <td>".$row['Seats']."</td>                   
                    <td>$ ".$price." up</td>
                    <td><input type='submit' value='Buy''></td></a>
                    ";                
                }
                ?>

              </tbody>
            </table>
              </form>
            <i class="bi bi-arrow-return-left">
            <button type="button" onclick="history.back()">Back</button>
            </i>
              </div>
            <script src="https://code.jquery.com/jquery-3.6.1.min.js"
            integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
            crossorigin="anonymous"></script>
            <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
            <script>
              $(document).ready( function () {
                $('.table').DataTable();
} );
var detailRows=[];
$('.table').DataTable().on('draw', function () {
        detailRows.forEach(function(id, i) {
            $('#' + id + ' td.details-control').trigger('click');
        });
      });
      $('.table tbody').on('click', 'tr td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = $('.table').DataTable().row(tr);
        var idx = detailRows.indexOf(tr.attr('id'));
 
        if (row.child.isShown()) {
            tr.removeClass('details');
            row.child.hide();
 
            detailRows.splice(idx, 1);
        } else {
            tr.addClass('details');
            row.child(format(row.data())).show();
            if (idx === -1) {
                detailRows.push(tr.attr('id'));
            }
        }
    });
  function format(d) {
    return (
        'Available Encnomy Class ' +
        ' : 42' +
        '<br>' +
        'Available Business Class : 20 ' 
    );
}
</script>
          </div>
        <?php } ?>

    </main>