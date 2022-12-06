<?php
$login = false;
if(isset($_POST['username']) and isset($_POST['password']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];
  $result = User::login($username, $password);
  $login = true;
}

if($login){
  if($result){
    
    ?> 
    <!-- // print("login success"); -->
    <div class="alert alert-success d-flex align-items-center" role="alert">
<i class="bi bi-heart-fill"></i>
  <div>
 Login success... <?=Sessions::getUser()->getUsername()?>
  </div>
    <?php
  }else{
    ?> 
 <div class="alert alert-danger d-flex align-items-center" role="alert">
<i class="bi bi-heart-fill"></i>
  <div>
    Login failed... <a href="login.php">Try again</a>
  </div>
    <!-- print("login failed"); -->
    <?php
  }
} else {
  
  ?>
  
  
  
  
  <div class="container">
  <main class="form-signin w-100 m-auto">
  <form  class="align-center form-horizontal forms" action="login.php" method="post">
  <!-- <img class="mb-4" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
  <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
  
  <div class="form-floating">
  <input type="text" class="form-control crendetials" id="floatingInput" name ="username"placeholder="Username" required>
  <label for="floatingInput">Username </label>
  </div>
  <div class="form-floating">
  <input type="password" class="form-control crendetials" id="floatingPassword" name="password" placeholder="Password" required>
  <label for="floatingPassword">Password</label>
  </div>
  
  <div class="checkbox mb-3">
  <label>
  <input type="checkbox" value="remember-me"> Remember me
  </label>
  </div>
  <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">© 2017–2022</p>
  </form>
  </main>
  </div>
  <?php }?>