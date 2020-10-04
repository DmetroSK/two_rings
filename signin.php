<?php
include 'includes/header.php';
?>

<link rel="stylesheet" href="css/signin.css">
<title>Signin</title>
</head>
<body>

<div class="row">

  <div class="column">
      <img src="img/img_signin.png" alt="Login">
  </div>

  <div class="column">
  <div class="container">

    <form method="post" action="">
        <div id="div_login">
            <h1>Login</h1>
            <p>Welcome back! Please login to your account</p>
            <div>
                <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
            </div>
            <div>
                <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
            </div>
            <div id="div_btn">
                <input type="button" value="Login" name="but_submit" id="but_submit" /> &nbsp &nbsp
                <input type="button" value="Signup" name="but_submit" id="but_submit" />
            </div>
        </div>
    </form>
</div>
  </div>

</div>



</body>
</html>