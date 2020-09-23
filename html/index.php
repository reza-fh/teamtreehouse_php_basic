<?php
$name="Reza Fatikhul Hidayat"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/all.css">
   <style>
   
   </style>
  <title>Team Tree House</title>
</head>
<body>
  <div class="container-fluid">
      <div class="row">
          <div class="sidebar col-lg-4 border bg-dark">
                <div class="d-flex flex-colomn mt-5">
                   <img class="d-flex align-self-center mx-auto" src="asset/image/img.png" alt="logo" width="200px">
                </div>
                <div class="d-flex flex-colomn m-5">
                    <div class="d-flexc align-self-center">
                        <p class="h2 text-align"><?php echo $name; ?></p>
                    </div>
                </div>
          </div>

          <div class="content col-lg-8 p-0 border vh-100">
             <div class="d-flex flex-colomn">
                <p class="h2 pt-4 pl-5">MY First Page PHP</p>
             </div>

                <section class="pl-5">
                    <p class="h2">Unit</p>
                    <?php include "../units.php"?>
                    <p class="lead"><?php echo angka(80); ?></p>
                </section>

                <section class="pl-5">
                    <p class="h2">string</p>
                    <?php include "../string.php"?>
                    <p class="lead"><?php echo asknama("AhMaD DaNi"); ?></p>
                </section>

             <div class="d-flex flex-colomn">
               
             </div>
             <div class="d-flex flex-colomn position-absolute fixed-bottom bg-light mb-1">
                <p class="font-weight-normal mx-auto d-block mt-2">&copy; <?php echo $name; echo " last modified: "
                .date('d/F/Y H:i:s:', getlastmod()); ?></p>
             </div>
          </div>
      </div>
  </div>
</body>
</html>