<?php
if(isset($_GET["p"])){

    if($_GET["p"]==="mhs"){
        if(isset($_GET["sp"])){
            if($_GET["sp"]=="addnew"){
                $pg="pagemhsadd.php";   
                $TPage = "Menambahkan data Mahasiswa";  
            }
            if($_GET["sp"]=="edit"){
                $pg="pagemhsedit.php";     
                $TPage = "Edit Data Mahasiswa";
            }
            if($_GET["sp"]=="dele"){
                $pg="pagemhsdele.php";     
                $TPage="Hapus Data Mahasiswa";
            }
        }else{
            $pg = "pagemhslist.php";
            $TPage="List Data Mahasiswa";
        }
    }

    if($_GET["p"]==="matkul"){
      if(isset($_GET["sp"])){
          if($_GET["sp"]=="addnew"){
              $pg="pagemkadd.php";   
              $TPage = "Menambahkan data Mata Kuliah";  
          }
          if($_GET["sp"]=="edit"){
              $pg="pagemkedit.php";     
              $TPage = "Edit Data Mata Kuliah";
          }
          if($_GET["sp"]=="dele"){
              $pg="pagemkdele.php";     
              $TPage="Hapus Data Mata Kuliah";
          }
      }else{
          $pg = "pagemklist.php";
          $TPage="List Data Mata Kuliah";
      }
  }
  if($_GET["p"]==="dsn"){
    if(isset($_GET["sp"])){
        if($_GET["sp"]=="addnew"){
            $pg="pagedsnadd.php";   
            $TPage = "Menambahkan data Dosen";  
        }
        if($_GET["sp"]=="edit"){
            $pg="pagedsnedit.php";     
            $TPage = "Edit Data Dosen";
        }
        if($_GET["sp"]=="dele"){
            $pg="pagedsndele.php";     
            $TPage="Hapus Dosen";
        }
    }else{
        $pg = "pagedsnlist.php";
        $TPage="List Data Dosen";
    }
}



  }else{
    $pg="pagebaru.html";
    $TPage="Home";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$TPage;?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><b>UAS</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="index.php?p=mhs">DataMahasiswa</a>
        <a class="nav-link" href="index.php?p=matkul">DataMatakuliah</a>
        <a class="nav-link" href="index.php?p=dsn">DataDosen</a>
      </div>
    </div>
  </div>
</nav>
<div class="container">

<?php
include_once($pg);
?>
</div>


</body>
</html>