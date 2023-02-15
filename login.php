<?php
    session_start();

    if(isset($_SESSION['auth'])){
        $_SESSION['message'] = "ban da dang nhap";
        header('location: index.php');
        exit();
    }
?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->        
    <title>Laptop69</title>
		<link rel="shortcut icon" type="image/icon" href="assets/logo/icon.png"/>
    <link rel="stylesheet" href="assets/css/loginstyle.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
   </head>
   
<body>
  <div class="container">
    <div class="title">Login</div>
    <div class="content1" style="text-align: -webkit-center;">
      <form action="functions/authcode.php" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="Username" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="Password" placeholder="Enter your Password" required>
          </div>
          <div class="input-box">
            <span class="details"><a href="register.php">chưa có tài khoản??</a></span>
          </div>
        </div>

        <div class="button">
          <button type="submit" name="login_input">Logins</button>
        </div>
      </form>
    </div>
  </div>
  
  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
		<script>
			<?php if(isset($_SESSION['message'])) {   ?>
			alertify.set('notifier','position', 'top-right');
 			alertify.success('<?= $_SESSION['message']; ?>');
    		<?php } ?>
		</script>

</body>
</html>