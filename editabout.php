<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editabout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="background.css">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <style>
      label{
        font-weight: bold;
        color: white;
        background-color: red;
        padding: 5px 10px;
        border-radius: 5px;
      }
    </style>
</head>
<body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
   <div class="masterhead" style="background-image: url(SVG.png);height: 200px;">
      <div class="d-flex justify-content-center align-items-center">
         <img style="height: 200px;" src="pict\logo.png" alt="">
      </div>
  <div class="container">
  
        <table class="table">
            <thead>
              <tr>
                
                <th class="table-secondary" scope="col">Tahun</th>
                <th class="table-secondary" scope="col">Ulasan</th>
                <th class="table-secondary"  scope="col">Total User</th>
                <th class="table-secondary"  scope="col">Edit</th>
              </tr>
            </thead>
            <tbody>
            <?php
					    $selectQuery = "select * from about";
					    $squery = mysqli_query($koneksi, $selectQuery);
              if(isset($_GET['ID'])){
             
                mysqli_query($koneksi, "delete from about where idabout='$_GET[ID]'");
                echo "Data Terhapus";
                echo '<script language = "Javascript">document.location="editabout.php";</script>';
               
              }
					    while (($result = mysqli_fetch_assoc($squery))) {
				    ?>
				        <tr>
				        <td><?php echo $result['idabout']; ?></td>
				        <td><?php echo $result['tahun']; ?></td>
                <td><?php echo $result['ulasan']; ?></td>
                <td><?php echo $result['totalusers']; ?></td>
				        <td><a href='editabout2.php?ID=<?php echo $result['idabout']?>' class="btn btn-danger">Edit</a></td>
				        </tr>
               
				<?php
					}
				?>
            </tbody>
          </table>
    </div>
</body>
</html>
