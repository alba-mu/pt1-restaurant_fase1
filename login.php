<?php
require_once './fn-php/fn-users.php';
$msg_error = "";
if (filter_has_var(INPUT_POST, "loginsubmit")) {
    
    $username = filter_input(INPUT_POST, "username");
    $password = filter_input(INPUT_POST, "password");

    //search user
    $userinfo = searchUser($username);
    if (count($userinfo)!=0) {  //user found
        //check password
        if ($userinfo[1] === $password) {
        //start session
        session_start();
        //save data in session
        $_SESSION['role'] = $userinfo[2];
        $_SESSION['name'] = $userinfo[3];
        $_SESSION['surname'] = $userinfo[4];
        header("Location: index.php");            
        }
    } else {  //user not found
        $msg_error = "Invalid credentials";
    }
} else {
    $username = "";
    $password = "";
}

?>
<!--Barra de navegació-->
<?php include_once "topmenu.php"; ?>

<div class="container-fluid">
  <div class="container">

    <!-- Missatges -->
    <?php if ($msg_error): ?>
      <div class="alert alert-danger"><?php echo $msg_error; ?></div>
    <?php endif; ?>

    <h2 class="mb-3">Login form</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <div class="form-group mb-3">
        <label for="username">Email:</label>
        <input type="username" class="form-control" id="username" placeholder="Enter username" name="username" value="<?php echo $username ?? ""; ?>">
      </div>
      <div class="form-group mb-3">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
      </div>
      <div class="checkbox mb-3">
        <label><input type="checkbox" name="remember"> Remember me</label>
      </div>
      <button type="submit" name="loginsubmit" class="btn btn-dark text-white">Submit</button>
    </form>
  </div>
  <?php include_once "footer.php";?>
</div>
    <p class="error"><?php echo $message ?? ""; ?></p>
</body>
</html>