<?php
  include "../Backend/Class/admin_Login.php";
?>
<?php
$class = new admin_Login;
  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $admin_User = $_POST['admin_User'];
    $admin_Pass = $_POST['admin_Pass'];
  $login_Check = $class->Login($admin_User,$admin_Pass);

  
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng nhập</title>
  <link rel="stylesheet" href="admin.css">
</head>

<body>
  <div class="login-box">
    <h2>Login</h2>
    <form action="login.php" method="post">
      <div class="user-box">
        <input type="text" name="admin_User" required="">
        <label>Username</label>
      </div>
      <div class="user-box">
        <input type="password" name="admin_Pass" required="">
        <label>Password</label>
      </div>
      <button>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Submit
      </button>
    </form>
  </div>

</body>

</html>