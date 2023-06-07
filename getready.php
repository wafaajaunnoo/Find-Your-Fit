<!DOCTYPE html>
<html>
<head>
  <title> Get Ready To Workout</title>
  <meta charset = utf-8 name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
  <div class="menu-table">
    <div class="hamburger-menu">
      <?php include'menu.php' ?>
        <div id="tableTrainee"><!--displayed as a table-->
          <div id="headerTrainee">
              <p class="headertitle"> FIND YOUR FIT
                <!--search bar-->
                <form class="traineeForm">
                  <input type="text" id="toSearch" onkeyup="fxSearch()" placeholder="Search for workout videos.." title="Type in a name">
                  <input type="image" src="images/search.png" name="searchIcon" alt="Search Icon" alt="search icon" class="imgSearch"/>
                </form>
              </p>
          </div><!--closing hamburger-menu-->
        </div><!--closing menu-table-->
    </div>
  </div>
</header>

<h2 class="h2Class">Get Ready to Workout</h2>
<ul id="myUL">

  <li>
    <div class="divLeft">
       <a href="https://youtu.be/4CkVdu4z1HA" class="linkVids">
         Hourglass Challenge <br>
         <img alt="Hourglass Challenge" src="images/hourglass-challenge.jpg"
         width="300px" height="190px" class="zoom">
       </a>
    </div>
    <div class="divRight">
      <h3>Hourglass Challenge</h3>
      <p>Duration: 30-40mins per day</p>
      <p>Schedule: 21 days</p>
      <p>Diet Included</p>
      <p> Type: abs, full body</p>
      <p>Equipment: Fitness mat</p>
    </div>
  </li>

  <li class="floatRight">
    <div class="divLeft">
       <a href="https://youtu.be/yXYm31idmXE" class="linkVids">
         Intense Core <br>
         <img alt="Intense Core" src="images/intense-core.jpg"
         width="300px" height="190px" class="zoom">
       </a>
    </div>
    <div class="divRight">
        <h3>Intense Core</h3>
        <p>Duration: 10-30mins per day</p>
        <p>Schedule: 15 days</p>
        <p> Type: abs, full body, weight loss</p>
        <p>Equipment: Fitness mat</p>
    </div>
  </li>

  <li>
    <div class="divLeft">
         <a href="https://youtu.be/JEEG0hBNk3E" class="linkVids">
           Abs Workout <br>
           <img alt="Abs workout" src="images/abs-workout.jpg"
           width="300px" height="190px" class="zoom">
         </a>
    </div>
    <div class="divRight">
        <h3>Abs Workout</h3>
        <p>Duration: 20-43mins per day</p>
        <p>Schedule: 23 days</p>
        <p> Type: abs, full body, weight loss</p>
        <p>Equipment: Fitness mat, resistance bands(optional)</p>
    </div>
  </li>

  <li>
    <div class="floatRight">
    <div class="slideshow-container">

<div class="mySlides">
  <div class="numbertext" hidden="hidden">1 / 6</div>
  <img src="images/quote1.png" alt="quote1" style="width:150%" class="imgGallery">
</div>

<div class="mySlides">
  <div class="numbertext" hidden="hidden">2 / 6</div>
  <img src="images/quote2.jpg" alt="quote2" style="width:150%" class="imgGallery">
</div>

<div class="mySlides">
  <div class="numbertext" hidden="hidden">3 / 6</div>
  <img src="images/quote3.jpg" alt="quote3" style="width:150%" class="imgGallery">
</div>

<div class="mySlides">
  <div class="numbertext" hidden="hidden">4 / 6</div>
  <img src="images/quote4.png" alt="quote4" style="width:150%" class="imgGallery">
</div>

<div class="mySlides">
  <div class="numbertext" hidden="hidden">5 / 6</div>
  <img src="images/quote5.jpg" alt="quote5" style="width:150%" class="imgGallery">
</div>

<div class="mySlides">
  <div class="numbertext" hidden="hidden">6 / 6</div>
  <img src="images/quote6.jpg" alt="quote6" style="width:150%" class="imgGallery">
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center" hidden="hidden">
  <span class="dot" onclick="currentSlide(1)" hidden="hidden"></span>
  <span class="dot" onclick="currentSlide(2)" hidden="hidden"></span>
  <span class="dot" onclick="currentSlide(3)" hidden="hidden"></span>
</div>
  </li>



  <li>
    <div class="divvLeft">
         <a href="https://youtu.be/2MoGxae-zyo" class="linkVids">
           2 Weeks Shred <br>
           <img alt="2 Weeks' shred" src="images/2-weeks-shred.jpg"
           width="300px" height="190px" class="zoom">
         </a>
    </div>
    <div class="divRight">
        <h3>2 Weeks Shred</h3>
        <p>Duration: 35-50mins per day</p>
        <p>Schedule: 14 days</p>
        <p> Type: abs, full body, weight loss</p>
        <p>Equipment: Fitness mat, dumb bells (optional),
         resistance bands(optional)</p>
    </div>
  </li>

  <li class="floatRight">

  </li>
</ul>

<?php include 'footer.php'?>
</body>


<script>
//js for search bar
function fxSearch() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("toSearch");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

//js for image gallery
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

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
