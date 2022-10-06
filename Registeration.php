<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Registeration</title>
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

<div class="register_form">
    <div class="register_head">
        <h1>Registeration</h1>
        <hr></div>
        <div class="register_detail">
            <form action="" method="" id="form1">
                
                <pre style="font-size: 15px;">
                   Name of Student: <input type="text" name="Name" placeholder="Enter your name"><br>
                     Date of Birth: <input type="text" name="Name" placeholder="Enter your Date of Birth "><br>
                            Gender:               <input type="radio" name="gender" value="male" class="gender"> Male  <input type="radio" name="gender" value="female" class="gender"> Female
                                    
                                     <br>
                    Father's Name : <input type="text" name="Name" placeholder="Father's name"><br>
               Father's Occupation: <input type="text" name="Name" placeholder="Father's Occupation"><br>
                     
                    Mother's Name : <input type="text" name="Name" placeholder="Mother's Name"><br>
               Mother's Occupation: <input type="text" name="Name" placeholder="Mother's Occupation"><br>
                           Address: <input type="text" name="Name" placeholder="Enter your Address"><br>
                              City: <input type="text" name="Name" placeholder="Enter your City"><br>
                             State: <input type="text" name="Name" placeholder="Enter your State"><br>
                           Country: <input type="text" name="Name" placeholder="Enter your Country"><br>
                             Email: <input type="email" name="Name" placeholder="Enter your Gmail id"><br>
                      Contact No. : <input type="number" name="Name" placeholder="Contact No."><br>
                          Password: <input type="password" name="Name" placeholder="Enter your Password">
                             <button type="submit" form="form1" value="Submit">Submit</button>
            </pre>
        </form>
            </div>
           
            <div class="fee_footer">
                     <?php 
                  include "footer.php"; 
                        ?>
              </div>
    </div>
    
</body>
</html>
