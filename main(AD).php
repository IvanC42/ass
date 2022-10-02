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
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  
  
<style>
.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}.styled-table th,
.styled-table td {
    padding: 12px 15px;
}.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}

</style>
</head>

<body>
  <header>
    <nav class="navbar">
      <div class="bottom-nav">
        <ul class="bottom-nav-list">
           <li><a href="createOP(AD).php">Create account</a></li>
          <li><a href="main(AD).php">My Page</a></li>
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
  <main class="text-center" >
    <h2 class="text-center heading-dash"> All User <i class='fas fa-user-alt'></i> <span></span></h2>
	
	 <input type="text" placeholder="Search for User" class="search-input" /><i class='fas fa-tag'></i> 
	 
	 <?php
$conn = mysqli_connect("127.0.0.1","root","","ass");
$sql = "SELECT * FROM user ";
$rs = 	mysqli_query($conn,$sql)
		or die(mysqli_error($conn));
		
		
echo '<form method="post" action="main(AD).php " >'	;	
echo '<table border="1" class="styled-table" style="border:1px solid black;margin-left:auto;margin-right:auto;"><thead><tr>

<th> Name</th>
<th> Password</th>
<th>Email</th>
<th>Position</th>
<th>Update</th>
<th>Delete</th></tr>';
		
while($rc= mysqli_fetch_assoc($rs)){
	printf('<tr>
	<td> %s </td>
	<td>%s </td>
	<td>%s </td>
	<td>%s </td><td><i class="fas fa fa-save" style="font-size:26px"></i> </td><td> <i class="fas fa-trash-alt" style="font-size:26px"></i>  </td></tr>',$rc['name'],$rc['password'],$rc['email'],$rc['UserAccount']);
	
}
 echo'</form>';
 
 ?>
	
  
  </main>


</body>

</html>