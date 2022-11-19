<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
	<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <div class="dropdown">
    <button class="dropbtn">Dropdown
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>
  <a href="#about">About</a>
  <a href="#registration" class="split">Registration</a>
  <a href="#admin" class="split">admin</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<!-- <div class="slider">
	<div class="container">
		<div class="slider-item slider-active"><img src="images/image1.jpg" alt=""></div>
		<div class="slider-item "><img src="images/image2.jpg" alt=""></div>
		<div class="slider-item"><img src="images/image3.jpg" alt=""></div>
	</div>
</div> -->

<div class="slidercontainer">  
        <div class="showSlide fade">  
            <img src="images/image1.jpg" />  
            <div class="content">School website</div>  
        </div>  
        <div class="showSlide fade">  
            <img src="images/image2.jpg"/>  
            <div class="content">Lorem ipsum dolor sit amet</div>  
        </div>  
  
        <div class="showSlide fade">  
            <img src="images/image3.jpg"/>  
            <div class="content">Lorem ipsum dolor sit amet</div>  
        </div>  
        <div class="showSlide fade">  
            <img src="images/image1.jpg"/>  
            <div class="content">Lorem ipsum dolor sit amet</div>  
        </div>  
        <!-- Navigation arrows -->  
        <a class="left" onclick="nextSlide(-1)">❮</a>  
        <a class="right" onclick="nextSlide(1)">❯</a>  
    </div> 
	</header>

	



	<script src="js/app.js"></script>
</body>
</html>