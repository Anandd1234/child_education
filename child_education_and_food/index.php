<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- google fonts--><link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pushster&display=swap" rel="stylesheet">
<!-- line 179 font link--><link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pushster&display=swap" rel="stylesheet">
<!--alert popup--><script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!--bootstrap icon link--><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Child Education and Food cises for Children</title>
  <style>
 
 #a1 {
height:590px;
	width:900px;
}
.abs{
	 display: block;
  margin-left: auto;
  margin-right: auto;
  width: 30%;
}
#but{
  display: block;
  margin-left: auto;
  margin-right: auto;
  height:60px;
  width:70%;
  border-radius:70px;
  color:white;
  background-color:red;
  font-size:30px;
  border:3px solid grey;
  font-family: 'Pushster', cursive;
  text-decoration:none;
}
li
{
	color:white;
	font-size:20px;
}
.l1{
	font-family: 'Pushster', cursive;
	font-size:20px;
	color:white;
	
}
.jj{
	 display: block;
  margin-left: auto;
  margin-right: auto;
  height:60px;
  width:70%;
  border-radius:70px;
  color:white;
  background-color:red;
  font-size:40px;
  border:3px solid grey;
 font-family: 'Pushster', cursive;
}
	.tt
	{
  display: block;
  margin-left: auto;
  margin-right: auto;
  height:60px;
  width:70%;
  border-radius:70px;
  color:white;
  background-color:yellow;
  font-size:40px;
  border:3px solid grey;
 font-family: 'Pushster', cursive;
	}
	.le{
		//display:block;
		margin-left:auto;
		margin-right:auto;
		//height:60px;
		border:5px solid red;
		
	}
	#h1
	{
		font-size:30px;
		color:white;
	
	}
	.swal-overlay {
  background-color: rgba(43, 165, 137, 0.45);
}
.hu{
	text-decoration:none;
}
  
  </style>

  </head>
  <body style="background-color:pink;" onload="Anand()">
<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand text-white" href="#">Donationnn</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="signup.php">Signout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="login.php">Sign-in</a>
        </li>
		<li class="nav-item">
          <a class="nav-link text-white "  href="raz.php">Donate us</a>
        </li>
		<li class="nav-item">
          <a class="nav-link text-white " href="about_me.php">About us</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success text-white" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>       <!-- NAV BAR ENDED-->

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">  <!--SLIDER STARTED-->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="India-100th-on-global-hunger-index.JPG" class="d-block w-100" alt="..." id="a1">
      <div class="carousel-caption d-none d-md-block">
        <h5><I style="color:yellow;">HUNGRY INDIA</I></h5>
        <p><i>Every individual needs healthy foods for a healthy body</i></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="ND061.jpg" class="d-block w-100" alt="..." id="a1">
      <div class="carousel-caption d-none d-md-block">
        <h5><i style="color:yellow;">SABKA ADHIKAR SIKSHA</i></h5>
        <p>Money Cannot Eradicate Poverty , Only Education Can.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="o-POVERTY-facebook.jpg" class="d-block w-100" alt="..." id="a1">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:yellow; font-size:30px;"> बच्चे है असली सोना, इसे नहीं है कभी खोना.</h5>
        <p>Help us!</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<h1 style="color:red;"><i>INDIA</i></h1>
<p style="color:#8A2BE2;">In the 2021 Global Hunger Index, India ranks 101st out of the 116 countries with sufficient data to calculate 2021 GHI scores.<br> With a score of 27.5, India has a level of hunger that is serious.</p>
<h3 style="color:#228B22;">What is the Global Hunger Index?</h3>

<p style="color:#DC143C;">The Global Hunger Index aims to track hunger at the world, regional and country levels.<br> It is an annual report (peer-reviewed) published by Concern Worldwide of Ireland and Welthungerhilfe (a German non-profit organization). </p>
    <!-- Optional JavaScript; choose one of the two! -->
