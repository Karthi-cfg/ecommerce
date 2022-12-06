<?php
include 'libs/load.php';


$user = "admin";
$pass = "admin";
$result = null;

if(isset($_GET['logout'])) {
    sessions::destroy();
    die("session destroyed.. <a href='logintest.php'>Login Again </a>");
    
    }
if(sessions::get('is_loggedin')){
    $userdata = sessions::get('session_user');

    print("Welcome back, $userdata[username]");
    $result = $userdata;
} else{

    print(" No session found, try again to login now.");
    $result = user::login($user, $pass);
}
$result = user::login($user, $pass);
if($result){
    echo "login success...," ;
    sessions::set('is_loggedin', true);
    sessions::set('session_user', $result);
} else {
    echo "login failed...";
}

echo <<<eol
<br><br><a href="logintest.php?logout"> Logout</a>
eol
?>