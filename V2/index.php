<?php


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>
      
        Baitul Aman
      
    </title>

    
      <link href="http://fonts.googleapis.com/css?family=Lora:400,400italic|Roboto:100,300,400,700" rel="stylesheet">
      <link href="../assets/css/toolkit-bold.css" rel="stylesheet">
      <link href="../assets/css/application-bold.css" rel="stylesheet">
    
    <style>
      @media (max-width: 768px) and (-webkit-min-device-pixel-ratio: 2) {
        body {
          width: 1px;
          min-width: 100%;
          *width: 100%;
        }
        #stage {
          height: 1px;
          overflow: auto;
          min-height: 100vh;
          -webkit-overflow-scrolling: touch;
        }
      }
	  
		#arabbg{
			background-color:#424242;
		}
		
		#prayerhead{
			width:100%
			height:80px;
			background-color:#D3AF37;
		}
		
		#prayertimebtn{
			width:100%
			height:80px;
		}
		
		.center{
			margin:auto;
		}
		
		.bgBlack{
			background-color:#424242;
		}
		
		.header {
			font-size: 35pt;
			position: relative;
			font-weight:bold;
		}
		
    </style>
  </head>


	<body>

		<div class="stage-shelf hidden" id="sidebar" style="background-color:#000000;">
			<ul class="nav nav-bordered nav-stacked flex-column">
				<li class="nav-header"><small>Baitul Aman Masjid</small></li>
				<li class="nav-item">
					<a class="nav-link" href="">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">Masjid</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">School</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">Events</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">Prayer Time</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">Services</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">Management</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">Contact</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">Donate</a>
				</li>
				<li class="nav-item text-black">
					<a class="nav-link" href="">Sample</a>
				</li>
			</ul>
		</div>


		<div class="stage" id="stage">

			<div class="block block-fill-height app-block-wayne" style="background-image: url(baituloutside.jpg)">

				<button class="btn btn-link stage-toggle" data-target="#stage" data-toggle="stage">
				<span class="icon icon-menu stage-toggle-icon"></span>
					Menu
				</button>

				<div class="block-sm-middle block-xs-bottom">
					<div class="container">
						<div class="row">
							<div class="col-lg-5">
								<h1 class="block-title mb-4">
									<span class="text-ribbon text-ribbon-primary" style="background-color:#D3AF37;">
										<span class="text-black">Baitul Aman Masjid</span>
									</span>
								</h1>
								<p class="lead mt-1">
									<span class="text-ribbon text-ribbon-primary" style="background-color:#D3AF37;">
										<span class="text-black">
											Danforth Community Center
										</span>
									</span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="arabbg" class="">
				<div id="prayerhead" class="text-center"><h1 class="h1" style="text-weight:bold;">Prayer Times</h1></div>
				<div id="prayertimebtn" class="center text-center mt-5">
					<button type="button" style="margin-right:300px;" class="btn btn-outline-warning">View Monthy Timing</button><button type="button" class="btn btn-outline-warning">View Yearly Timing</button>
				</div>
				<div class="container-fluid mt-5">
					<div class="row app-align-center">
						<table class="table table-striped table-hover table-dark">
							<thead style="background-color:#292929;">
								<tr>
									<th scope = "col"><p class="h5" style="text-weight:bold;color:#D3AF37;">Salah</p></th>
									<th scope = "col"><p class="h5" style="text-weight:bold;color:#D3AF37;">Adhan</p></th>
									<th scope = "col"><p class="h5" style="text-weight:bold;color:#D3AF37;">Iqama</p></th>
								</tr>
							</thead>
							<tbody style="background-color:#292929;">
								<tr>
									<th scope = "col" class="text-white">Fajr</th>
									<th scope = "col" class="text-white"> Filler </th>
									<th scope = "col" class="text-white">12:00 AM</th>
								</tr>
								<tr>
									<th scope = "col" class="text-white">Zuhr</th>
									<th scope = "col" class="text-white"> Filler </th>
									<th scope = "col" class="text-white">12:00 AM</th>
								</tr>
								<tr>
									<th scope = "col" class="text-white">Asr</th>
									<th scope = "col" class="text-white"> Filler </th>
									<th scope = "col" class="text-white">12:00 AM</th>
								</tr>
								<tr>
									<th scope = "col" class="text-white">Magrib</th>
									<th scope = "col" class="text-white"> Filler </th>
									<th scope = "col" class="text-white">12:00 AM</th>
								</tr>
								<tr>
									<th scope = "col" class="text-white">Isha</th>
									<th scope = "col" class="text-white"> Filler </th>
									<th scope = "col" class="text-white">12:00 AM</th>
								</tr>
								<tr>
									<th scope = "col" class="text-white">Jumu'ah<br>(1st Kkutbah)</th>
									<th scope = "col" class="text-white"> Filler </th>
									<th scope = "col" class="text-white">12:00 AM</th>
								</tr>
								<tr>
									<th scope = "col" class="text-white">Jumu'ah<br>(2nd Kkutbah)</th>
									<th scope = "col" class="text-white"> Filler </th> 
									<th scope = "col" class="text-white">12:00 AM</th>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			
			<div id="about" class="textCenter mt-3 mb-3 center">
				<div id="AWOLtext" style="color:#D3AF37;"  class="header text-black text-center center">Services</div>
				<hr align="center" width="25%" style="border-color:#292929;">
				<img width="50px;" src="mosque.JPG">
			</div>
  
		</div>

		</div>



    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/tether.min.js"></script>
    <script src="../assets/js/toolkit.js"></script>
    <script src="../assets/js/application.js"></script>
  </body>
</html>