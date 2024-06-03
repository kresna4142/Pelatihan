<?php
include 'koneksi.php';
$idabout = $_GET['ID'];
$data = "SELECT * FROM about WHERE idabout = '$idabout'";
$ambildata = mysqli_query($koneksi, $data);
$tampil = mysqli_fetch_array($ambildata);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="background.css">
    <style>
      label{
        color: white;
        background-color: red;
        padding: 5px 10px;
        border-radius: 5px;
      }
    </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> 
<div class="container py-5">
		    <div class="col-lg-5 col-md-8 mx-auto shadow border bg-white p-4 rounded">
			<nav class="navbar navbar-dark bg-primary">
            <div class="container">
            <a class="navbar-brand" href="#">Form Edit About</a>
             </div>
			</nav> <br>
			<form action="editaboutaksi.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="idabout" value="<?php echo $tampil['idabout'] ?>" class="form-control" >
			<div class="form-group mb-3">
				<label for="nama" class="form-label">Total User</label>
				<input type="text" name="totalusers" value="<?php echo $tampil['totalusers'] ?>" class="form-control" placeholder="Masukan Judul" required>
            </div>  
            <div class="form-group mb-3">
            <label for="subjek" class="form-label">Tahun</label>
				<input type="text" class="form-control" name="tahun" value="<?php echo $tampil['tahun'] ?>" placeholder="Masukkan Keterangan" required>
        <label for="subjek" class="form-label">Ulasan</label>
				<input type="text" class="form-control" name="ulasan" value="<?php echo $tampil['ulasan'] ?>" placeholder="Masukkan Keterangan" required>
            </div>
            <div class="form-group"> 
            <div class="row">
                    <div class="col-md-9">
                    <button type="submit" class="btn btn-primary btn-block" name="submit" value="Submit">EDIT DATA</button>
                    </div>
                    <div class="col-md-3">
                    <button class="btn"><label for=""><a class="link-light link-offset-2 link-underline link-underline-opacity-0" href="Adminsarana.php">BACK</a></label></button>
                    </div>
                </div>
		        </div>
					</div>
				</form>
			</div>
	</div>
</body>
</html>
