<?php

session_start();
include("links.php"); 
$connect = mysqli_connect("127.0.0.1","root","","ass");

$sql ="SELECT * FROM user WHERE ID = '".$_SESSION["userId"]."'";
$users= mysqli_query($connect,$sql)or die(mysqli_error());
	$user= mysqli_fetch_assoc($users);

?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!DOCTYPE html>
<html lang="en">
<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' ></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<style>

.button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 0px ;
  transition-duration: 0.4s;
  cursor: pointer;
 
}

.button1 {
  background-color: white; 
  color: black; 
  border: 1px solid grey;
   width: 99%;
}

.button1:hover {
  background-color: grey;
  color: white;
 .btn{
  display: flex;
  height: 130px;
  justify-content: center;
  align-items: center;
 } 
 .cont{
       height: 300px;
       position: relative;
       border: 2px solid red;
    }
    .cont .btn-cont{
       position: absolute;
       bottom: 20px;
       left: 20px;
    }
}


</style>
  
  <title>VTC - Book Online Airline Tickets</title>
  
</head>
<body>

	<div class="row">
			<div class="col-md-4">
				<div class="model-body" id="msgBox" style="height:1000px; width:500px; overflow-y:scroll; overflow-x:hidden;" >
				<div  align="center">
				
				<p><i class='fa fa-user-circle' style='font-size:34px'></i><?php echo $user["name"]; ?> </p>
				<input type="text" id="fromUser" value = <?php echo $user["ID"]; ?> hidden />
				</div>
				<p style="background-color:gray; font-size:30px; color:white;"><i class="fa fa-comments-o" style="font-size:36px"></i>     Send message to:</p>
				
					
					
						<?php
						if($_SESSION["userId"]=="35"){
						$msgs= mysqli_query($connect,"SELECT * FROM  user WHERE UserAccount='Normal_user' OR UserAccount='Administrator'")
						or die(mysqli_error($connect));
						while($msg = mysqli_fetch_assoc($msgs)){
						echo '<button class="button button1" ><a href="?toUser='.$msg["ID"].'">'.$msg["cname"].'</a></button><br/>';
						}
					
					
					
					}else if($_SESSION["userId"]=="2"){
						
						$msgs= mysqli_query($connect,"SELECT * FROM  user WHERE UserAccount='Operator'")
						or die(mysqli_error($connect));
						while($msg = mysqli_fetch_assoc($msgs)){
						echo '<button class="button button1" ><a href="?toUser='.$msg["ID"].'">'.$msg["cname"].'</a></button><br/>';
						}
						
					}else if($_SESSION["userId"]=="36"){
						
						$msgs= mysqli_query($connect,"SELECT * FROM  user WHERE UserAccount='Operator'")
						or die(mysqli_error($connect));
						while($msg = mysqli_fetch_assoc($msgs)){
						echo '<button class="button button1" ><a href="?toUser='.$msg["ID"].'">'.$msg["cname"].'</a></button><br/>';
						}
						
					}
						
						?>
				
				
				
				
				
				<?php
			
				if($_SESSION["userId"]=="35"){
					echo '<br/><br/><br/><br/><br/><br/><br/><br/>
					<br/><br/><br/><br/><br/><br/><br/><br/>
					<br/><br/><br/><br/><br/><br/><br/><br/>
					<br/><br/><br/><br/><br/><br/><br/>		
					<button class="button button1" id="bt" ><i class="fa fa-arrow-left fa-1x"></i> Leave </button>';
				}else if($_SESSION["userId"]=="2"){
					echo '<br/><br/><br/><br/><br/><br/><br/><br/>
					<br/><br/><br/><br/><br/><br/><br/><br/>
					<br/><br/><br/><br/><br/><br/><br/><br/>
					<br/><br/><br/><br/><br/><br/><br/>
					<br/><br/>						
					<button class="button button1" id="bt1" ><i class="fa fa-arrow-left fa-1x"></i> Leave</button>';
					
				}else if($_SESSION["userId"]=="36"){
					echo '<br/><br/><br/><br/><br/><br/><br/><br/>
					<br/><br/><br/><br/><br/><br/><br/><br/>
					<br/><br/><br/><br/><br/><br/><br/><br/>
					<br/><br/><br/><br/><br/><br/><br/>	
					<br/><br/>					
					<button class="button button1" id="bt2" ><i class="fa fa-arrow-left fa-1x"></i> Leave</button>';
					
				}
				
				
				?>
			
				</div>
			</div>
			<div class="col-md-4">
				 <div class="modal-dialog">
					<div class="modal-content">
							<div class="modal-header">
								<h4><?php 
								if(isset($_GET["toUser"])){
									$userName= mysqli_query($connect,"SELECT * FROM  user WHERE ID='".$_GET["toUser"]."'")
									or die(mysqli_error($connect));
									$Uname = mysqli_fetch_assoc($userName);
									echo '<input type="text" value='.$_GET["toUser"].' id="toUser" hidden/>';
									echo $Uname["cname"];
								}else if($_SESSION["userId"]=="36"){
									$userName= mysqli_query($connect,"SELECT * FROM  user WHERE UserAccount='Operator'")
									or die(mysqli_error($connect));
									$Uname = mysqli_fetch_assoc($userName);
									$_SESSION["toUser"]=$Uname["ID"];
									echo '<input type="text" value='.$_SESSION["toUser"].' id="toUser" hidden/>';
									echo $Uname["cname"];
									
								}else if($_SESSION["userId"]=="2"){
									$userName= mysqli_query($connect,"SELECT * FROM  user WHERE UserAccount='Operator'")
									or die(mysqli_error($connect));
									$Uname = mysqli_fetch_assoc($userName);
									$_SESSION["toUser"]=$Uname["ID"];
									echo '<input type="text" value='.$_SESSION["toUser"].' id="toUser" hidden/>';
									echo $Uname["cname"];
									
								}else {
									$userName= mysqli_query($connect,"SELECT * FROM  user ")
									or die(mysqli_error($connect));
									$Uname = mysqli_fetch_assoc($userName);
									$_SESSION["toUser"]=$Uname["ID"];
									echo '<input type="text" value='.$_SESSION["toUser"].' id="toUser" hidden/>';
									echo $Uname["cname"];
									
								}
								?></h4>
				 
							</div>
							<div class="model-body" id="msgBody" style="height:400px; overflow-y:scroll; overflow-x:hidden;" >
								<?php
								if(isset($_GET["toUser"])){
									$chats= mysqli_query($connect,"SELECT * FROM  chatbox WHERE (FromUser = '".$_SESSION["userId"]."'AND ToUser='".$_GET["toUser"]."')OR 
									(FromUser = '".$_GET["toUser"]."'AND ToUser='".$_SESSION["userId"]."')
									")
									or die(mysqli_error($connect));
									
									
									
								}else{
									$chats= mysqli_query($connect,"SELECT * FROM  chatbox WHERE (FromUser = '".$_SESSION["userId"]."'AND ToUser='".$_SESSION["toUser"]."')OR 
									(FromUser = '".$_SESSION["toUser"]."'AND ToUser='".$_SESSION["userId"]."')
									")
									or die(mysqli_error($connect));
									while($chat = mysqli_fetch_assoc($chats)){
										if($chat["FromUser"]==$_SESSION["userId"]){
											echo "<div style='text-align:right;'>
											<p style='background-color:lightblue; word-wrap:break-word; display:inline-block; 
											padding:5px; border-radius:10px; max width:70%;'>
											".$chat["Message"]."
											
											</p>
											</div>";
										}else{
											echo "<div style='text-align:left;'>
											<p style='background-color:yellow; word-wrap:break-word; display:inline-block; padding:5px; border-radius:10px; max width:70%;'>
											".$chat["Message"]."
											
											</p>
											</div>";
										}
										
									}
									
								}
								
								
								?>
							</div>
								<div class="modal-footer">
									<textarea id="message" class="form-control" style="height:70px;"></textarea>
									<button id="send" class="btn btn-primary" style="height:70%;">send</button>
								</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
 
			</div>
	</div>



</body>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    // Handling search results
    $('#bt').click(function(e){
      
        window.location = "main(OP).php";

    });
});
$(document).ready(function(){
    // Handling search results
    $('#bt1').click(function(e){
      
        window.location = "main.php";

    });
});
$(document).ready(function(){
    // Handling search results
    $('#bt2').click(function(e){
      
        window.location = "main(AD).php";

    });
});
</script>
<script type="text/javascript">
 $(document).ready(function(){
	 
                $("#send").on("click",function(){
                   $.ajax({
					   url:"insertMessage.php",
					   method:"POST",
					   data:{
						   fromUser : $("#fromUser").val(),
						   toUser : $("#toUser").val(),
						   message : $("#message").val()
					   },
					   dataType:"text",
					   success:function(data)
					   {
						   
						  $("#message").val(""); 
					   }
				   });
                });
           setInterval(function(){
			    $.ajax({
					   url:"realTimeChat.php",
					   method:"POST",
					   data:{
						   fromUser : $("#fromUser").val(),
						   toUser : $("#toUser").val(),
						   
					   },
					   dataType:"text",
					   success:function(data)
					   {
						   
						  $("#msgBody").html(data); 
					   }
				   });
		   },700);
            });

</script>

</html>