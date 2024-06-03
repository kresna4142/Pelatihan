<?php
include 'koneksi.php';

    if (isset($_POST['submit'])) {
   
        $idabout = $_POST['idabout'];
        $totalusers = $_POST['totalusers'];
        $tahun = $_POST['tahun'];    
        $ulasan = $_POST['ulasan'];                 
        $insertquery = "UPDATE about SET tahun='$tahun', totalusers='$totalusers', ulasan='$ulasan' WHERE idabout='$idabout'";
    
        $iquery = mysqli_query($koneksi, $insertquery); 
        if($insertquery) {
            echo '<script>alert("Data berhasil di Edit");</script>';
            echo '<script language = "Javascript">document.location="editabout.php";</script>';
        } else {
            echo '<script>alert("Query gagal dijalankan!");</script>';
        }
                            
    }
?> 