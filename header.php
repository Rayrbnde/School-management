<html>
<head>
    <link rel="stylesheet" href="StyleSheet1.css" />
    <meta charset="utf-8" name="viewport"
          content="width=device-width, initial-scale=1.0">

</head>
<body>
    <?php echo '<style>';
    include "header.css";
    echo '</style>'?>
    <div class="wrapper">
        <div class="top">
            <div class="navbar_logo">
                <img src="white.png" />
            </div>
            <ul class="top_items">
                 <li><?php
                echo "<a href='website.php'>Home </a>";
                ?></li>
                <li><?php
                echo "<a href='Fee.php' >Fee Structure</a>";
                  ?></li>
                <li><?php
                echo "<a href='Registeration.php' >Registeration</a>";
                  ?></li>
                <li><?php
                echo "<a href='Login.php' >Login</a>";
                  ?></li>
            </ul>
        </div>
    
        <div class="navbar">
            <div class="container">

                <ul>
                   <li><?php echo "<a href='admission.php' class='active'>ADMISSION</a>";  ?></li>
                    <li><a href="ABOUT SCHOOL">ABOUT SCHOOL</a></li>
                    <li><a href="STUDENT ZONE">STUDENT ZONE</a></li>
                    <li><a href="ACADEMIC ZONE">ACADEMIC ZONE</a></li>
                    <li><a href="FACILITIES">FACILITIES</a></li>
                    <li><a href="ACHIEVEMENTS">ACHIEVEMENTS</a></li>
                </ul>
            </div>
        </div>
