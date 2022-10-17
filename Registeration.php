<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     

</head>
<body>
<?php 
include "header.php"; 
?>
<?php 
echo '<style>'; 
include "Registeration.css"; 
echo '</style>'
?>
<div id="container">
<header>Student Registeration</header><br><br>
<form action="#">
    <div class="first_form">
      <span class="title title1">Personal details :</span><br><br>
      <div class="personal_details">
        
        <label>Student Name</label><br>
        <input type="text" placeholder="Enter your name" required>

      </div>
      <div class="personal_details">
        <label>Date of Birth</label><br>
        <input type="text" placeholder="mm/dd/yyyy" required>

    </div>
    <div class="personal_details">
        <label>Email</label><br>
        <input type="text" placeholder="Enter your Email" required>
        </div>
        <div class="personal_details">
            <label>Mobile Number</label><br>
            <input type="text" placeholder="Enter Mobile Number" required>
            </div>
            <div class="personal_details">
                <label>Gender</label><br>
                <input type="text" placeholder="Enter your Gender" required>
                </div>
                <div class="personal_details">
                    <label>Occupation</label><br>
                    <input type="text" placeholder="Enter your Occupation" required>
                    </div><br><br><br>
                    <span class="title">Identify Details :</span><br><br>
                    <div class="personal_details">
                        <label>Id Type</label><br>
                        <input type="text" placeholder="Enter Id Type" required>
                        </div>
                        <div class="personal_details">
                            <label>Id Number</label><br>
                            <input type="text" placeholder="Enter Id Number" required>
                            </div>
                            <div class="personal_details">
                                <label>Issued Date</label><br>
                                <input type="text" placeholder="mm/dd/yyyy" required>
                                </div>
                                <div class="personal_details">
                                    <label>Issued Authority</label><br>
                                    <input type="text" placeholder="Issued Authority" required>
                                    </div>
                                    <div class="personal_details">
                                        <label>Expiry Date</label><br>
                                        <input type="text" placeholder="mm/dd/yyyy" required>
                                        </div>
                                        <div class="personal_details">
                                            <label>Issued State</label><br>
                                            <input type="text" placeholder="Enter Issued State " required>
                                        </div><br><br><br>
      <span class="title">Address :</span><br><br>
      <div class="personal_details">
        
        <label>Address</label><br>
        <input type="text" placeholder="Enter Address" required>

      </div>
      <div class="personal_details">
        <label>State</label><br>
        <input type="text" placeholder="Enter State" required>

    </div>
    <div class="personal_details">
        <label>Nationality</label><br>
        <input type="text" placeholder="Enter your Nationality" required>
        </div>
        <div class="personal_details">
            <label>District</label><br>
            <input type="text" placeholder="Enter District" required>
            </div>
            <div class="personal_details">
                <label>Block Number</label><br>
                <input type="text" placeholder="Enter Block Number" required>
                </div>
                <div class="personal_details">
                    <label>Ward Number</label><br>
                    <input type="text" placeholder="Enter Ward Number" required>
                    </div><br><br><br>
                    <span class="title">Family Details :</span><br><br>
                    <div class="personal_details">
                        <label>Father Name</label><br>
                        <input type="text" placeholder="Enter Father Name" required>
                        </div>
                        <div class="personal_details">
                            <label>Mother Name</label><br>
                            <input type="text" placeholder="Enter Mother Name" required>
                            </div>
                            <div class="personal_details">
                                <label>Grandfather</label><br>
                                <input type="text" placeholder="Enter grandfather Name" required>
                                </div>
                                <div class="personal_details">
                                    <label>Spouse Name</label><br>
                                    <input type="text" placeholder="Enter Spouse Name" required>
                                    </div>
                                    <div class="personal_details">
                                        <label>Father-in-law</label><br>
                                        <input type="text" placeholder="Enter Father-in-law Name" required>
                                        </div>
                                        <div class="personal_details">
                                            <label>Mother-in-law</label><br>
                                            <input type="text" placeholder="Enter Mother-in-law Name" required>
                                            </div>
</form>

<input type="button" class="submit_button" value="Submit">
<div class="container div2">
<header style="font-size:50px"><marquee scrollamount=15;>Dream School :- “Learn as much as you can while you are young, since life becomes too busy later.” </marquee></header><br><br>
<div class="fee_footer">
                     <?php 
                  include "footer.php"; 
                        ?>
              </div>
</div>


</div>




    
</body>
</html>
