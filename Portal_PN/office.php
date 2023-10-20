<?php
include "db_conn.php";

if (isset($_POST["button"])) {
   $title = $_POST['title'];
   $pn = $_POST['pn'];
   $typ = $_POST['typ'];
   $date = $_POST['date'];
   $description = $_POST['descri'];



   $fileName = $_FILES['file']['name'];
   $fileTmpName = $_FILES['file']['tmp_name'];
   $fileSize = $_FILES['file']['size'];
   $filetype = $_FILES['file']['type'];
   $pdfstore = "img/".$fileName;
   move_uploaded_file($fileTmpName,$pdfstore);


   
		


   $sql = "INSERT INTO `note`(`title`, `pn`, `typ`,`file`,`date`,`descri`) VALUES ('$title','$pn','$typ','$fileName','$date','$description')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: office.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>PHP CRUD Application</title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
    PHP Complete CRUD Application
  </nav>

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    



    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Add New
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
      <div class="container d-flex justify-content-center">
         <form action="" style="width:50vw; min-width:300px;"  method="post" class="form" enctype="multipart/form-data">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">title:</label>
                  <input type="text" class="form-control" name="title" placeholder="Albert">
               </div>

               <div class="col">
                  <label class="form-label">date:</label>
                  <input type="date" class="form-control" name="date">
               </div>
               <div class="col">
                  <label class="form-label">Description:</label>
                  <input type="text" class="form-control" name="descri">
               </div>
               <br>
               
               
            </div>

            <div class="mb-3">
               <label class="form-label">PN :</label>
               <select required name="pn" class="form-control">
                <option hidden>Choose PN Type *</option>
                <option>PNT</option>
                <option>PNC</option>
              
              </select>
            </div>
            <div class="mb-3">
               <label class="form-label">Type PN :</label>
               <select required name="typ" class="form-control">
                <option hidden>Choose PNT/PNC Type *</option>
                <option>CDB</option>
                <option>OPL</option>
                <option>CCP</option>
                <option>CC</option>
				        <option>PNC</option>
              </select>
            </div>
            <div class="col">
                  <label class="form-label">file:</label>
                  <input type="file" id="file" accept=".pdf" name="file">
               </div>

            <div>
               <button type="submit" class="btn btn-success" name="button">Save</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
      </div>
      
    </div>
  </div>
</div>



    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Title</th>
          <th scope="col">PN </th>
          <th scope="col">Type PN</th>
          <th scope="col">Note PDF </th>
          <th scope="col">Date</th>
          <th scope="col">Description</th>
          <th scope="col">Operation</th>
          
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `note` ";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["title"] ?></td>
            <td><?php echo $row["pn"] ?></td>
            <td><?php echo $row["typ"] ?></td>
            <td><?php echo $row["file"]?></td>
            <td><?php echo $row["date"]?></td>
            <td><?php echo $row["descri"]?></td>
            <td> 
            
              <a href="edit.php?title=<?php echo $row["title"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete.php?title=<?php echo $row["title"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
           
          </tr>
          <?php }?>
              

          <?php
          include "db_conn.php";
        
          if(isset($title) ){
            
    $title = $_GET["title"];
    $sql = "SELECT * FROM `note` WHERE title = '$title'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);}
    ?>

             <?php
include "db_conn.php";


if (isset($_POST["sub"])) {
  $title = $_POST['title'];
  $pn = $_POST['pn'];
  $typ = $_POST['typ'];
  $date = $_POST['date'];
  

  $sql = "UPDATE `note` SET `pn`='$pn',`typ`='$typ', 'date'=$date WHERE title = '$title'";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: index.php?msg=Data updated successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

?>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <div class="container d-flex justify-content-center">
      <form action="" style="width:50vw; min-width:300px;"  method="post" class="form" enctype="multipart/form-data">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">title:</label>
                  <input type="text" class="form-control" name="title"  value="<?php echo $row['title'] ?>">
               </div>

               <div class="col">
                  <label class="form-label">date:</label>
                  <input type="date" class="form-control" name="date" value="<?php echo $row['date'] ?>">
               </div>
               <div class="col">
                  <label class="form-label">Description:</label>
                  <input type="text" class="form-control" name="descri" value="<?php echo $row['descri'] ?>">
               </div>
               <br>
               
               
            </div>

            <div class="mb-3">
               <label class="form-label">PN :</label>
               <select required name="pn" class="form-control">
                <option hidden>Choose PN Type *</option>
                <option value="<?php echo $row['pn'] ?>">PNT</option>
                <option value="<?php echo $row['pn'] ?>">PNC</option>
              
              </select>
            </div>
            <div class="mb-3">
               <label class="form-label">Type PN :</label>
               <select required name="typ" class="form-control" >
                <option hidden>Choose PNT/PNC Type *</option>
                <option value="<?php echo $row['typ'] ?>">CDB</option>
                <option value="<?php echo $row['typ'] ?>">OPL</option>
                <option value="<?php echo $row['typ'] ?>">CCP</option>
                <option value="<?php echo $row['typ'] ?>">CC</option>
			    <option value="<?php echo $row['typ'] ?>">PNC</option>
              </select>
            </div>
            <div class="col">
                  <label class="form-label">file:</label>
                  <input type="file" id="file" accept=".pdf" name="file" value="<?php echo $row['file'] ?>">
               </div>

            <div>
               <button type="submit" class="btn btn-success" name="sub">Update</button>
               <a href="office.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
    </div>
     
      </div>
    </div>
  </div>
</div>


             
        
       
      </tbody>
    </table>
  </div>

  <script>
    const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})
  </script>
  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>