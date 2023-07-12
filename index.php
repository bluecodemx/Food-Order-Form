<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WarKop System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <!-- head Script -->
    <div style="margin-top: 8rem;" class="container flex-column d-flex align-items-center bg-body-tertiary ">
    <div class= "tittleOrder">
  <h2>Silahkan Masukan Daftar Pesanan Anda</h2>
  </div>
  <div style="margin-top: 2rem;" class="form container-fluid">
<form class="row g-3 needs-validation" method="post" novalidate>
  <div class="col-lg-10">
    <label for="validationCustom01" class="form-label">Nama Lengkap: </label>
    <input type="text" name="fullName" class="form-control" id="validationCustom01" value="" required>
    <div class="invalid-feedback">
      Masukan Nama Lengkap Anda!
    </div>
 
  </div>
  <div class="col-lg-3">
    <label for="validationCustom04" class="form-label">Order: </label>
    <select class="form-select" id="validationCustom04" name="foodOrder" required>
      <option selected disabled value="">Makanan</option>
      <option>Nasi Goreng</option>
      <option>Mie Goreng</option>
      <option>Sate Padang</option>
      <option selected disabled value=""> Minuman</option>
      <option>Es teh Manis</option>
      <option>Tes Manis Hangat</option>
      <option>Teh Tawar</option>
      <option>Susu Soda</option>
    </select>
    <div class="invalid-feedback">
      Masukan Nama Pesanan Anda!
    </div>
  </div>
  <div class="col-sm-1">
    <label for="validationCustom05" class="form-label">Jumlah: </label>
    <input type="number" name="portion" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
      Masukan Jumlah Porsi Pesanan Anda!
    </div>
  </div>
  <div class="col-12 d-flex align-content-center justify-content-center">
    <button class="btn btn-success col-lg-2"  type="submit" >Pesan</button>
  </div>

</form>
</div>

<!-- button Submit -->

</div>
<div class="container d-flex align-items-center justify-content-center bg-success text-white flex-column" style="margin-top: 5rem;">
<div class="col">
  <h1>Detail Pesanan Anda</h1>
  <div class="border-bottom border-1 pb-2" ></div>
</div>


<?php
$fullName = $_POST ['fullName'];
$orderName = $_POST ['foodOrder'];
$portionFood = $_POST ['portion']
?>
<div class="container " style="margin-top: 1rem; ">
<div class="col d-flex justify-content-center  flex-column align-items-center " >
  <h1 class="display-4" style="font-size: 30px;">Nama Pemesan: <?php echo $fullName?>
  </h1>
</div>
</div>
<div class="container " >
  <div class="col d-flex justify-content-center  flex-row align-items-center " >
    <h1 class="display-4" style="font-size: 30px;">Order: <?php echo $orderName?>
    </h1>
    <h1 class="display-4 p-3" style="font-size: 30px;"> <?php echo $portionFood?> Porsi
    </h1>
  </div>
  </div>
</div>
<!-- js -->
    <script src="index.js"></script>
    <!-- end head Script -->
   <!-- Script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
