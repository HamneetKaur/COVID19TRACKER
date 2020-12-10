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
        <a class="nav-link" href="#preventid">Preventions</a>
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
<div class="main_header">
	<div class="row w-100 h-100 row_style">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2 " >
			<div class="leftside w-100 h-100 d-flex justify-content-center
			 align-items-center eksath_anime">
				<img src="images/eksath.png" width="300" height="300" >
			</div>
		</div>
		
		<div class="col-lg-7 col-md-7 col-12 order-1 order-lg-2 " >
			<div class="rightside  w-100 h-100 d-flex justify-content-center align-items-center text-left">
				<h1>Let's Stay Safe & Fight Together <br> Against Cor
				<span class="corona_anime"><img src="images/corona.png"></span>na Virus</h1>
			</div>
		</div>
	</div>
</div>

<!-- ******************* Project done start *********************** -->
	
<section class="corono_update container_fluid " >
	<div class=" mb-3 ">
		<h3 class="text-center text-uppercase"> covid-19 updates</h3>
	</div>
   <div class = " table_responsive">
       <table class=" table table-bordered table-stripped text-centre " id="tbval" >
            <tr>
	          <th>Country</th>
			  <th>TotalConfirmed</th>
			  <th>TotalRecovered </th>
			  <th>TotalDeaths</th>
			  <th>NewConfirmed</th>
			  <th>NewRecovered</th>
			  <th>NewDeaths</th>
		  </tr>	
	   <table>
     </div>
   </div>
</section>

<!-- ******************* Project done ends *********************** -->

<!-- *********************** about section start ****************** -->

<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
	<div class="section_header text-center mb-5 mt-4">
		<h1 class="">About COVID-19</h1>
	</div>

	<div class="row pt-5">
		<div class="col-lg-5 col-md-6  col-6 ml-5">
			<!-- <div class="  "> -->
				<img src="images/aboutcorona.jpg" class="img-fluid">
			<!-- </div> -->
		</div>

		<div class="col-lg-6  col-md-6 col-6">
				<h2 class="pb-3">What is COVID-19 (Corona-Virus)</h2>
				<p>COVID-19 is the infectious disease caused by the most recently discovered coronavirus. This new virus and
				 disease were unknown before the outbreak began in Wuhan, China, in December 2019.</p>
				<p>Coronaviruses are a large family of viruses which may cause illness in animals or humans.
				  In humans, several coronaviruses are known to cause respiratory
				 infections ranging from the common cold to more severe diseases such as Middle East Respiratory
				  Syndrome (MERS) and Severe Acute Respiratory Syndrome (SARS). 
				 The most recently discovered coronavirus causes coronavirus disease COVID-19.
				</p>
			
		</div>
	</div>
</div>


<!-- ********************************* symptoms section ****************************** -->

<div class="container-fluid  pt-5 pb-5" id="sympid">
	<div class="section_header text-center mb-5 mt-4">
		<h1 class="">Coronavirus symptoms </h1>
	</div>

	<div class="container">
		<div class="row">
			<div class= "col-lg-4 col-md-4 col-12 mt-5 " > 
				<figure class="text-center">
					<img src="images/cough.png" class="img-fluid" width="120" height="120">
					<figcaption > cough </figcaption>
				</figure>
			</div>

			<div class= "col-lg-4 col-md-4 col-12 mt-5 " > 
				<figure  class="text-center">
					<img src="images/runnynose.png" class="img-fluid" width="120" height="120">
					<figcaption > runny nose </figcaption>
				</figure>
			</div>

			<div class= "col-lg-4 col-md-4 col-12 mt-5 " > 
				<figure  class="text-center">
					<img src="images/fever.png" class="img-fluid" width="120" height="120">
					<figcaption > fever </figcaption>
				</figure>
			</div>

			<div class= "col-lg-4 col-md-4 col-12 mt-5 " > 
				<figure  class="text-center">
					<img src="images/sick.png" class="img-fluid" width="120" height="120">
					<figcaption > cold </figcaption>
				</figure>
			</div>

			<div class= "col-lg-4 col-md-4 col-12 mt-5 " > 
				<figure  class="text-center" >
					<img src="images/week.png" class="img-fluid" width="120" height="120">
					<figcaption > tiredness </figcaption>
				</figure>
			</div>

			<div class= "col-lg-4 col-md-4 col-12 mt-5 " > 
				<figure  class="text-center">
					<img src="images/breath.png" class="img-fluid" width="120" height="120">
					<figcaption > difficulty breathing (severe cases) </figcaption>
				</figure>
			</div>
		</div>
	</div>

</div>

<!-- *************************************** Prevention section *************** -->

