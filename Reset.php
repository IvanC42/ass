<!doctype html>
<html lang="en">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">



<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
 
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  
  
  
  <script>
  function UpdateSuccess(){
  Swal.fire({
  icon: 'success',
  title: 'Update Success!',
  confirmButtonText: 'OK',
  
}).then(function() {
    window.location = "login.php";
});
 }
  
  
  
  </script>
  

	<body class="img js-fullheight" >

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center text-dark">Reset Password</h3>
		      	<form method="POST"  class="signin-form">
		      		<div class="form-group">
		      			<input type="text" name="np" value="" id="password1" class="form-control-bye" placeholder="new password" required>
		      		</div>
	            <div class="form-group">
					<input id="password"
                            type="password"
                            
                            
                            name="password" class="form-control-bye" value="" placeholder="confirm password" required>
			
				  	            
	            </div>
				
				
				
            <div id="popover-password" class="mb-2">
                <p><span id="result"></span></p>
                <div class="progress">
                    <div id="password-strength"
                    class="progress-bar"
                    role="progressbar"
                    aria-valuenow="40"
                    aria-valuemin="0"
                    aria-valuemax="100"
                    style="width: 0%" >
                    </div>
                </div>
            </div>
            <ul class="list-unstyled" aria-hidden="true">
                <li class="">
                    <span class="low-upper-case"><i class="fa fa-circle" aria-hidden="true"></i>
                        &nbsp;lowercase &amp; uppercase
                    </span>
                </li>
                <li>
                    <span class="one-number"><i class="fa fa-circle" aria-hidden="true"></i>
                        &nbsp;Numbers (0-9)
                    </span>
                </li>
                <li>
                    <span class="one-special-char"><i class="fa fa-circle" aria-hidden="true"></i>
                        &nbsp;Special characters (%&+^^)
                    </span>
                </li>
                <li>
                    <span class="eight-character"><i class="fa fa-circle" aria-hidden="true"></i>
                        &nbsp;Minimum 8 characters
                    </span>
                </li>
				<li>
                    <span class="Same"><i class="fa fa-circle" aria-hidden="true"></i>
                        &nbsp;The above password is same
                    </span>
                </li>
            </ul>
				
				<p  style="color:red;"> <?php
	
	if(isset($_POST['cp'])){
	$np =$_POST['np'];
	$pw =$_POST['password'];		
	if($np!=$pw){
		echo 'Your password does not meet the requirements';
	}else{
		session_start();
		$conn = mysqli_connect("127.0.0.1","root","","ass");
		$sql = "UPDATE user SET password ='".$pw."' WHERE email = '".$_SESSION['EM']."' " ;
		mysqli_query($conn,$sql);
	 ?>
		<script type="text/javascript">
		UpdateSuccess(); 		
	</script>
	<?php
	}
	}
	
 ?> </p>
				
	            <div class="form-group">
	            	<button  name="cp" value="change password" class="w-100  btn-lg btn-primary-hi">change password</button>
	            </div> 
	           
	          </form>
			 
	         
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
<script src="script.js"></script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</body>
</html>

