<?php
   $username = $_POST['username'];
   $password = $_POST['password'];
session_start();
$con = new mysqli('localhost','root','','portail_pn');
	if($con->connect_error){
		echo "$con->connect_error";
		die("Connection Failed : ". $con->connect_error);
	} 
    else {
        $stmt = $con->prepare("select * from admin where username = ? ");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt_result = $stmt->get_result();

        if($stmt_result->num_rows >= 0){
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $password ){
                $_SESSION['username']=$username;
                header("Location: admin.php");
            }
             else {
                header("Location: admin_signup.html");
            }
        } else {
            header("Location:admin_signup.html");
        }
    }

?>
