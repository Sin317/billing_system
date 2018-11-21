<?php
	$db = mysqli_connect('localhost','root','','users');
	if(isset($_POST['submit'])){
		$varname=$_POST['username'];
		$varpass=$_POST['password'];
		$varphone=$_POST['phone'];
		$value=$_POST['domain'];
		$SQ="INSERT INTO data_users (Name,Password,Phone,Domain) VALUES ('$varname','$varpass','$varphone','$value')";
		if(!mysqli_query($db,$SQ)){
			die("error:".mysqli_error($db));

		}
	}
	mysqli_close($db);
?>
<!DOCTYPE html>
<head>
	<title> Sign Up </title>
	<link rel="icon" type="image/x-icon" href="icon.png">
	<meta charset='utf-8'>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<style>
 footer {
      background-color: #555;
      color: white;
    }
body{ background-image:url("https://hdwallsource.com/img/2014/9/blur-26347-27038-hd-wallpapers.jpg"); background-repeat:no-repeat; background-position:center; background-size:cover; padding:10px;}
.divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;   
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}

.btn-facebook {
    background-color: #405D9D;
    color: #fff;
}
.btn-twitter {
    background-color: #42AEEC;
    color: #fff;
}
</style>
</head>
<body>
<div id="signform">
<div class="container">
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Create Account</h4>
	<p>
		<a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
		<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
	</p>
	<p class="divider-text">
        <span class="bg-light">OR</span>
    </p>
	<form name="myForm" onsubmit="return validateForm()" method="POST" action="signup.php">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="username" class="form-control" placeholder="User name" type="text" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Email address" type="email" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<select class="custom-select" style="max-width: 120px;">
		    <option selected="">+91</option>
		    <option value="1">+080</option>
		    <option value="2">+198</option>
		    <option value="3">+701</option>
		</select>
    	<input name="phone" class="form-control" placeholder="Phone number" type="text" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		</div>
		<select class="form-control" id="domain_value">
			<option selected=""> Select Domain</option>
			<option>Design</option>
			<option>Operations</option>
			<option>Accounting</option>
		</select>
	</div> <!-- form-group end.// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Create password" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Repeat password" type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"required>
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="domain" class="form-control" placeholder="Domain" type="text" required>
    </div>  <!-- form-group// -->                                      
    <div class="form-group">
     <button type="submit" class="btn btn-primary btn-block" name='submit'>Create Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center"><a href="login.php">Have an account? Log In</a> </p>                                                                 
</form>

</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

<br><br>
</div>
<footer class='container-fluid text-center'>
  <p>&copy;NKN collaborations 2018-2019</p>
</footer>
<script>
function validateForm() {
    var x = document.forms["myForm"]["username"].value;
    var y = document.forms["myForm"]["phone"].value;
    var p = document.forms["myForm"]["password"].value;
    var z = document.forms["myForm"]["domain"].value;
    //var q = document.forms["myForm"]["spent"].value;
    if (x == "" || y=="" || z=="" || p=="") {
        alert("All fields must be filled out");
        return false;
    }
    else{
        window.location.replace("sign_redirect.php");
    }
}

</script>
</body>
</html>
