<!doctype html>
<html lang="en">

<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 <title>Grade Calculator</title>
 <style>
<?php include "style.css"?>
 </style>
</head>
<body>

 <div class="continer">
  <h2>Grade Calculator</h2>
  <form method="POST">
   <label for="">Bangla mark</label>
   <input type="text" class="p-2" placeholder="Enter Mark" name="num1" require> <br>
   <label for="">English mark</label>
   <input type="text" class="p-2" placeholder="Enter Mark" name="num2" require> <br>
   <label for="">Math mark</label>
   <input type="text" class="p-2" placeholder="Enter Mark" name="num3" require> <br>
   <label for="">Scince mark</label>
   <input type="text" class="p-2" placeholder="Enter Mark" name="num4" require> <br>

   <button class="btn btn-primary" type="submit">Grade</button>
  </form>
  <div id="result">
   <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST ["num1"];
    $num2 = $_POST ["num2"];
    $num3 = $_POST ["num3"];
    $num4 = $_POST ["num4"];
    $mark = $num1+$num2+$num3+$num4;
    $sum = $mark/4;
    echo "Mark $mark ";
    if ($sum>=80 && $sum<=100) {
      echo " Grade A+";
    } elseif($sum>=70){
    echo " Grade A";
    } elseif($sum>=60){
     echo " Grade A-";
    } elseif ($sum>=50) {
     echo " Grade B";
    } elseif ($sum>=40) {
     echo " Grade C";
    } elseif ($sum>=33) {
     echo " Grade D";
    } elseif ($sum>=0 && $sum<33) {
     echo " Grade F";
    } 
   }
    
   
   ?>
  </div>
 </div>


























 <!-- Optional JavaScript; choose one of the two! -->

 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>