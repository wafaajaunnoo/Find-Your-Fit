/* JS for contact form */
function validate() {

	if (document.contactform.contactfname.value=="") {
		alert ("Please provide your first name.");
		document.contactform.contactfname.focus();
		return false;
	}

  if (document.contactform.contactlname.value=="") {
		alert ("Please provide your last name.");
		document.contactform.contactlname.focus();
		return false;
	}

  if (document.contactform.contactemail.value=="") {
    alert ("Please provide your email.");
    document.contactform.contactemail.focus();
    return false;
  }

  if (document.contactform.message.value=="") {
    alert ("Don't forget to leave us a message!");
    document.contactform.message.focus();
    return false;
  }

	else
	alert("Your message has been sent successfully to the Find Your Fit team.  We will get back to you shortly.");
}

/*javascript for settings form*/
function settings() {

	if (document.settingsform.settingsfname.value=="") {
		alert ("Please provide your first name.");
		document.settingsform.settingsfname.focus();
		return false;
	}
  if (document.settingsform.currentPW.value=="") {
    alert ("You need to insert your current password first.");
    document.settingsform.currentPW.focus();
    return false;
  }

  if (document.settingsform.newPW.value=="") {
    alert ("Please insert your new password.");
    document.settingsform.newPW.focus();
    return false;
  }

  if (document.settingsform.confirmPW.value=="") {
    alert ("Don't forget to confirm your password!");
    document.settingsform.confirmPW.focus();
    return false;
  }

	else
	alert("Your records and credentials have been saved successfully.");
}
/*javascript for choose a trainer page*/
function knowMore1() {
  var x = document.getElementById("more1");
  if (x.innerHTML === "") {
    x.innerHTML = "Kim Mae specializes in musculoskeletal rehabilitation";
  } else {
    x.innerHTML = "";
  }
}

function knowMore2() {
  var x = document.getElementById("more2");
  if (x.innerHTML === "") {
    x.innerHTML = "Catherine Clark is a fitness nutrition specialist ";
  } else {
    x.innerHTML = "";
  }
}

function knowMore3() {
  var x = document.getElementById("more3");
  if (x.innerHTML === "") {
    x.innerHTML = "With over 8 years of expereince, Melissa will help you with fun at-home workouts ";
  } else {
    x.innerHTML = "";
  }
}

function knowMore4() {
  var x = document.getElementById("more4");
  if (x.innerHTML === "") {
    x.innerHTML = "Get a little sweaty. Jane Fin is ranked first in boxing nation-wide ";
  } else {
    x.innerHTML = "";
  }
}

function knowMore5() {
  var x = document.getElementById("more5");
  if (x.innerHTML === "") {
    x.innerHTML = "No updates are available for this trainer yet. &#128532; ";
  } else {
    x.innerHTML = "";
  }
}

function knowMore6() {
  var x = document.getElementById("more6");
  if (x.innerHTML === "") {
    x.innerHTML = "No updates are available for this trainer yet. &#128532; ";
  } else {
    x.innerHTML = "";
  }
}

function knowMore7() {
  var x = document.getElementById("more7");
  if (x.innerHTML === "") {
    x.innerHTML = "''I wear black to the gym because it is like a funeral for my fat!'' &#129315;  She is the best training motivator on our team. ";
  } else {
    x.innerHTML = "";
  }
}

function knowMore8() {
  var x = document.getElementById("more8");
  if (x.innerHTML === "") {
    x.innerHTML = "Student of THE Diana Vishneva herself, Anne is an experienced ballet dancer of 30 years.  She is very patient with her students. ";
  } else {
    x.innerHTML = "";
  }
}

/*script for get ready to workout page*/
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
