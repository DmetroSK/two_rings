<?php
include 'includes/header.php';
?>
<link rel="stylesheet" href="css/signup.css">

<title>Signup</title>

</head>
<body>

<div class="container">

  <div class="column">
      <img src="img/img_signup.png" alt="signup">
  </div>

  <div class="column">
        

         <form name="user" method="post" action="" id="form">
             <div id="div_signup">
                   
                <h1>Signup</h1>
                    <p>Please complete to create your account</p>
                    <div>
                        <input type="text" class="textbox"  name="txt_fname" placeholder="Firstname" />
                    </div>
                    <div>
                        <input type="text" class="textbox"  name="txt_lname" placeholder="Lastname" />
                    </div>
                    <div>
                        <input type="text" class="textbox"  name="txt_nic" placeholder="NIC"/>
                    </div>
                    <div>
                        <input type="text" class="textbox" name="txt_tp" placeholder="Contact Number"/>
                    </div>
                    <div>
                    <textarea class="textbox"  name="txt_addr" placeholder="Address" rows="4" cols="50"></textarea>
                    </div>
                    <div>
                        <input type="email" class="textbox"  name="txt_email" placeholder="Email"/>
                    </div>
                    <div>
                        <input type="password" class="textbox"  name="txt_pwd" placeholder="Password"/>
                    </div>
                    <div>
                        <input type="password" class="textbox"  name="txt_confpwd" placeholder="Confirm Password"/>
                    </div>
                 
                    <div class="div_btn" style="margin-top:20px">
                        
                        <input type="submit" value="Signup" name="but_submit" class="btn" />
                        &nbsp &nbsp &nbsp
                        <input type="reset" value="Clear" name="but_submit" class="btn" />
                    </div>

                 

                </div>
         </form>
</div>
    

</div>


<?php
	if(isset($_POST['Signup'])){

	$sql = "INSERT INTO user ( Id, Nic, Fname, Lname, Address, Tp, Email, Password ) VALUES ('1','".$_POST['txt_fname']."','".$_POST['txt_lname']."','".$_POST['txt_nic']."'
    ,'".$_POST['txt_tp']."','".$_POST['txt_addr']."','".$_POST['txt_email']."','".$_POST['txt_pwd']."')";

	$result = mysqli_query($connection,$sql);
	if($result)
echo"<script> alert('Registered Sucessfully') </script>";
else
echo"failed";

}

?>

</body>
</html>