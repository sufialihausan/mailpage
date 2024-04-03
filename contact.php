<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="shortcut icon" href="image/favicon.png">
    <link rel="stylesheet" href="CSS/mainh.css">
    <script src="image/metaicon.jpg"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- link for bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- link for fa fa icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        label{
            margin-top: 10px;
        }
        .contact-info {
        margin-top: 30px;
      }

      .contact-info span {
        margin-top: 20px;
        display: block;
        font-size: 14px;
      }

      .contact-info span a{
        text-decoration: none;
      }

      .contact-info span i {
        color: #28ad7f;
        font-size: 16px;
        margin-right: 12px;
      }
      
    </style>
</head>
<body>
<nav class=" navbar navbar-expand-lg bg-light navbar-light position-relative">
      <div class="container-fluid logo">
        <a href="index.php" style="color:#28bd89;" class="logo1 navbar-brand"><i class="fa fa-university" aria-hidden="true"></i>Book Buddy</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="navbar-collapse collapse" id="nav">
            <ul class="nav navbar-nav container-fluid first justify-content-end">
                <li class="nav-item">
                    <a href="index.php" class="nav-link text-dark">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link text-dark">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-dark" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Section</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="user/pbookreq.php">Purchase Book</a></li>
                        <li><a class="dropdown-item" href="user/read_pdf.php">Book Reading</a></li>
                        <li><a class="dropdown-item" href="user/issue_book.php">Reserve Book</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-dark" data-bs-target="#modal" data-bs-toggle="modal">Contact</a>
                </li>
                <li class="nav-item first1">
                    <a href="login.php" class="nav-link text-light">Login</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
<div class="container">
  <h1 class="text-center my-3 display-5"><b>Contact Us</b></h1>
  <div class="row">
    <div class="col-md-6 col-sm-12 col-lg-6">
      <form method="post" class="form" id="contactForm">
        <div class="mb-2 py-2">
          <label for="exampleFormControlInput1" class="form-label"><b>Name:</b></label>
          <input type="name" class="form-control name" id="exampleFormControlInput1" name= "name" placeholder="Enter your Name" required>
        </div>
        <div class="mb-2 py-2">
          <label for="exampleFormControlInput1" class="form-label"><b>Email Id:</b></label>
          <input type="email" class="form-control email" id="exampleFormControlInpu2" name= "email" placeholder="Enter your Email" required>
        </div>
        <div class="mb-2 py-2">
          <label for="exampleFormControlInput1" class="form-label"><b>Mobile:</b></label>
          <input type="number" class="form-control mobile" id="exampleFormControlInput3"  name= "mobile" placeholder="Enter your Mobile number" required>
        </div>
        <div class="mb-2 py-2">
          <label for="exampleFormControlTextarea1" class="form-label"><b>How can we help you ??</b></label>
          <textarea class="form-control help" id="exampleFormControlTextarea1" rows="7" name= "statement" required></textarea>
        </div>
        
        <div class="mb-2 py-2">
          <div class="g-recaptcha" data-sitekey="6Le5t54pAAAAAC09kHqd3wemaFcKo3r5Eo9wTLj3"></div>
        </div>

        <div class="d-flex justify-content-center">
          <button type="submit" name="sub" class="btn btn-lg" style="margin-bottom: 30px; background-color:#38d39f;">Submit</button>
        </div>        
      </form>
    </div>
    <div class="col-md-6 col-sm-12 col-lg-6">
      <div class="map-holder">
        <iframe style="margin-top: 30px; " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1116.2487419645313!2d80.26317042089597!3d26.479433099049476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c379bdbe26aef%3A0xf58b9e13009526c!2sHasan%20Technical!5e0!3m2!1sen!2sin!4v1710730260246!5m2!1sen!2sin" width="100%" height="500" style="border:2;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="contact-info mb-4">
        <span><i class="fa fa-home"></i>688- Maswanpur Rawatpur Kanpur Nagar - 208019</span>
        <span><i class="fa fa-phone"></i><a href="tel:9120658333">9120658333</a> (10:00 AM to 4:00 PM only)</span>
        <span><i class="fa fa-envelope"></i><a href="mailto:sufialihausan@gmail.com">sufialihausan@gmail.com</a></span>
      </div>
    </div>
  </div>
