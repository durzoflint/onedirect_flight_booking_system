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
    
    .form_elements {
      width: 20%;
      display: inline;
    }
    
    @media (max-width: 600px){
      .form_elements {
        margin-bottom: 5px;
        width: 100%;
        display: block;
      }
    }

  </style>
  
  <script>
	function validate() {
	    var source = document.getElementById("source").value;
	    var destination = document.getElementById("destination").value;
	    if(source == destination){
	    	alert("The source and destination cannot be same");
	    	return false;
	    }
	    return true;    
	}
  </script>

  <?php
  	include 'connect.php';
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
	      <h3>Book Flights</h3>
	      <p>Enter the required details to search compatible flights</p>
	      
	      <form style="heigth: 100%;" method="POST" action="viewflights.php" onsubmit="return(validate());">
		  <div class="form-group" >
		    <select class="form_elements form-control" required name="source" id="source">
		      <option disabled selected value="">From</option>
		      <?php
			$sql = "SELECT * FROM cities";
			$result = mysqli_query($connect, $sql);
			while ($row = mysqli_fetch_array($result))
			{
				$name = $row['name'];
				echo "<option value='{$name}'>{$name}</option>";
			}
		      ?>
		    </select>
		    
		    <select class="form_elements form-control" required name="destination" id="destination">
		      <option disabled selected value="">To</option>
		      <?php
			$sql = "SELECT * FROM cities";
			$result = mysqli_query($connect, $sql);
			while ($row = mysqli_fetch_array($result))
			{
				$name = $row['name'];
				echo "<option value='{$name}'>{$name}</option>";
			}
		      ?>
		    </select>
		    
		    <input type="date" required class="form_elements form-control" min="2018-08-23" max="2100-12-31" name="date1" id="date1">
		    
		    <input type="number" required class="form_elements form-control" name="passengers" id="passengers" value="1" min="1">
		    
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
