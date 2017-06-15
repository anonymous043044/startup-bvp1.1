<!DOCTYPE html>
<html>
<head>
	<title>search</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<style >

		
				/*template styling*/

		body{
			overflow-x: hidden;
			overflow-y: scroll;
			
		}
		.container{
			display: flex;
			flex-wrap: wrap;
			margin-left:  auto;	margin-right: auto;	border-style: solid;border-width: 1px;
			margin-top: 10px;
			margin-bottom: 10px;
		}
		.details{
			padding-top: 7px;
		}

		.contact{
			padding-top: 7px;
		}
		#button{
			border-radius: 0px;
		}


		#container1:hover {
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
		}

		
		@media  screen  and (min-width:550px){

			.address{
				width: 75%;	font-size: 20px;
			}
			.goto{
				width: 25%;	font-size: 20px;
			}
			#container2 {
				border-style: solid;border-width: 1px;	width: 100%;

			}
			.rent{
				width: 30%;	padding-left: 40px;	height: 50px;
			}
			.details{
				width: 40%;	text-align: center;	height: 50px;
			}
			.contact{
				width: 30%;	text-align: center;	height: 50px;
			}
			.image{
				width: 60%; margin-right:; height: 200px;border-style: solid;border-width: 1px;
			}
			.seats{
				width: 40%;height: 200px;border-style: solid;border-width: 1px;
		}

		}
		@media screen and (max-width: 550px){
			#container3{
				width: 100%;
				order: -1;
			}
			.image{
				width: 100%;height: 200px;border-style: solid;border-width: 1px;
			}
			.seats{
				width: 100%;height: 30px;border-style: solid;border-width: 1px;
			}
			.address{
				width: 75%;	font-size: 20px;
			}
			#container1{
				width: 50%
				order:0;
				border-style: solid;border-width: 1px;	width: 100%;
			}
			#container2{
				width: 50%;
				order:1;
				border-style: solid;border-width: 1px;	width: 100%;
			}
			.goto{
				width: 25%;	font-size: 20px;
			}
			.rent{
				width: 33.333%;height: 50px;
			}
			.details{
				width: 33.333%;height: 50px;

			}
			.contact{
				width: 33.333%;height: 50px;
			}
		}	

		

	
		/*button style*/
		.subfilter{
			display: flex;
			flex-wrap: wrap;

		}
		.container-fluid1{
			display: flex;
			flex-wrap: wrap;

			float: left;
		}
		.xyz{
			background-color: #4CAF50; /* Green */
			border: none;
			color: white;
			
			border-radius: 0px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			
			
			cursor: pointer;
			-webkit-transition-duration: 0.4s; /* Safari */
			transition-duration: 0.4s;
		}
		.xyz:hover {
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
		} /*start of nd width 650*/
		@media  screen  and (max-width:650px){
			.subfilter{
				margin-top: 100px;
				margin-bottom: 100px;

			}
			#filter{
				width: 100%;
			}
			.btn1{
				order: 0;
				width: 33.33%;
			}
			.btn2{
				order: 1;
				width: 33.33%;

			}
			.btn3{
				order: 2;
				width: 33.33%;
			}
			.btn4{
				order: 3;
				width: 100%;
			}

			.xyz{
				padding: 8px 8px;
				font-size: 12px;
				margin-left: auto;margin-right: auto; margin-top: 10px;

			}
			#submitbutton2{
				padding: 8px;
				margin: 10px; 
			}
		}
		/*end of max width 650*/


		/*start of min width 650*/
		@media  screen  and (min-width:650px){
			.subfilter{
				margin-top: 100px;
				margin-bottom: 100px;
			}
			.xyz{
				padding: 8px 8px;
				font-size: 18px;
				margin: 1px 0px;
			}
			.btn1 , .btn2 , .btn3 , .btn4 {
				float: left;
				padding: 1px;
			}
			#submitbutton2{
				background-color: #C44242;
				color: white;
				margin-top: 1px;
				border-radius: 0;
				text-align: center;
				padding: 6px 8px;
				font-size: 19px;
			}
			#filterup{
				width: 15%;
				order: 0;
			}
			#filter{
				margin-left: auto;
				margin-right: auto;
				
				width: 70%
				order :1;
				
			}
			#filterdown{
				width: 15%;
				order: 2;
			}
		}
		/*end of  min width of 650*/
		/*start of max width of  350*/
		@media  screen  and (max-width:350px){
			.subfilter{
				margin-top: 100px;
				margin-bottom: 100px;

			}
			#filter{
				width: 100%;
			}
			.xyz{
				padding: 4px 4px;
				font-size: 8px;

			}
		}
		/*end of  max width of 350*/
		#submitbutton2{
			background-color: #C44242;
			color: white;

			border-style: none; 
			
			margin-left: auto;
			margin-right: auto;
		}

		


		
	</style>

