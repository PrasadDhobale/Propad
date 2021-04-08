<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="CSS/contact.css">

<link rel="stylesheet" href="CSS/navigation.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta charset="ISO-8859-1">
<title>Contact</title>
</head>
<body>
	<div class="rainbow-text1">
				<p class="logo">Propad</p>
	</div>
	<div class="contactbody">
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
		<div>
			<table  class ="contact">
				<td>
				<h1>Contact Us</h1>
				<form method="post">
					<div class="textbox">
						<i class="fas fa-user"></i>
						<input type="text" name="Fname" placeholder="Full Name" required>
					</div>
					&nbsp&nbsp&nbsp&nbsp
					<div class="textbox">
						<i class="fas fa-envelope"></i>
						<input type="email" name="Email" placeholder="Email ID" required>
					</div>
					&nbsp&nbsp&nbsp&nbsp
					<div class="textbox">
						<i class="fas fa-phone"></i>
						<input type="number" name="mn" placeholder="Phone" required>
					</div>
					&nbsp&nbsp&nbsp&nbsp
					<div class="textbox">
						<i class="fas fa-comment"></i>
						<input type="text" name="msg" placeholder="Message" required>
					</div>
					&nbsp&nbsp&nbsp&nbsp
				<input type="checkbox" required><span style="color:white;"> I'm Not a Robot</span></input>
					&nbsp&nbsp&nbsp&nbsp
				<input type="submit" class="btn" value="Send"/>
					<input type="reset" class ="btn" value="Reset"/>
				</form>

				<?php
		      if(isset($_POST['Fname']) && isset($_POST['Email']) && isset($_POST['mn']) && isset($_POST['msg'])){
		        $name=$_POST['Fname'];
						$Email=$_POST['Email'];
						$mn=$_POST['mn'];
		        $msg=$_POST['msg'];

		        header("Location: https://api.whatsapp.com/send/?phone=919067404012&text=*Name*%20%20%20%20%20%20%3A-%20$name%0A*Email*%20%20%20%20%20%20%20%3A-%20$Email%0A*Number*%20%20%3A-%20$mn%0A*Message*%20%3A-%20$msg");				
		      }
		     ?>

				</td>
			</table>
		</div>

		<div class="right-bar">
			<a href="https://api.whatsapp.com/send/?phone=919067404012&text=Hii%20Propad%20!!!!" class="fa fa-whatsapp"></a>
			<a href="https://twitter.com/Prasad01338433?s=08" class="fa fa-twitter"></a>
			<a href="https://www.linkedin.com/in/prasad-dhobale-01936319a" class="fa fa-linkedin"></a>
			<a href="https://www.instagram.com/pforpropad/" class="fa fa-instagram"></a>
			<a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=dhobaleprasad3@gmail.com" target="_blank" class="fa fa-envelope"></a>
			<a href="https://github.com/PrasadDhobale" class="fa fa-github"></a>
		</div>

		<div class="info">
			<iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2551.257579658122!2d55.32208160869479!3d25.27144155201789!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5cc875f90ac7%3A0xc336f8f66a130cb1!2sFederal+Insurance+Brokers+LLC!5e0!3m2!1sen!2sin!4v1536653547077"
			 width="100%" height="200" frameborder="0" allowfullscreen="allowfullscreen"></iframe><br><br>
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
	</div>
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
</body>
</html>
