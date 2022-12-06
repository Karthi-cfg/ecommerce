<?php



class User{


    public static function signup($user, $pass, $email, $mobile)
    {
        $options = [
            'cost'=>8
        ];

        $conn = database::get_dbconnection();
        $pass = password_hash($pass, PASSWORD_BCRYPT,$options);
        $sql  = "INSERT INTO `authentication` (`username`, `password`, `email`, `phone`, `blocked`, `active`)
        VALUES ('$user', '$pass', '$email', '$mobile', '0', '1');";

        $error = false;
        try{
            if($conn->query($sql) === True)
            {
                return false;
            }
        }

        catch(Exception $e)
        {
            $error = print($e->getmessage());
        }
return $error;
    }



    public static function login($user, $pass)
    {

        $conn = database::get_dbconnection();
        $sql  = "SELECT * FROM `authentication` WHERE `username` = '$user'"; 
        $result = $conn->query($sql);

        try{
            if($result->num_rows == 1)
        {
            $arr = $result->fetch_assoc();
            if(password_verify($pass, $arr['password'])){
                return $arr;
            }else{
                return false;
            }
        }else{
             echo "something went wrong";
        }
    }catch(Exception $e){
        echo "Message :".  $e->getMessage();
    }
        


    }
}
?>