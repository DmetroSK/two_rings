<?php
include 'includes/header.php';
?>
<link rel="stylesheet" href="css/contactus.css">
<title>Contact Us</title>
</head>
<body>

<?php
include 'includes/menu.php';
?>
<div class="row">
    <div class="column">
        <form>
            <div class="column">
                <input type="text" name="FirstName" placeholder="First Name" />
                <input type="text" name="LastName" placeholder="Last Name" />
            </div>
            <br />
            <input type="text" name="email" placeholder="Email" /><br />
            <input type="text" name="contactnumber" placeholder="Contact Number" /><br />
            <textarea name="message" rows="5" cols="50">
                Type something
            </textarea>
            <input type="submit" value="Submit" />

           
        </form>
    </div>
    <div class="column">
        
    </div>
</div>



<?php
include 'includes/footer.php';
?>