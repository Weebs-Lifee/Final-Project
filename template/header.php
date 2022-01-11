<?php 
    require ('function/GudangFunction.php');
    require ('function/GlobalFunction.php');
    $gudang = new Gudang;
    $global = new GlobalFunction;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Final Project</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
  <!-- Css -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <link rel="icon" href="assets/icon/icon.png" type="image/png">
</head> 
<body>
  <nav class="navbar navbar-expand-lg navbar-dark p-1 ">
    <div class="container">
      <a class="navbar-brand text-white fw-bold" href="#">Final Project</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
        <a class="nav-link text-white active "aria-current="page" href="<?php echo $global->get_url() ;?>"><i class="fas fa-home"></i> Home</a>
        <a class="nav-link text-white " href="<?php echo $global->get_url() . '?page=barang'; ?>"><i class="fas fa-file-invoice"></i> Invoice</a>
        </div>
      </div>
    </div>
  </nav>


 