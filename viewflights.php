<!DOCTYPE html>
<html lang="en">
<head>
  <title>OneDirect Flight System</title>
  <meta charset="utf-8">
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
    
    @media (max-width: 600px){
      
    }

  </style>

  <?php
  	include 'connect.php';
  	if (isset($_POST['source'])) {
		$source = $_POST['source'];
	}
	if (isset($_POST['destination'])) {
		$destination = $_POST['destination'];
	}
	if (isset($_POST['date1'])) {
		$date1 = $_POST['date1'];
	}
	if (isset($_POST['passengers'])) {
		$passengers = $_POST['passengers'];
	}
  ?>
</head>
<body>
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
	  
	<div class="container-fluid text-center" style="height: 95vh;">    
	  <div class="row content" style="height: 100%;">
	    <div class="col-sm-2 sidenav">
	      <!--p><a href="#">Link</a></p>
	      <p><a href="#">Link</a></p>
	      <p><a href="#">Link</a></p-->
	    </div>
	    <div class="col-sm-8 text-left"> 
	      <h1>Welcome</h1>
	      <p>Welcome to OneDirect Flight Booking System.</p>
	      <hr>
	      <h3>View Flights</h3>
	      <?php
	      	echo "<p>{$source} -> {$destination}
	      		<br>
	      	      No. of Passengers: {$passengers}
	      	      	<br>
	      	      Date: {$date1}
	      	      </p>";
	      ?>
	      
	      <table class="table table-bordered">
	        <thead>
	          <th>S. No.</th>
	          <th>Flight Name</th>
	          <th>Flight Image</th>
	          <th>Departure Time</th>
	          <th>Arrival Time</th>
	          <th>Duration</th>
	          <th>Price</th>
	          <th>Action</th>
	        </thead>
	        <tbody>
	          <?php
	            $sql = "SELECT * FROM flights WHERE source = '$source' and destination = '$destination'";
	            $result = mysqli_query($connect, $sql);
	            $i = 1;
	            while ($row = mysqli_fetch_array($result))
	            {
	                echo "<tr>
	                    <td>{$i}</td>
	                    <td>{$row['name']}</td>
	                    <td><img height='100px' src='{$row['image_url']}'></td>
	                    <td>{$row['depart_time']}</td>
	                    <td>{$row['arrival_time']}</td>
	                    <td>{$row['duration']}</td>
	                    <td>{$row['price']}</td>
	                    <td><a class='btn btn-success' href='./bookflight.php?id={$row['id']}&n={$passengers}&d={$date1}'>Book</a></td>
	                    </tr>";
	                $i++;
	            }
	          ?>
	        </tbody>
	      </table>
	      
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
