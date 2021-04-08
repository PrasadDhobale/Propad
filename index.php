<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="CSS/home.css">
<link rel="stylesheet" href="CSS/navigation.css">
<link rel="stylesheet" href="CSS/Lazy.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Propad</title>
</head>
<body>
  <div class="rainbow-text">
        <p class="logo">Propad</p>
  </div>
  <div class="topnav" id="myTopnav">
    <a href="index.php" class="dropbtn">
      <p class="rainbow-text1">
        <i class="fa fa-home"></i> Home
      </p>
    </a>
    <a href="Services.php" class="dropbtn">
      <p class="rainbow-text1">
        <i class="fa fa-soccer-ball-o"></i> Services
      </p>
    </a>
    <a href="contact.php" class="dropbtn">
      <p class="rainbow-text1">
        <i class="fa fa-phone-square"></i> Contact Us
      </p>
    </a>
    <a href="About.php" class="dropbtn">
      <p class="rainbow-text1">
        <i class="fa fa-address-book-o"></i> About Us
      </p>
    </a>
    <a href="javascript:void(0);" style="font-size:25px;" class="icon" onclick="myFunction()">
      <p class="rainbow-text1">
        &#9776;
      </p>
    </a>
  </div>

  <div class="slideshow-container">

  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="Cont.jpg" style="width:100%" style="height:20%">
    <div class="text"><span class="rainbow-text2">! Welcome To Propad !</span> </div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="Reg.jpg" width="100%" style="height:20%">
    <div class="text"><span class="rainbow-text2">You Run Your Business<br>We Run Your IT.</div></span>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="Logged.jpg" style="width:100%" style="height:20%">

    <div class="text"><span class="rainbow-text2">We Are Here... To Support You :)</span></div>
  </div>

  </div>
  <br>

  <div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>

  <div class="block1">
    <div class="rainbow-text2">
      <span class="t1">
        Increase Productivity
        for your business
      </span>
      <span class="t2">
        with Bespoke IT
        Solutions
    </span>
    </div>
  </div>
  <div class="block2">
    <div class="rainbow-text2">
      <span class="t1">
        Keep your IT
        system running as
        they should do,
      </span>
      <span class="t1">
        so that your people
        can work as they need to.
      </span>
    </div>
  </div>
  <div class="block3">
    <div class="rainbow-text2">
      <span class="t1">
        Helping your business become more
      </span>
      <span class="t1">
        powerfull with technology
      </span>
    </div>
  </div>
  <div class="block4">
    <div class="rainbow-text2">
      <span class="t1">
        Enabling a remote workforce with improved
      </span>
      <span class="t1">
        connectivity and collaboration
      </span>
    </div>
  </div>
  <div class="block5">
    <div class="rainbow-text2">
      <span class="t1">
        Improving security and resilience
      </span>
      <span class="t2">
        to protect your business
      </span>
    </div>
  </div>

  <div class="info">
    <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2551.257579658122!2d55.32208160869479!3d25.27144155201789!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5cc875f90ac7%3A0xc336f8f66a130cb1!2sFederal+Insurance+Brokers+LLC!5e0!3m2!1sen!2sin!4v1536653547077"
     width="100%" height="200" frameborder="0" allowfullscreen="allowfullscreen"></iframe><br><br>
        <div class="rainbow-text2">
          <a>
            &nbsp&nbsp Propad Solutions Ltd.<br>
            &nbsp&nbsp Federal Insurance Brokers.<br>
            &nbsp&nbsp LLC P.O.Box 5406<br>
            &nbsp&nbsp Dubai,United Arab Emirates
          </a>
          <br><br>
          <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=dhobaleprasad3@gmail.com" target="_blank" class="fa fa-envelope">&nbspdhobaleprasad3@gmail.com
          </a>
          <br><br>
          <a>
            <i class="fa fa-phone">&nbsp+91&nbsp9067404012</i>
          </a>
          <br>
        </div>
        <br><br>
        <div class="rainbow-text2">
          <a href="https://api.whatsapp.com/send/?phone=919067404012&text=Hii%20Propad%20!!!!" class="fa fa-whatsapp"></a>
          &nbsp&nbsp&nbsp
          <a href="https://twitter.com/Prasad01338433?s=08" class="fa fa-twitter"></a>
          &nbsp&nbsp&nbsp
          <a href="https://www.linkedin.com/in/prasad-dhobale-01936319a" class="fa fa-linkedin"></a>
          &nbsp&nbsp&nbsp
          <a href="https://www.instagram.com/pforpropad/" class="fa fa-instagram"></a>
          &nbsp&nbsp&nbsp
          <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=dhobaleprasad3@gmail.com" target="_blank" class="fa fa-envelope"></a>
          &nbsp&nbsp&nbsp
          <a href="https://github.com/PrasadDhobale" class="fa fa-github"></a>
        </div>
  </div>

  <script>
  var slideIndex = 0;
  showSlides();

  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 2 seconds
  }


  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
  </script>
</body>

</html>
