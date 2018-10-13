<?php
    require('server.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registeration</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div style = "background-image:url('images/image28.jpg'); min-height:100%;position:relative;background-position:center;background-size:cover;background-repeat:no-repeat;background-attachment:fixed;height:1200px;">
	
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
	    <a href="#" class="navbar-brand">Dyscipher</a>
	    <button class = "navbar-toggler" data-toggle = "collapse" data-target="#menu">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class ="collapse navbar-collapse" id = "menu">
	      	<ul class="navbar-nav ml-auto" >
            <li class="nav-item"><a href="main.php" class = "nav-link">Home</a></li>
	         <li class="nav-item"><a href="signIn.php" class = "nav-link">Sign-In</a></li>
	        </ul>
	    </div>
	</nav>
	<!-- 
<div style = "background-image:url('images/image19.jpg'); min-height:100%;position:relative;background-position:center;background-size:cover;background-repeat:no-repeat;background-attachment:fixed;height:100%;"> -->
 <div class = "container" style ="padding-top: 10%;padding-right: 0px;padding-left: 0px;padding-bottom: 5%;margin: auto;margin-bottom: 5%; align-self: center;">
      <form method = "POST" style = "width: 60%; margin:auto;" action ="signUp.php">
      	<div class = "form-group" style = "color:#000;text-align: center;margin-bottom:10%;">
      		<h2><strong>Sign Up for Dyscipher</strong></h2>
      	</div>
        <div class = "row">
          <div class = "col-md-6">
            <div class = "form-group">
              <label style="color:#fff;">First Name : </label>
              <input type="text" name = "firstName" class ="<?php echo $firstClass;?>" placeholder="First Name" value="<?php echo isset($_POST['firstName']) ? $firstName : "";?>">
              <div class = "invalid-feedback"><?php echo $firstComment; ?></div>
              <div class = "valid-feedback">Looks Good!</div>
            </div>
          </div>
          <div class = "col-md-6">
            <div class = "form-group">
              <label style="color:#fff;">Last Name : </label>
              <input type="text" name = "lastName" value="<?php echo isset($_POST['lastName']) ? $lastName : "";?>" class ="<?php echo $lastClass;?>" placeholder="Last Name">
              <div class = "invalid-feedback"><?php echo $lastComment; ?></div>
              <div class = "valid-feedback">Looks Good!</div>
              
            </div>
          </div>
        </div>
        
        <div class = "form-group">
          <label style="color:#fff;">Email : </label>
          <div class="input-group">
	          <div class="input-group-prepend">
	          	<span class="input-group-text" id="inputGroupPrepend">@</span>
	          </div>
	          <input type="text" name = "email" value="<?php echo isset($_POST['email']) ? $email : "" ; ?>" class ="<?php echo $emailClass;?>" placeholder="example.com">
	          <!--Not using type="email" for server side validation -->
	          <div class = "invalid-feedback"><?php echo $emailComment; ?></div>
	          <div class = "valid-feedback">Looks Good!</div>
          </div>
        </div>
        <div class = "form-group">
          <label style="color:#fff;">Username : </label>
          <input type="text" name = "userName" value="<?php echo isset($_POST['userName']) ? $userName : "" ; ?>" class ="<?php echo $userClass;?>" placeholder="Username cannot be changed later">
          <div class = "invalid-feedback"><?php echo $userComment; ?></div>
          <div class = "valid-feedback">Looks Good!</div>
          
        </div>


      <div class="form-row align-items-center">
          <div class="col-auto my-1">
            <label class="mr-sm-2" style="color:#fff;">Account Type</label>
            <select class="custom-select mr-sm-2" name = "type">
              <option selected>Peer</option>
              <option value="Mentor">Mentor</option>
            </select>
            
          </div>
      </div>
        <div class = "form-group">
          <label style="color:#fff;">Password: </label>
          <input type="password" name = "password" class = "<?php echo $pass1Class;?>" placeholder="Password">
          <div class = "invalid-feedback"><?php echo $pass1Comment; ?></div>
         
        </div>
        <div class = "form-group">
          <label style="color:#fff;">Confirm Password: </label>
          <input type="password" name = "password_2" class ="<?php echo $pass2Class;?>" placeholder="Password">
          <div class = "invalid-feedback"><?php echo $pass2Comment; ?></div>
          
        </div>
        <div class="row">
        	<div class = "col">
        		<div style = "margin-left: 34%;margin-top: 30px;">
        			<button type = "submit" class = "btn btn-light" style="width:200px;" name ="submit" >Sign Up</button>
        		</div>
        	</div>
        </div>
        <p style = "margin-top: 10px;">
        	<a href="signIn.php" style="color:#fff;">Already a member ?</a>
        </p>
        
      </form>
  </div>

	</div>



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
   
</body>
</html>