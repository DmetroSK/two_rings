<?php
include 'includes/header.php';
?>

<link rel="stylesheet" href="css/signup.css">
<title>Signin</title>
</head>
<body>

<!-- Code Start -->

<div class="row">

  <div class="column">
      <img src="img/img_signin.png" alt="Login">
  </div>

  <div class="column">
  <div class="container">

    <form method="post" action="">
        <div id="div_login">
            <h1>Register</h1>
            <p>Please complete to create your account</p>
            <div>
                <input type="text" class="textbox" id="txt_fname" name="txt_fname" placeholder="Firstname" />
                <input type="text" class="textbox" id="txt_lname" name="txt_lname" placeholder="Lastname" />
            </div>
            <div>
                <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username"/>
            </div>
            <div>
                <input type="email" class="textbox" id="txt_email" name="txt_email" placeholder="Email"/>
            </div>
            <div>
                <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
            </div>
            <div>
                <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Confirm Password"/>
            </div>
            <div>
                <input type="checkbox" class="textbox" id="txt_agree" name="txt_agree" />I agree with the terms and conditions
            </div>

            <div id="div_btn">
                
                <input type="button" value="Signups" name="but_submit" id="but_submit" />
            </div>
        </div>
    </form>
</div>
  </div>

</div>









<!-- Code End -->
</body>
</html>