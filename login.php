
<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
  
    
  </head>
  <body>
  <?php echo '<style>';
    include "login.css";
    echo '</style>'?>
    <?php 
include "header.php"; 
?>
   <div class="login_body">
    <div class="login_box">
      <h1>Login</h1><hr><br>
      <h3>Mobile Number</h3>
      <input type="text">
      <h3>Password</h3>
      <input type="text">
      <h4><a href="#">Forget Password?</a></h4>
      <input type="button" name="#" value="Login" id="button">    
</div>
<div class="fee_footer">
                     <?php 
                  include "footer.php"; 
                        ?>
              </div>
</div>
  </body>
</html>