<img src="they.jpeg" alt="HUNDER INDEX" class="abs" />
<br>
<p style="color:white;">In India millons of children sleep at night without food because of our  goverment mismanagnment.India, with a population of over 1.3 billion, has seen tremendous growth in the past two decades. Gross Domestic Product has increased 4.5 times and per capita consumption has increased 3 times. Similarly, food grain production has increased almost 2 times. However, despite phenomenal industrial and economic growth and while India produces sufficient food to feed its population, it is unable to provide access to food to a large number of people, especially women and children.</p> 
<br>
<hr style="color:red;">
<p style="color:white;">According to FAO estimates in ‘The State of Food Security and Nutrition in the World, 2020 report, 189.2 million people are undernourished in India. By this measure 14% of the population is undernourished in India. Also, 51.4% of women in reproductive age between 15 to 49 years are anaemic. Further according to the report 34.7% of the children aged under five in India are stunted (too short for their age), while 20% suffer from wasting, meaning their weight is too low for their height. Malnourished children have a higher risk of death from common childhood illnesses such as diarrhea, pneumonia, and malaria. The Global Hunger Index 2020 ranks India at 101 out of 116 countries on the basis of three leading indicators -- prevalence of wasting and stunting in children under 5 years, under 5 child mortality rate, and the proportion of undernourished in the population.</p>  
<a href="raz.php" class="hu"><input type="button" value="clickkk me to donate for child " id="but"></button></a>  <!--link donatoion link-->
 <!-- Option 1: Bootstrap Bundle with Popper -->
 <br>
 
<h1 style="color:green;"> Causes of wastage of Food..........<h1>
<hr style="color:red;">
<ul>
<li> Lack of appropriate planning</li>
<li> Purchase and preparation of too much food</li>
<li>Errors in industrial processing and keeping up with food safety policies</li>
<li>Over-preparation of food in restaurants, hotels and the foodservice industry
</li>
<li> Over-merchandizing and over-ordering in food stores and supermarkets</li>
</ul> 

<h2 align="center" style="color:green;">Painful Images Of Hungry Children in India</h2>

<hr style="color:red;"> 

<!--CARD IN CSS IS STARTED-->
<div class="card-group">
  <div class="card">
    <img src="food-security-hunger.jpg" class="card-img-top" alt="..." style="height:320px;">
    <div class="card-body">
      <h5 class="card-title" style="color:green;">I am hungry?</h5>
      <p class="card-text" style="color:red;">This child tries to eat food from dirty areas where some people thrown their own food.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="0b5ae2523a3caa41d113d4a6dddbb185.jpg" class="card-img-top" alt="..." style="height:320px;">
    <div class="card-body">
      <h5 class="card-title" style="color:green;">Give me Food?</h5>
      <p class="card-text" style="color:red;">This children waited for food and waited for a long time.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="OIP (1).jpeg" class="card-img-top" alt="..." style="height:320px;">
    <div class="card-body">
      <h5 class="card-title" style="color:green;">Lots of Love.But Crises of Food?</h5>
      <p class="card-text" style="color:red;">Our new Generation need proper food?.Please give us Food</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>

<p class="l1">Our Organizaion helps poor children and  gives food and education to poor children free of cost by using these donations. So please gives us lots of donation for our poor children. We are tried so hard for these children</p><input type="button" value="Donate us" class="jj">
<hr style="color:red;">
<p class="l1">some NGOs and big persons helps our organization ,there is no limit set to help our organisation .if you want to help only one rupees then please donate only one rupees for these children. God gives you gift please utilize the gifts given by god</p>
<hr style="color:red;">




<h1 ALIGN="CENTER" style="color:green;">EDUCTION CRISES IN INDIA FOR POOR CHILDREN</h1>
<hr style="color:red;">
<p style="color:white;">Poor students cannot get good education nowdays.poor means it does not show child belonging from which caste.I am defining poor beecause in India goverment and many NGOs thinks poor are only belonging from small caste ,but it is not true. poor child can be from any caste, religion.</p>
<p style="color:white;">In India , people belonging from big caste his children cannot take good eduction because our goverment will not support them our goverment only support only lower class.It is very important that our goverment can focus on upper class poor children</p>   
<h5 style="color:white;">Eduction is the key of success of any caste.so , I requested to goverment to foucs on education system .Goverment gives slogan Equal Eduaction To Everychild it is very necessary</h5>



