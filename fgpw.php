<?php
include 'includes/header.php';
?>

<link rel="stylesheet" href="css/fgpw.css">
<title>forgot email</title>
</head>
<body>

<!-- Code Start -->

<div class="row">

  <div class="column">
      <img src="img/img_signin.png" alt="forgot">
  </div>

  <div class="column">
  <div class="container">

    <form method="post" action="">
        <div id="div_forgot">
            <h1>Forgot Password</h1>
            <p>Enter your email and we send you a password reset link.</p>
            <div>
                <input type="email" class="textbox" id="txt_forgot" name="txt_forgot" placeholder="Email" />
            </div>
            

            <div id="div_btn">
                
                <input type="button" value="Send Request" name="but_request" id="but_request" />
            </div>
        </div>
    </form>
</div>
  </div>

</div>








<!-- Code End -->
</body>
</html>