<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="css/style.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" 
  integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
 
</head>
<body onload="fetch()" >

<nav class="navbar navbar-expand-lg p-3 nav_style">
  <a class="navbar-brand pl-5" href="#" >COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiacoronalive.php">IndiaCoronaLive</a>
		</li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">contact</a>
      </li>
    </ul>
  </div>
</nav>


<section class="corono_update container_fluid " >
	<div class=" my-5 ">
		<h3 class="text-center text-uppercase"> covid-19 updates for india</h3>
	</div>
   <div class = " table_responsive">
       <table class=" table table-bordered table-stripped text-centre " id="tbval" >
            <tr>
	          <th class = "text-capitalize" >Last-updated-time</th>
			  <th class = "text-capitalize">States</th>
			  <th class = "text-capitalize">Confirmed </th>
			  <th class = "text-capitalize">Active</th>
			  <th class = "text-capitalize">Recovered</th>
			  <th class = "text-capitalize">Deaths</th>
			  
		  </tr>	
          
          <?php
          $data = file_get_contents('http://api.covid19india.org/data.json');
          $coronalive = json_decode($data,true);
          $statescount = count($coronalive['statewise']);
          $i=1;
          while($i < $statescount){
            ?>
           <tr>
              <td><?php echo $coronalive['statewise'][$i]['lastupdatedtime']?></td> 
              <td><?php echo $coronalive['statewise'][$i]['state']?></td> 
              <td><?php echo $coronalive['statewise'][$i]['confirmed']?></td> 
              <td><?php echo $coronalive['statewise'][$i]['active']?></td> 
              <td><?php echo $coronalive['statewise'][$i]['recovered']?></td> 
              <td><?php echo $coronalive['statewise'][$i]['deaths']?></td> 
              </tr>
             <?php 
          $i++;
}
?>
	   <table>
     </div>
   </div>
</section>


<div class="containter scrolltop float-right pr-5">
	<i class="fa fa-arrow-up"  onclick="topFunction()" id="myBtn" > </i> 
</div>
<!-- *********************************** footer part ****************** -->

<footer class="mt-5">
	<div class=" footer_style bg-dark text-white container-fluid text-center">
		<p>copyright by IT-1 developers</p>
	</div>
</footer>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<script>


// ************ top arrow script ***************

mybutton = document.getElementById("myBtn");
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
mybutton.style.display = "block";
} else {
mybutton.style.display = "none";
}
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
document.body.scrollTop = 0; // For Safari
document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
	  

}

</script>
</body>
</html>


