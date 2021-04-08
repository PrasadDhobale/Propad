<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="CSS/services.css">
<link rel="stylesheet" href="CSS/navigation.css">
  <head>
    <meta charset="utf-8">
    <title>Services</title>
  </head>
  <body class="servicesbody">
    <div class="rainbow-text1">
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

    <div class="services">
      <div id="block-main-5" class="stack">
        <div class="block block-feature-highlights scrolled" id="block-main-5-1">
          <h2 class="block-feature-highlights__title">Our <span>Services</span></h2>

          <div class="block-feature-highlights__items rows-4">
            <div class="column">
              <table>
                <td>
                  <h3 class="title">IT <span>Support</span></h3>
                  <div class="bem">
                    <img src="images/support1.png"  alt="Business IT Solutions - IT Strategy" loading="lazy"></div>
                      <p>
                        Our proactive experts work in the background to optimise your service,
                        and provide highly responsive support when you need it.
                      </p>
                    <div class="block-feature-highlights__items-link-wrap">
                      <a href="https://cyansolutions.co.uk/our-services/it-support/">IT Support for Your Business</a>
                    </div>
                </td>
              </table>
            </div>
            <div class="column">
              <table>
                <td>
                  <h3 class="title">Microsoft<span> Cloud</span></h3>
                  <div class="bem">
                    <i class="fa fa-cloud-upload" aria-hidden="true" style="font-size:120px;color:white""></i>
                  </div>
                  <p>
                    Free up capacity and empower your team to collaborate, create and share
                    with cloud services like Azure, Microsoft 365 and Teams.
                  </p>
                  <div class="block-feature-highlights__items-link-wrap">
                    <a href="https://cyansolutions.co.uk/microsoft-cloud/">Microsoft Cloud Services</a>
                  </div>
                </td>
              </table>
            </div>
            <div class="column">
                <table>
                  <td>
                    <h3 class="title">Cyber <span>Security</span></h3>
                    <div class="bem">
                      <i class="fa fa-unlock-alt" aria-hidden="true" style="font-size:120px;color:white""></i>
                    </div>
                    <p>
                      We can run a full security audit to assess your existing level of protection, your
                      business is as secure as necessary.
                    </p>
                    <div class="block-feature-highlights__items-link-wrap">
                        <a href="https://cyansolutions.co.uk/cyber-security-consultants/">Protect Your Business</a>
                    </div>
                  </td>
                </table>
            </div>
            <div class="column">
              <table>
                <td>
                  <h3 class="title">Connectivity &amp; <span>VOIP</span></h3>
                  <div class="bem">
                    <i class="fa fa-connectdevelop" aria-hidden="true" style="font-size:120px;color:white""></i>
                  </div>
                  <p>
                    Your core infrasturcture will empower your business and enable your team to connect
                    remotely with cloud telephony that integrates with Microsoft Teams.
                  </p>
                  <div class="block-feature-highlights__items-link-wrap">
                    <a href="https://cyansolutions.co.uk/infrastructure-connectivity/">Infrastructure &amp; Connectivity
                    </a>
                  </div>
                </td>
              </table>
            </div>
          </div>
        </div>
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
