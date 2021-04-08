<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/About.css">
    <link rel="stylesheet" href="CSS/navigation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>About</title>
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

      <div class="aboutbody">
        <div class="head">
          <p align="left" class="aboutpropad"><b class="rainbow-text1">About Propad</b><p>
          <p align="center" class="title">
            <span class ="t1">Supporting Business Growth</span>
            <br><br>
            <span class="t21"> With Proactive IT Services</span></p>
        </div>

        <div class="block1">
              <span class="t3">We select the best IT services&nbsp;to</span><br>
              <span class="t2">help businesses reach their goals</span>

          <table  class="desc">
            <td>
              <p style="font-weight:bold;">
                &nbsp&nbsp&nbspOur hands-on IT Experts get to know your business inside-out,so we can deliver a bespoke IT solution that does exactly what you need it to.
              </p>
              <p>
                We’re more than a business, we’re a family. And, we’ll treat your business as if it’s our own.
              </p>
              <br>
              <a href="Services.html"><h2 class="t2">Our Services</h2></a>
            </td>
          </table>
        </div>
        <div class="block2">
          <span class="t3">Experienced IT</span>
          <span class="t2">Specialist</span>

          <table  class="desc">
            <td>
              <p style="font-weight:bold;">
                  &nbsp&nbsp&nbsp Since Propad was founded in 2020, we’ve been busy
                   building great relationships with our customers, and we’ve loved every minute.
              </p>
              <p>
                &nbsp&nbsp&nbsp We take the time to understand our customers on a deeper level,
                so we can deliver a solution that maximises business performance,
                empowers employees, and increases Cyber Security.
              </p>
              <br>
            </td>
          </table>
        </div>
        <div class="block3">
          <span class="t3">Our</span>
          <span class="t2">Approach</span>

          <table  class="desc">
            <td>
              <p style="font-weight:bold;">
                  Our approach starts with you, your goals, and where your risks, obstacles, and opportunities lie.
              </p>
              <p>
                &nbsp&nbsp&nbsp We take the time to understand our customers on a deeper level,
                  so we can deliver a solution that maximises
                  business performance, empowers employees, and increases Cyber Security.
              </p>
              <br>
            </td>
          </table>
        </div>

        <div class="foot">
          <table>
            <th>
              <td>
                <p class="tpt">Trusted Partners In Technology</p>
              </td>
              <span class="space">&nbsp&nbsp&nbsp&nbsp</span>
            </th>
          </table>
          <br><br><br>
          <td>
            <p class="address">
            Propad Solutions Ltd<br>
            Federal Insurance Brokers.<br>
            LLC P.O.Box 5406<br>
            United Arab Emirates,<br>
            Dubai
            </p>
          </td>
          <br><br><br>
          <td>
            <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=dhobaleprasad3@gmail.com" target="_blank" class="fa fa-envelope"
            >&nbspdhobaleprasad3@gmail.com
            </a>
            <br><br>
            <a>
              <i class="fa fa-phone">&nbsp+91&nbsp9067404012</i>
            </a>
          </td>

        </div>

      </div>
</body>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</html>
