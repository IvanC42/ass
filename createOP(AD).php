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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
  <style >
.center {
  line-height: 200px;
  height: 200px;
  border: 3px solid green;
  text-align: center;
}

.center p {
  line-height: 1.5;
  display: inline-block;
  vertical-align: middle;
  .one {
border-style:solid;
border-color:#0000ff;
} 
.error {
            color: red;
            display: none;
        }
}
</style>
<script>

 function IDNotExist(){
  Swal.fire({
  icon: 'success',
  title: 'Create Success!',
  
  
})
 }
 function NullCheck(){
   
    var txt1=document.getElementById('name');
	var txt2=document.getElementById('email');
	var txt3=document.getElementById('password');
    if (txt1.value==''& txt2.value==''&txt3.value==''){
        txt1.style.borderColor  = '#ff0000';
		txt2.style.borderColor  = '#ff0000';
		txt3.style.borderColor  = '#ff0000';
        return false;
        }else if(txt1.value==''& txt2.value==''){
			txt1.style.borderColor  = '#ff0000';
			txt2.style.borderColor  = '#ff0000';
			 return false;
		}else if(txt3.value==''& txt2.value==''){
			txt3.style.borderColor  = '#ff0000';
			txt2.style.borderColor  = '#ff0000';
			 return false;
		}else if(txt1.value==''& txt3.value==''){
			txt1.style.borderColor  = '#ff0000';
			txt3.style.borderColor  = '#ff0000';
			 return false;
		}else if(txt1.value==''){
			txt1.style.borderColor  = '#ff0000';			
			 return false;
		}else if(txt2.value==''){
			txt2.style.borderColor  = '#ff0000';			
			 return false;
		}else if(txt1.value==''){
			txt1.style.borderColor  = '#ff0000';			
			 return false;
		}
    else{
    txt1.style.borderColor ="grey";
	txt2.style.borderColor ="grey";
	txt3.style.borderColor ="grey";
    return false;
    }
	
    return true;
    }
	
</script>









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
  <main>
  
      <div class="col-md-7 col-lg-5">
          <h2 class="heading-dash"> Create User <i class='fas fa-user-plus'></i></h2>
		
        <form method="POST">
          
            <div class="row g-1">

            <div class="col-sm-10">
              <label for="lastName" class="form-label">	User Name</label>
              <input type="text" id="name" class="name form-control" name="name" REQUIRED>
              
            </div>

            <div class="col-sm-10">
              <label for="username" class="form-label">Email</label>                
                <input type="text" class="form-control"  id="email" name="email" REQUIRED>
            
            </div>

            
            <div class="col-8">
              <label for="address" class="form-label">Password</label>
              <input type="text" class="form-control" id="password" name="password" REQUIRED>
           
            </div>
		
			<div class="col-8">
              <label for="address" class="form-label">Position</label>
              <select  class="form-control" name="User"   required="">
			  <option value="Normal_user">Normal User</option>
			  <option value="Operator">Operator</option>
			  </select>
             
            </div>
			<div class="col-8">
			</br>
          <button class="w-50 btn btn-primary " name="create"> <!--onclick="return NullCheck();"-->  Create</button>
		  
		   </div>
		  </div>
        </form>
      <p></p>
    </div>
	
  </main>

<?php
if(isset($_POST['create'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$UA=$_POST['User'];
	$conn = mysqli_connect("127.0.0.1","root","","ass");
	$sql ="INSERT INTO user(name,email,password,UserAccount) VALUES ('".$name."','".$email."','".$password."','".$UA."')";
	$rs = 	mysqli_query($conn,$sql)
		or die(mysqli_error($conn));
		?>
	 <script type="text/javascript">
		IDNotExist();
	</script>
	 
	 <?php
}





?>
</body>
</html>