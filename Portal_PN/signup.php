<?php
session_start();
if(isset($_POST['name']) || isset($_POST['mail']) ||isset($_POST['pass'])  || isset($_POST['pseudo'])|| isset($_POST['type'])){
$name = $_POST['name'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];
$pseudo = $_POST['pseudo'];
$type = $_POST['type'];

$conn = new mysqli('localhost','root','','portail_pn');
 if($conn->connect_error){
     echo "$conn->connect_error";
     die("Connection Failed : ". $conn->connect_error);
 } 
 if(isset($_POST['sub'])){
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    $pseudo = $_POST['pseudo'];
    $type = $_POST['type'];
$checkuser="select * from signup where name = '$name'";
$res = mysqli_query($conn,$checkuser);
$count = mysqli_num_rows($res);
if($count>0){
    header("Location: sign.html");
    echo "user already exists ";
}else {
     $stmt = $conn->prepare("insert into signup (name, mail, pass, pseudo,type) values(? , ? , ? , ? , ?)");
     $stmt->bind_param("sssss", $name, $mail, $pass, $pseudo, $type);
     $execval = $stmt->execute();
     echo $execval;
    $_SESSION['pseudo']=$pseudo;
    $_SESSION['name']=$name;
    $_SESSION['mail']=$mail;
     $stmt->close();
     $conn->close();
     if($stmt){
        header('location: index.html');
    }
 }
}
}
?>