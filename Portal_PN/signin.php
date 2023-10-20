<?php
$pseudo = $_POST['pseudo'];
$mail = $_POST['mail'];
session_start();
$con = new mysqli('localhost','root','','portail_pn');
	if($con->connect_error){
		echo "$con->connect_error";
		die("Connection Failed : ". $con->connect_error);
	} 
    else {
        $stmt = $con->prepare("select * from sign where pseudo = ?");
        $stmt->bind_param("s", $pseudo);
        $stmt->execute();
        $stmt_result = $stmt->get_result();

        if($stmt_result->num_rows >= 0){
            $data = $stmt_result->fetch_assoc();
            if($data['mail'] === $mail){
                $_SESSION['pseudo']=$pseudo;
                header("Location: index.html");
            } else {
                header("Location: sign.html");
            }
        } else {
            header("Location: sign.html");
        }
    }

?>