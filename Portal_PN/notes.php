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
					<span class="text">office</span>
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
		<section class="container">
      <header> Create Note </header>
      <form action="notes.php" method="post" class="form" enctype="multipart/form-data">
        <div class="input-box">
          <label>Note Title</label>
          <input type="text" placeholder="Enter Title *" required name="title" />
        </div>
      <br>
        <div class="column">
		
		<div class="select-box">
              <select required name="pn">
                <option hidden>Choose PN Type *</option>
                <option>PNT</option>
                <option>PNC</option>
              </select>
            </div>
			
			<div class="select-box" >
              <select required name="typ" class="form-control">
                <option hidden>Choose PNT/PNC Type *</option>
                <option>CDB</option>
                <option>OPL</option>
                <option>CCP</option>
                <option>CC</option>
				<option>PNC</option>
              </select>
            </div>
        </div>
     
        <div class="input-box textarea">
          <label>Description</label>
            <textarea type="text" placeholder="Write Description * " required name="descri" ></textarea>
          </div>
		  
		  <div class="input-box">
          <label>Upload PDF </label>
         <input type="file" id="file" accept=".pdf" name="file">


		  </div>
		  <div class="input-box">
          <label>Expiration Date </label>
         <input type="date" required name="date">


		  </div>
        <button type="submit" name="submit">Submit</button>
      </form>
    </section>


		</main>
	<!-- CONTENT -->
	<?php
	session_start();
	if(isset($_POST['title']) || isset($_POST['pn']) ||isset($_POST['typ'])  || isset($_POST['descri'])|| isset($_POST['date'])){
	$title = $_POST['title'];
	$pn = $_POST['pn'];
	$typ = $_POST['typ'];
	$descri = $_POST['descri'];
	$date = $_POST['date'];
	
	$conn = new mysqli('localhost','root','','portail_pn');
	 if($conn->connect_error){
		 echo "$conn->connect_error";
		 die("Connection Failed : ". $conn->connect_error);
	 }
	
	if(isset($_POST['submit'])){

		$fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
		$filetype = $_FILES['file']['type'];
		$pdfstore = "img/".$fileName;
        move_uploaded_file($fileTmpName,$pdfstore);

	 
		 $stmt = "insert into note (title, pn, typ, descri,file,date) values('$title', '$pn', '$typ', '$descri', '$fileName','$date')";
		 mysqli_query($conn,$stmt);
		 $conn->close();
		 if($stmt){
			header('location: notes.php');
		}
	 }
	}

	














	
	?>
</body>
</html>