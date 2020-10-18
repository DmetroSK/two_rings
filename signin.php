<?php
include 'includes/header.php';
?>

<link rel="stylesheet" href="css/signin.css">
<title>Signin</title>
</head>
<body>
<?php
include 'includes/menu.php';
?>

<div class="container">

  <div class="column">
      <img src="img/img_signin.png" alt="signin">
  </div>

  <div class="column">
        

         <form name="user" method="post" action="database/function.php" id="form">
             <div id="div_signin">
                   
                <h1>Signin</h1>
                    <p>Welcome back! Please login to your account</p>
                
                    <div>
                        <input type="email" class="textbox"  name="txt_email" placeholder="Email"/>
                    </div>
                    <div>
                        <input type="password" class="textbox"  name="txt_pwd" placeholder="Password"/>
                    </div>
                    
                 
                    <div class="div_btn" style="margin-top:20px">
                        
                        <input type="submit" value="Signin" name="login" class="btn" />
                        &nbsp &nbsp &nbsp
                        <input type="reset" value="Clear"  class="btn" />
                    </div>

                 

                </div>
         </form>
</div>
    

</div>


</body>
</html>