<div class="container-fluid sub_section pt-5 pb-5" id="preventid">
	<div class="section_header text-center mb-5 mt-4">
		<h1 class="text-capitalize">6 steps Prevention against Coronavirus  </h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4  col-md-4  col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 ">
						<figure>
							<img src="images/handwash.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Wash your hands regularly for 20 seconds, with soap and water or alcohol-based hand rub</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4  col-md-4  col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 ">
						<figure>
							<img src="images/mask.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze</p>
					</div>
				</div>
			</div>


			<div class="col-lg-4  col-md-4  col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 ">
						<figure>
							<img src="images/quarantine.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Avoid close contact (1 meter or 3 feet) with people who are unwell</p>
					</div>
				</div>
			</div>


			<div class="col-lg-4  col-md-4  col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 ">
						<figure>
							<img src="images/home.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Stay home and self-isolate from others in the household if you feel unwell</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4  col-md-4  col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 ">
						<figure>
							<img src="images/news.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Stay informed by watching news & follow the recommended practices</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4  col-md-4  col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 ">
						<figure>
							<img src="images/medical.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>If you have fever, cough and difficulty breathing, seek medical care early</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ************************** contact us *********************** -->

<div class="container-fluid  pt-5 pb-5 mt-5" id="contactid">
	<div class="section_header text-center mb-5">
		<h1 class="text-capitalize"> Contact us ASAP  </h1>
	</div>

	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-12"> 
			<form  action="" method="POST">

			 <div class="form-group">
			    <label >Username</label>
			    <input type="text" class="form-control"  placeholder="name" autocomplete ="off" name="username">
			  </div>	

			  <div class="form-group">
			    <label >Email address</label>
			    <input type="email" class="form-control"  placeholder="name@example.com" autocomplete ="off" name="email">
			  </div>

			   <div class="form-group">
			    <label >Mobile</label>
			    <input type="number" class="form-control"  placeholder="mobile number" autocomplete ="off" name="mobile">
			  </div>

			   <div class="form-group">
			    <label >Select Symptoms</label> <br>

			 	 <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
				    <input type="checkbox" class="custom-control-input " id="customcheckbox1"    name="coronasym[]" value="cold">
				    <label class="custom-control-label" for="customcheckbox1">Cold</label>
				  </div>
				  <div class="custom-control custom-checkbox custom-control-inline text-capitalize ">
				    <input type="checkbox" class="custom-control-input  "  id="customcheckbox2" name="coronasym[]" value="fever">
				    <label class="custom-control-label" for="customcheckbox2">fever</label>
				  </div>

				   <div class="custom-control custom-checkbox custom-control-inline text-capitalize ">
				    <input type="checkbox" class="custom-control-input  " id="customcheckbox3" name="coronasym[]" value="breath">
				    <label class="custom-control-label" for="customcheckbox3">difficulty in breath</label>
				  </div>

				   <div class="custom-control custom-checkbox custom-control-inline text-capitalize ">
				    <input type="checkbox" class="custom-control-input  " id="customcheckbox4" name="coronasym[]" value="tired">
				    <label class="custom-control-label" for="customcheckbox4">feeling weak</label>
				  </div>
				</div>

			  <div class="form-group">
			    <label for="exampleFormControlTextarea1">Descripe how you are feeling</label>
			    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
			  </div>

			  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
	</form>
		</div>
	</div>

</div>

</div>


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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"
   integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" 
  integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<script>

$('.count').counterUp({
  		delay:10,
  		time:300
   	})

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
function fetch(){
	$.get("http://api.covid19api.com/summary",

	function(data){
	    var tbval = document.getElementById('tbval');
	        for(var i =1; i<(data['Countries'].length); i++ ){
	          var x = tbval.insertRow();
			  x.insertCell(0);
			  tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
			  tbval.rows[i].cells[0].style.background =  '#7a4a91';
			  

			  x.insertCell(1);
			  tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
			  tbval.rows[i].cells[1].style.background =  '#4bb7d8';
			  

			  x.insertCell(2);
			  tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
			  tbval.rows[i].cells[2].style.background =  '#4bb7d8';
			  

			  x.insertCell(3);
			  tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
			  tbval.rows[i].cells[3].style.background =  '#f36e23';
			  

			  x.insertCell(4);
			  tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
			  tbval.rows[i].cells[4].style.background =  '#4bb7d8';
			  

			  x.insertCell(5);
			  tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
			  tbval.rows[i].cells[5].style.background =  '#9cc850';
			  

			  x.insertCell(6);
			  tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
			  tbval.rows[i].cells[6].style.background =  '#f36e23';
	        }
         }
	);
			  

}

</script>
</body>
</html>


<?php
include 'userdatainfoo.php';
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $symp = $_POST['coronasym'];
    $msg = $_POST['msg'];

    $chk= " ";
    foreach($symp as $chk1){
        $chk .=$chk1. ",";
    }
    $insertquery= "insert into coronacasee(username,email,mobile,symp,message)values('$username','$email','$mobile','$chk','$msg' )";
	$query = mysqli_query($con, $insertquery);
	
	if($query){
		?>
		<script>
			alert("inserteddd successfully")
		</script>
	    <?php
	}else{
		?>
		<script>
			alert{"Not Inserted"}
		<script>
		<?php
	}
} 


?>  