<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<head>
    <style>
        .parent {
            display: flex;
            background-color: aqua;
             border: 2px solid red; 
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            text-align: center;
            justify-content: space-around;

        }

        .child {
            background-color: rgba(255, 137, 137, 0.157);
            /* border: 2px solid red; */
            border-radius: 15px;
            flex-direction: row;
            height: 400px;
            width: 200px;
            margin: 20px;
            background-image: url("0.jpg");
            color: white;
            font-size: large;
            font-family: 'Courier New', Courier, monospace;


        }

        img {
            border: 1px solid;
            border-radius: 15px;
            height: 170px;
        }

        .map {
            border: 2px solid rgb(253, 13, 13);
            height: 70px;
        }

        .direction {
            /* border:2px solid rgb(253, 13, 13); */
            height: 31px;
            text-decoration: none;
            color: rgb(0, 217, 255);
        }

        .navbar {
            border: 2px solid rgb(255, 255, 255);
            background-color: rgb(255, 166, 0);
            height: 45px;
            border-radius: 15px;
            flex-wrap: wrap;
            

        }

        ul {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
        }

        a {
            font-weight: bold;
            text-transform: capitalize;
            list-style: none;text-decoration: none;
            color: rgb(0, 0, 0);

            /* border: 2px solid rgb(2, 141, 21); */
        }
a:hover{
    color: rgb(163, 11, 11);
}

        .nack {
/*             border: 0.5px solid rgb(255, 160, 160); */
            /* background-color: rgb(255, 166, 0); */
            height: 80px;
            text-align: center;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .footer {
            text-align: center;
            margin-top: 100px;
        }
		
		
		
		
		
		
		
		
		
		
		//**************************************slider css*/
		
		
		* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 500px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: green;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
    </style>
    <title>Wordpress tutorial</title>
</head>

<body>
    <div class="navbar">
        <ul>
			
			<a href=""><i class="fas fa-radiation-alt"></i></a>
            <a href="">Home</a>
            <a href="">About</a>

            <a href="" style="font-family: cursive;text-shadow: black; ">Contest</a>
            <a href="">Contact us</a>
        </ul>
    </div>
    <div class="nack">
<h2>Ending assignment of wordpress series 😎 </h2>
    </div>
<!--     <div class="parent"> -->

<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <img src="https://picsum.photos/200" style="  width:100%">
    <div class="text">Russia</div>
  </div>

  <div class="mySlides fade">
    <img src="https://picsum.photos/300" style="width:100%">
    <div class="text">india</div>
  </div>

  <div class="mySlides fade">
    <img src="https://picsum.photos/400" style="width:100%">
    <div class="text">America</div>
  </div>


  <!-- Next and previous buttons -->
  <a class="prev"  onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!--         </div> -->
	<?php  include('post.php') ?>

    <div class="footer">
        <p>All copyright @2020-21 reserved</p>
        <p>Made with &#10084; by Sourav's Lab</p>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>


<!--   //silder js -->
	<script>
 	var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
	
	</script>
</body>

</html>