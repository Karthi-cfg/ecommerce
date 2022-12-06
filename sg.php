<pre>
<?php

include 'libs/load.php';

// setcookie("testcookie", "testvalue", time() + (86400 * 30));
print("_SESSION\n");
print_r($_SESSION);

print("_SERVER\n");
print_r($_SERVER);

// printf("setting a = 100\n");
// $a = 100;
if(isset($_GET['clear'])){
    printf("clearing....\n");
    Sessions::unset_all();
}


if(Sessions::isset('a'))
{
    printf("a is already exists...value is:". Sessions::get('a')."\n");
} else {
   Sessions::set('a', time());
    printf("assigning new value : $_SESSION[a]\n");
}


if(isset($_GET['destroy'])){
    printf("destroying....\n");
    session_destroy();
}



?></pre>