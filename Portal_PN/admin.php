<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
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
					<i class='bx bxs-shopping-bag-alt' ></i>
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



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="profile">
	     <?php echo($_SESSION['username']);?>
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>1020</h3>
						<p> Notes</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3> 2834</h3>
						<p> Visitors</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>$2543</h3>
						<p>Total Sales</p>
					</span>
				</li>
			</ul>

<!--
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Orders</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>User</th>
								<th>Date Order</th>
								<th>Status</th>
								<th>Mail </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
								<img src="img/user.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
							<tr>
								<td>
								<img src="img/user.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
								<img src="img/user.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status process">Process</span></td>
							</tr>
							<tr>
								<td>
								<img src="img/user.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
								<img src="img/user.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
						</tbody>
					</table>
				</div>
				
			</div>
-->

<br>
<section class="table__header">
            <h1>Customer's Orders</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="img/search.png" alt="">
            </div>
            <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
				
		        <input type="checkbox" id="export-file">
                <div class="export__file-options">
                    <label>Export As &nbsp; &#10140;</label>
                    <label for="export-file" id="toPDF">PDF <img src="img/pdf.png" alt=""></label>
                    <label for="export-file" id="toJSON">JSON <img src="img/json.png" alt=""></label>
                    <label for="export-file" id="toCSV">CSV <img src="img/csv.png" alt=""></label>
                    <label for="export-file" id="toEXCEL">EXCEL <img src="img/excel.png" alt=""></label>
                </div>
            </div>
        </section>
		<ul>
        <section class="table__body">
		<?php

$con = new mysqli('localhost','root','','portail_pn');


$table='<table class="table">
    <thead>
      <tr>
	  <th> Id <span class="icon-arrow">&UpArrow;</span></th>
	  <th> Name <span class="icon-arrow">&UpArrow;</span></th>
      <th> Pseudo <span class="icon-arrow">&UpArrow;</span></th>
      <th> Mail <span class="icon-arrow">&UpArrow;</span></th>
	  <th> PN <span class="icon-arrow">&UpArrow;</span></th>
      <th> Satut <span class="icon-arrow">&UpArrow;</span></th>
      </tr>
    </thead>';
    $sql="select * from sign";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $id = $row['id'];
		$name=$row['name'];
		$pseudo=$row['pseudo'];
		$mail=$row['mail'];
		$pn = $row['pn'];
		$type = $row['type'];
       
          
          $table.='<tr>
		  <td>'.$id.'</td>
		  <td> <img src="img/user.png" alt="">'.$name.'</td>
          <td>'.$pseudo.'</td>
          <td>'.$mail.'</td>
          <td><p class="status pending">'.$pn.'</p></td>
		  <td><p class="status pen">'.$type.'</p></td>
     
 <br>
      </tr>';
      
    }

    $table.='</table>';
    echo $table;
                    ?>
                </tbody>
            </table>
        </section>
        </main>
       
        
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="admin.js"></script>
</body>
</html>