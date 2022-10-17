<html>
<head>
    <link rel="stylesheet" href="StyleSheet1.css" />
    <meta charset="utf-8" name="viewport"
          content="width=device-width, initial-scale=1.0">

</head>
<body>
     <?php 
      echo '<style>'; 
        include "StyleSheet1.css"; 
           echo '</style>'
            ?>
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
                echo "<a href='login.php' >Login</a>";
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
        
        <div class="content">
            <img src="white.png" />
        </div>
        <div class="content">
            <a href="#">JIND (HARYANA)<br><br>
                Affiliated To H.B.S.E. Code No.: 126114<br>
                _______________________________________
            </a>
        </div>
    </div>
    <div class="second_page">
        <h1 style="margin-left: 500px; color: #006699;">Welcome To Dream School</h1>

        <div class="iframe1">
            <h4 style="font-size:18px;margin-left:27px;">______About us______</h4> <br />
            <iframe class="iframe2" src="iframe.html"></iframe>
        </div>
        <div class="knowledge">
            <h4 style="margin-left: 45px; font-size:18px;margin-top:15px">  _______We are proud of_______</h4><br />
            <h3>1) Smart class</h3>
            <h3>2) Laboratories</h3>
            <h3>3) School Result</h3>
            <h3>4) Discipline</h3>
            <h3>5) Growing Network</h3>
            <h3>6) Teacher Student Ratio</h3>
            <h3>7) Global Curriculam</h3>
            <h3>8) Holistic Development</h3>


        </div>
        <div class="enquiry_form">
            <h2 style="margin-left:100px ; margin-top:15px;">Enquiry Form</h2>
            <input type="text" placeholder="Name" />
            <input type="email" placeholder="E-mail" />
            <input type="number" placeholder="Contact No." />
            <input type="text" placeholder="City" />
            <input type="text" placeholder="Message" style="padding:5px 0px 50px 5px" />
            <a type="button" href="#">Send</a>
        </div>
    </div>
    <div class="third_page">
        <h1 style="display:block ; color:blue;margin-left: 400px;">Our ways Our method Our difference</h1><br>
        <ul>
            <li style="background-color:#ef7f1a;color:white;">Academics</li>
            <li style="background-color:#b80101;color:white;">Experience</li>
            <li style="background-color:#008DD2;color:white;">Sports</li>
        </ul>
        <div class="thirdpagecontent1">
            <p>We embark on the mission of creating individuals who are confident about their potential and are goal oriented, sensitive to their environment and above all, co-creators of their own destiny. Our aim is to help a child realize his/her inner strength and give him/her a conducive environment to grow & evolve as a good social being and a global citizen.</p>
        </div>
        <div class="thirdpagecontent2">
            <p>At Dream Convent School we aim to provide an academic environment which treats each child as a unique individual and develop him/her to the maximum potential and to provide a variety of learning experiences which promote integrative growth in all areas, be it physical, intellectual, moral or social.</p>

            </div>
        
    </div>
    
     <header style="font-size:50px"><marquee scrollamount=15;>Dream School :- “Learn as much as you can while you are young, since life becomes too busy later.” </marquee></header>

    <div class="last_banner">
        <div class="contactus_last">

            <h1>Contact us</h1>
            <hr /><br />
            <h4>  ADDRESS </h4>

            <h5>CRSU Jind (Haryana)-126116</h5>
            <br />
            <h4>  Phone no </h4>
            <h5>1234567890</h5>
            <br />
            <h4>  Mail </h4>
            <h5>principal@gmail.com</h5>
            <br />
            <h4>  Twitter </h4>
            <h5>@CRSUJind</h5>
            <br />
        </div>
        <div class="google_map">
            <h3>Location Map</h3><hr /><br />
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3479.5934274497963!2d76.33761695013666!3d29.294263660486944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391205bfaca1a867%3A0x91dba45b3a0ecc22!2sChaudhary%20Ranbir%20Singh%20University%20Jind!5e0!3m2!1sen!2sin!4v1663546775214!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <div class="team">
        <h1 style="padding:5px">�2022 Dream School</h1>
        <h3 style="padding:5px">Desgin and Develop By:- AKH TEAM</h3>
    </div>
   
    </div>
    
</body>
</html>
