<?php
$signup = false;
if(isset($_POST['username']) and isset($_POST['password']) and isset($_POST['email']) and isset($_POST['mobileno']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email    = $_POST['email'];
  $mobile   = $_POST['mobileno'];
  $result   = User::signup($username, $password, $email, $mobile);
  $signup = true;
}

if($signup){
  if(!$result){
?>

<div class="alert alert-success d-flex align-items-center" role="alert">
<i class="bi bi-heart-fill"></i>
  <div>
    signed up successfull.. <a href="login.php">click to login</a>
  </div>
  <?php
  }else {
      ?>
      
      <div class="alert alert-danger d-flex align-items-center" role="alert">
<i class="bi bi-heart-fill"></i>
  <div>
    signed up failed.. <a href="signup.php">click to login</a>
  </div>
  <?php
  }

} else {
  ?>



<div class="container">
<main class="form-signin w-100 m-auto align-center">
  <form class="align-center form-horizontal forms"action="signup.php" method="post">
    <!-- <img class="mb-4" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
    <h1 class="h3 mb-3 fw-normal">Create an account</h1>
    <div class="form-floating crendetials">
      <input type="text" class="form-control crendetials" id="floatingPassword" name="username" placeholder="Username" required>
      <label for="floatingPassword">username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control crendetials" id="floatingPassword" name="password" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-floating">
      <input type="email" class="form-control crendetials" id="floatingInput" name="email"placeholder="name@example.com" required>
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="phone" class="form-control crendetials" id="floatingPassword" name="mobileno"placeholder="Mobile no" required>
      <label for="floatingPassword">Mobile no</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
    <p class="mt-5 mb-3 text-muted">© 2017–2022</p>
  </form>
</main>
</div>
<?php

}?>