<h2 style="color:green;"> Causes of Education Crises in India....</h2>
<ul>
<li style="color:white;">Large amount of population</li>
<li style="color:white;">Small amount of teachers</li>
<li style="color:white;">Mismanagnment  of govermment</li>
<li style="color:white;">Donation for study</li>
</ul>

<!-- images of education crises-->
<div class="card-group">
  <div class="card">
    <img src="Indian school children_pixabay.jpg" class="card-img-top" alt="..." style="height:320px;">
    <div class="card-body">
      <h5 class="card-title" style="color:green;">Give Me Book</h5>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="a77d8a8c-d2e5-4e23-953c-d0dff15f1e82.jpg" class="card-img-top" alt="..." style="height:320px;">
    <div class="card-body">
      <h5 class="card-title" style="color:green;">Give Me Tables</h5>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="20090804GovernmentSchool286--621x414.webp" class="card-img-top" alt="..." style="height:320px;">
    <div class="card-body">
      <h5 class="card-title" style="color:green;">Give Me Teachers</h5>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>

<!--ended  education images caerd-->
<!-- CARD IN CSS CLOSED-->
<h2 id="h1">Our organization helps needy children for food and education so please donte us large amount of money for our needy childern.they pray for your healthy life and also pray for your family</h2>
<a href="raz.php" class="hu"><input type="button" class="tt" value="please donate us"></a><br><!--button 2 for donation-->
<!--footer starting -->
<div class="container-fluid">
<div class="row bg-danger">
<div class="col-4">
<div class="row">
<div class="col-2"></div>

<div class="col-6"><h4 style="color:white;"><i class="bi bi-chat-fill" style="font-size:20px;">connect with us</i></h4><br>
<a href="https://www.facebook.com/anandsingh.anandsingh.1238292" style="color:white;"><h1 id="h1"><i class="bi bi-facebook"></i></h1></a><br>
<a href="https://www.instagram.com/anandsingh9874/" style="color:white;"><h1 id="h1"><i class="bi bi-instagram"></i></h1></a><br>
<a href="https://www.linkedin.com/in/anand-singh-69733419b/" style="color:white;"><h1 id="h1"><i class="bi bi-linkedin"></i></h1></a><br>
</div>
<div class="col-4"></div>
</div>

</div>
<div class="col-4">
<div class="row">
<div class="col-4"></div>

<BR><BR><div class="col-4"><h1 id="h1"><i class="bi bi-camera-video"></i></h1>
<br>
<a href="http://localhost/child_and_women/index.php"><h1 id="h1"><i class="bi bi-arrow-up"></i><h1><a>
<br>
<a href="https://www.facebook.com/anandsingh.anandsingh.1238292"><h1 id="h1"><i class="bi bi-chat-square"></i></h1></a>
</div>
<div class="col-4" ></div>

</div>
</div>
<div class="col-4" style="color:white;"><i class="bi bi-building" style="font-size:20px;"> Address</i><br>
<br>
<h6 style="color:white;"> Address:aranya devi sthan</h6><br>
<h6 style="color:white;">Ara, Bihar, 802301, India</h6>
<br>
<h6 style="color:white;">Contact No: 6205471042, 6205471042</h6>
<h6 style="color:white;">privacy policy</h6>
<br>
<br>
<a href="https://www.linkedin.com/in/anand-singh-69733419b/"><h6 style="color:white;"> About me </h6></a>

</div>

<!--footer closed -->


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
	
  </body>
</html>

<script>
function Anand()
{
	swal("Please Donate!", "YOUR DONATION HELPS NEEDY CHILDREN!", "success");
}

</script>