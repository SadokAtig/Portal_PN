<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
	<!-- My CSS -->
	<link rel="stylesheet" href="admin.css">

	<title>AdminHub</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminHub</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="admin.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="notes.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">My Notes</span>
				</a>
			</li>
			<li>
				<a href="office.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Office</span>
				</a>
			</li>
			<li>
				<a href="add.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Add</span>
				</a>
			</li>
			<li>
				<a href="message.html">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Message</span>
				</a>
			</li>
			
		</ul>
		<ul class="side-menu">
			<li>
				<a href="home_page.html" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->

<style>
.ntainer{
    position: relative;
    max-width: 900px;
    width: 100%;
    border-radius: 6px;
    padding: 30px;
    margin: 0 15px;
    background-color: #fff;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}
.ntainer header{
    position: relative;
    font-size: 20px;
    font-weight: 600;
    color: #333;
}
.ntainer header::before{
    content: "";
    position: absolute;
    left: 0;
    bottom: -2px;
    height: 3px;
    width: 27px;
    border-radius: 8px;
    background-color: #4070f4;
}
.ntainer form{
    position: relative;
    margin-top: 16px;
    min-height: 490px;
    background-color: #fff;
    overflow: hidden;
}
.ntainer form .form{
    position: absolute;
    background-color: #fff;
    transition: 0.3s ease;
}
.ntainer form .form.second{
    opacity: 0;
    pointer-events: none;
    transform: translateX(100%);
}
form.secActive .form.second{
    opacity: 1;
    pointer-events: auto;
    transform: translateX(0);
}
form.secActive .form.first{
    opacity: 0;
    pointer-events: none;
    transform: translateX(-100%);
}
.ntainer form .title{
    display: block;
    margin-bottom: 8px;
    font-size: 16px;
    font-weight: 500;
    margin: 6px 0;
    color: #333;
}
.ntainer form .fields{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
form .fields .input-field{
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 4px 0;
}
.input-field label{
    font-size: 12px;
    font-weight: 500;
    color: #2e2e2e;
}
.input-field input, select{
    outline: none;
    font-size: 14px;
    font-weight: 400;
    color: #333;
    border-radius: 5px;
    border: 1px solid #aaa;
    padding: 0 15px;
    height: 42px;
    margin: 8px 0;
}
.input-field input :focus,
.input-field select:focus{
    box-shadow: 0 3px 6px rgba(0,0,0,0.13);
}
.input-field select,
.input-field input[type="date"]{
    color: #707070;
}
.input-field input[type="date"]:valid{
    color: #333;
}
.ntainer form button, .backBtn{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 45px;
    max-width: 200px;
    width: 100%;
    border: none;
    outline: none;
    color: #fff;
    border-radius: 5px;
    margin: 25px 0;
    background-color: #4070f4;
    transition: all 0.3s linear;
    cursor: pointer;
}
.ntainer form .btnText{
    font-size: 14px;
    font-weight: 400;
}
form button:hover{
    background-color: #265df2;
}
form button i,
form .backBtn i{
    margin: 0 6px;
}
form .backBtn i{
    transform: rotate(180deg);
}
form .buttons{
    display: flex;
    align-items: center;
}
form .buttons button , .backBtn{
    margin-right: 14px;
}
@media (max-width: 750px) {
    .container form{
        overflow-y: scroll;
    }
    .container form::-webkit-scrollbar{
       display: none;
    }
    form .fields .input-field{
        width: calc(100% / 2 - 15px);
    }
}
@media (max-width: 550px) {
    form .fields .input-field{
        width: 100%;
    }
}



</style>

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
		<div class="ntainer">
        <header>Registration</header>
        <form action="add.php" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" placeholder="Enter your name" name="name" required>
                        </div>
                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" placeholder="Enter birth date" name="date" required>
                        </div>
                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" placeholder="Enter your email" name="mail" required>
                        </div>
                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" placeholder="Enter mobile number" name="number" required>
                        </div>
                        <div class="input-field">
                            <label>Gender</label>
                            <select name="gender">
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Pseudo</label>
                            <input type="text" placeholder="Enter your Pseudo" name="pseudo" required>
                        </div>
                    </div>
                </div>
                <div class="details ID">
                    <span class="title">Identity Details</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>ID Type</label>
                            <input type="text" placeholder="Enter ID type" name="identity" required>
                        </div>
                        <div class="input-field">
                            <label>Register</label>
                            <input type="number" placeholder="Enter ID number" name="register" required>
                        </div>
                        <div class="input-field">
                            <label>PN Type </label>
                            <select name="pn" >
                                <option disabled selected>Select Type</option>
                                <option>PNT</option>
                                <option>PNC</option>
                                
                            </select>
                        </div>
                        <div class="input-field">
                            <label>PNT/PNC Type</label>
                            <select name="type" >
                                <option disabled selected>Select Type</option>
                                <option>CDB</option>
                                <option>OPL</option>
                                <option>CCP</option>
                                <option>CC</option>
                                <option>PNC</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Sector</label>
                            <select name="sector" >
                                <option disabled selected>Select Sector</option>
                                <option>A330</option>
                                <option>A320</option>
                                <option>B3737</option>
                                <option>PNC</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Base</label>
                            <select name="base" >
                                <option disabled selected>Select Base</option>
                                <option>Tunis</option>
                                <option>Djerba</option>
                                <option>Monastir</option>
                            </select>
                        </div>
                    </div>
                    <div class="buttons">
                    
                        <button class="sumbit" name="sub">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>

                    
                </div> 
            </div>
        </form>
    </div>





<script>
    const form = document.querySelector("form"),
        nextBtn = form.querySelector(".nextBtn"),
        backBtn = form.querySelector(".backBtn"),
        allInput = form.querySelectorAll(".first input");
nextBtn.addEventListener("click", ()=> {
    allInput.forEach(input => {
        if(input.value != ""){
            form.classList.add('secActive');
        }else{
            form.classList.remove('secActive');
        }
    })
})
backBtn.addEventListener("click", () => form.classList.remove('secActive'));
</script>
<?php
if(isset($_POST['name']) || isset($_POST['mail']) ||isset($_POST['pass'])  || isset($_POST['pseudo'])|| isset($_POST['type'])){
$name = $_POST['name'];
$mail = $_POST['mail'];
$pseudo = $_POST['pseudo'];
$type = $_POST['type'];
$pn = $_POST['pn'];
$base = $_POST['base'];
$sector = $_POST['sector'];
$number = $_POST['number'];
$register = $_POST['register'];
$identity = $_POST['identity'];
$date = $_POST['date'];
$gender = $_POST['gender'];
$conn = new mysqli('localhost','root','','portail_pn');
 if($conn->connect_error){
     echo "$conn->connect_error";
     die("Connection Failed : ". $conn->connect_error);
 } 
 if(isset($_POST['sub'])){
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $pseudo = $_POST['pseudo'];
    $type = $_POST['type'];
    $pn = $_POST['pn'];
    $base = $_POST['base'];
    $sector = $_POST['sector'];
    $number = $_POST['number'];
    $register = $_POST['register'];
    $identity = $_POST['identity'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];
$checkuser="select * from sign where name = '$name'";
$res = mysqli_query($conn,$checkuser);
$count = mysqli_num_rows($res);
if($count>0){
    echo "user already exists ";
}else {
     $stmt = $conn->prepare("insert into sign (name,date ,mail, number, gender,pseudo,identity,register,pn,type,sector,base) values(?,?,?,?,?,?,?,?,?,?,?,?)");
     $stmt->bind_param("ssssssssssss", $name,$date, $mail, $number, $gender ,$pseudo,$identity,$register,$pn,$type,$sector,$base);
     $execval = $stmt->execute();
     echo $execval;
    $_SESSION['pseudo']=$pseudo;
    $_SESSION['name']=$name;
    $_SESSION['mail']=$mail;
     $stmt->close();
     $conn->close();
     if($stmt){
       
    }
 }
}
}










?>
	
</body>
</html>