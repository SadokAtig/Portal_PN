<?php
session_start();
if(isset($_POST['register']) || isset($_POST['base']) ||isset($_POST['sector'])  || isset($_POST['type']) || isset($_POST['comment'])|| isset($_POST['identity'])){
$register = $_POST['register'];
$base = $_POST['base'];
$sector = $_POST['sector'];
$type = $_POST['type'];
$comment = $_POST['comment'];
$identity = $_POST['identity'];

$conn = new mysqli('localhost','root','','portail_pn');
 if($conn->connect_error){
     echo "$conn->connect_error";
     die("Connection Failed : ". $conn->connect_error);
 } 
 else{
 if(isset($_POST['sub'])){
    if($_FILES['image']['error'] === 4){

        echo 'image not exist';
    }else{
    
    $fileName = $_FILES['image']['name'];
    $fileTmpName = $_FILES['image']['tmp_name'];
    $fileSize = $_FILES['image']['size'];
   
    $allowed = ['jpg', 'jpeg', 'png', 'pdf'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    
    if(!in_array($fileActualExt, $allowed)){

        echo ' invalid image';
    }else if($fileSize > 10000000){

        echo 'too large';
    }else {
        $fileNameNew = uniqid('', true).".".$fileActualExt;
        $fileDestination = 'img/'.$fileNameNew;
        move_uploaded_file($fileTmpName, $fileDestination);


     $stmt = "insert into form (register,identity ,type, base,sector,image,comment) values('$register', '$identity', '$type', '$base','$sector','$fileNameNew','$comment')";
     mysqli_query($conn,$stmt);
     header('location: form-elements-component.html');
     echo $execval;
    $_SESSION['pseudo']=$pseudo;
     $conn->close();
 }
}
}
 }
}
?>