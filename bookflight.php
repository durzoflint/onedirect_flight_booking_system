<!DOCTYPE html>
<html lang="en">
<head>
  <title>OneDirect Flight System</title>
  <meta charset="utf-8">
  <!--Bootstrap Plugins-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
    
    .form_elements {
      width: 40%;
      display: inline;
    }
    
    
  </style>
  
  <?php
  	include 'connect.php';
  	//Getting all GET Parameters
  	$flightId = $_GET['id'];
  	$passengers = $_GET['n'];
  	$date1 = $_GET['d'];
  ?>
</head>
<body>
	<!--NavBar-->
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>
	      <a class="navbar-brand" href="#">Logo</a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="./index.php">Home</a></li>
	        <li><a href="#">About Us</a></li>
	        <li><a href="#">Contact Us</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<!--Main Div which contains all the required elements-->
	<div class="container-fluid text-center" style="height: 95vh;">    
	  <div class="row content" style="height: 100%;">
	    <div class="col-sm-2 sidenav">
	      <!--p><a href="#">Link</a></p>
	      <p><a href="#">Link</a></p>
	      <p><a href="#">Link</a></p-->
	    </div>
	    <div class="col-sm-8 text-left"> 
	      <h1>Hi</h1>
	      <p>
	      	<?php
	      		//Adding booking to the database
      			$booking_id = uniqid();
			  	$sql = "INSERT INTO `bookings`(`booking_id`, `date`, `passengers`, `flight_id`) VALUES ('$booking_id', '$date1', '$passengers', '$flightId')";
		        $retval = mysqli_query($connect, $sql);
		    	if($retval===false)
		    		echo "error: " .mysqli_error($connect);
		    	else
		    		echo "Your Booking is Confirmed";
	      	?>
	      </p>
	      <hr>
	      <h3>Booking Details</h3>
	      <p>Your Booking Id is <span class="bg-success"><?php echo $booking_id;?></span></p>
	      <hr>
	      <h3>Email my Booking Id</h3>
	      <p>Enter your Email Id below and your booking id will be mailed to you.</p>
	      <!--Email form to mail the customer his/her booking ID-->
	      <form style="heigth: 100%;" method="POST" action="sendemail.php?bookingid=<?php echo $booking_id;?>">
		  <div class="form-group">
		    <input type="email" required class="form_elements form-control" placeholder="Email Id" name="email" id="email">
		    
		    <button type="submit" class="btn btn-success">Submit</button>
		  </div>
	      </form>
	    </div>
	    <div class="col-sm-2 sidenav">
	      <!--div class="well">
	        <p>ADS</p>
	      </div>
	      <div class="well">
	        <p>ADS</p>
	      </div-->
	    </div>
	  </div>
	</div>
	
</body>
</html>