</div>


<!-- footer section -->
<section class=" bg-dark text-light" id="footer">
<div class="container">
  <div class="row">
    <div class="col-lg-4">
      <h1>Book <span style="color: #38d39f;">Buddy</span></h1>
      <p>Everything you want to know about everthing you want to know @bookbuddy</p>
      <i class="fa fa-phone-square d-flex" style="font-size: 22px;">&nbsp <p style="font-size: 16px;"> +91 126786878</p></i>
      <a href="mail.google.com" style="font-size: 16px; text-decoration:none; color:white;"><p>hellobookbuddy@gmail.com</p></a>
      <a href="#"><i class="fa fa-twitter-square" style="font-size: 20px; color: white;"></i></a>
      <a href="#"><i class="fa fa-facebook-square" style="font-size: 20px; color: white; margin-left:5px;"></i></a>
      <a href="#"><i class="fa fa-instagram" style="font-size: 20px; color: white; margin-left:5px;"></i></a>
      <a href="#"><i class="fa fa-youtube-square" style="font-size: 20px; color: white; margin-left:5px;"></i></a>
    </div>
    <div class="col-lg-4 lkj">
      <h4>Quick Links</h4>
      <p><a class="text-light text-decoration-none" href="index.php">Home</a></p>
      <p><a class="text-light text-decoration-none" href="about.php">About</a></p>
      <p><a class="text-light text-decoration-none" href="#">Section</a></p>
      <p><a class="text-light text-decoration-none" href="#" data-bs-target="#modal" data-bs-toggle="modal">Contact Us</a></p>
    </div>
    <div class="col-lg-4">
      <h4>Business hour</h4>
      <p>Our support available to help you 24 hours a day, seven days week</p>
      <p>Monday-Saturday: ......................... 10:00-7:30</p>
      <p>Sunday: ............................. 10:00-02:00</p>
    </div>
  </div>
</div>
</section>

<div class="container-fluid copyright">
  <p>&copy Copyright 2023-2024 Book Buddy. & All Right Reserved</p>
</div>

  <!-- using jquery submit -->
  <script>
    $(".form").submit(function(e) {
        e.preventDefault();
        var btn=$(".btn").val();
        var data= $(this).serialize()+"&sub="+btn;
       
        $.ajax({
          method: "POST",
          url: "contactproces.php",
          data:data,
          success:function(response){
            $name=$(".name").val("");
            $email=$(".email").val("");
            $mobile=$(".mobile").val("");
            $help=$(".help").val("");
              Swal.fire({
                title: "Thanks",
                text: "Your Message Send Successfully",
                icon: "success"
              });
          }
        });
     });
</script>


<script>
document.addEventListener('DOMContentLoaded', function() {
  document.querySelector('.name').addEventListener('input', function() {
    let words = this.value.split(' ');
    let capitalizedWords = words.map(word => word.charAt(0).toUpperCase() + word.slice(1).toLowerCase());
    this.value = capitalizedWords.join(' ');
  });

  // Email validation
  document.querySelector('.email').addEventListener('input', function() {
    let email = this.value;
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      this.setCustomValidity('Invalid email address');
    } else {
      this.setCustomValidity('');
    }
  });

  // Allow only ten digits for mobile number
  document.querySelector('.mobile').addEventListener('input', function() {
    let mobile = this.value.replace(/\D/g, '');
    if (mobile.length > 10) {
      this.value = mobile.slice(0, 10);
    }
  });
});
</script>



<!-- disable ctrl shift+i & right click -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> -->
    <!-- <script>
        $(window).on('keydown',function(event)
        {
        if(event.keyCode==123)
        {
            alert('Entered F12');
            return false;
        }
        else if(event.ctrlKey && event.shiftKey && event.keyCode==73)
        {
            return false; 
        }
        else if(event.ctrlKey && event.keyCode==85)
        {
            return false; 
        }
        else if(event.ctrlKey && event.keyCode==73)
        {
            return false; 
        }
        });
        $(document).on("contextmenu",function(e)
        {
        e.preventDefault();
        });
        </script> -->
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>