</head>
<body>
	<!-- navbar start -->
	
	<!-- navbar end -->
	<div class="subfilter" style="padding-top: 100px;">
			<div id="filterup"></div>

			<div id="filter">
				<form action="search.php" method="POST">
					<div class="container-fluid1 dropdown btn1">


						<select name="Gender" class="btn  btn-responsive xyz" style=""><!-- xyz for  styling -->
							<option value="Any">Gender : Any</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
					</div>
					<div class="container-fluid1 btn2">

						<select name="Distance" class="btn  btn-responsive xyz"  ><!-- xyz for  styling -->
							<option value="0">Distance:All</option>

							<option value="3">1-3 km</option>
							<option value="5">3-5 km</option>
							<option value="7">5-7 km</option>
						</select>
					</div>
					<div class="container-fluid1 btn3">


						<select name="Budget" class="btn  btn-responsive xyz" ><!-- xyz for  styling -->
							<option value="0<">Budget : All</option>
							<option value="4<">4000<</option>
							<option value="4+">4000+</option>
							<option value="5+">5000+</option>
						</select>
					</div>
					<div class="container-fluid1 btn4">

						<input type="submit" name="SUBMIT" class=" btn" id="submitbutton2" >
					</div>
				</form>
			</div>

			<div id="filterdown"></div>
		</div>
	<!-- connects to database  WHERE gender=$_POST["Gender"]-->
	<?php require 'connToDB.php';?>
	<br>
	<?php

	$Gender=lcfirst($_POST["Gender"]);
	$DistanceUpperLimit=$_POST["Distance"];
	$DistanceLowerLimit=$_POST["Distance"]-2;
	if(strcmp($Gender,'any')==0){
		$sql=$conn->prepare("SELECT * FROM property_listings WHERE  Distance_College <= '$DistanceUpperLimit' AND Distance_College >= '$DistanceLowerLimit' ORDER BY Distance_College ");
	}
	else{
		$sql=$conn->prepare("SELECT * FROM property_listings WHERE 
			gender = '$Gender' AND Distance_College <= '$DistanceUpperLimit' AND Distance_College >= '$DistanceLowerLimit' ORDER BY Distance_College ");
	}
	$sql->execute();

	while($row=$sql->fetch(PDO::FETCH_ASSOC)){	
		$Property_id=$row["property_id"];
		$Property_Details=$conn->prepare("SELECT property_address,property_owner_phone,property_owner_owner_name FROM property_details WHERE property_id='$Property_id'");
		$Property_Details->execute();
		$Property_Details_Result=$Property_Details->fetch(PDO::FETCH_ASSOC);

		echo 			'
						
	<div class="col-sm-3" >
		
	</div>

	<div class="container col-sm-6 xyz1" id="container1" >
		<div class="address">Address:' .$Property_Details_Result["property_address"] .'</div>
		<div class="goto"><a href="#">Goto</a></div>
		<div class="container" id="container2">
			<div class="rent">Rent:' .$row["rent_pm"] .'</div>
			<div class="details"><button class="btn btn-primary" id="button">Details</button></div>
			<div class="contact"><button class="btn btn-primary" id="button">Contact Owner</button></div>
		</div>
		<div class="container" id="container3" style=" padding-left: 0px;
    padding-right: 0px;">
			<div class="image" style="vertical-align:middle;">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
						<img src="https://placekitten.com/250/135" class="img-responsive" alt="Los Angeles" style="width:100%;">
						</div>

						<div class="item">
							<img src="https://placekitten.com/250/136" class="img-responsive" alt="Chicago" style="width:100%;">
						</div>

						<div class="item">
							<img src="https://placekitten.com/250/138" class="img-responsive" alt="New york" style="width:100%;">
						</div>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>


			</div>
			<div class="seats">Seats</div>
		</div>
	</div>
	<div class="col-sm-3" >

	</div>
						';
	
}


?>


</body>
</html>