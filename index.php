<?php
include 'includes/header.php';
?>
<link rel="stylesheet" href="css/index.css">
<title>Home</title>

<style>
        * {
            margin: 0;
            padding: 0;
        }
        .imgbox {
            display: grid;
            height: 100%;
        }
        .center-fit {
            max-width: 100%;
            max-height: 100%;
            margin: auto;
        }
    </style>

</head>
<body>

<?php
include 'includes/menu.php';
?>

<img class="center-fit" src="photoshome\1.jpg">

<br>
<br>
<br>
<br>
<h1 style="text-align:center">Our services</h1>
<!--<img src="photoshome\1.jpg">-->
<br>

<img class="center-fit" src="photoshome\Untitled design.png" usemap="#mapped">

<map name="mapped">
<area shape = "rect" coords="820,2111,1504,2343" href="contact.php">

<?php
include 'includes/footer.php';
?>
