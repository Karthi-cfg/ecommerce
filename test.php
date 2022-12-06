<?php 
include 'libs/load.php';
setcookie("user", "karthi");


if(!isset($_COOKIE['user'])){
    echo "cookie is not set :". $_COOKIE['user'];
}else{
    echo "<br>cookie value is :". $_COOKIE['user'];
}

// $conn = database::get_dbconnection();

// if($conn == true)
// {
//     print("connection success..");
// }
// else{
//     print("connection failed...");
// }


// $signup = User::signup('namee','password','ee@gmail.com','1234567980');
//  try{
//         if($signup){
//             print("Signup Success");
//         }
//     }catch(Exception $e){
//         echo "message : " .$e->getMessage();
//     }
?>

