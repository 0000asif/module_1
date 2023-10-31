<!doctype html>
<html lang="en">

<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 <title>Basic Calculator</title>
 <style>
<?php include "style.css"?>
 </style>
</head>
<body>

 <div class="continer">
  <h2>Basic Calculator</h2>
  <form method="POST">
   <input type="text" class="p-2" placeholder="Enter first number" name="num1" require> <br>
   <input type="text" class="p-2" placeholder="Enter second number" name="num2" require> <br>
   <select class="p-2" name="oparation">
    <option value="">Select</option>
    <option value="add">additon</option>
    <option value="substract">subtraction</option>
    <option value="multipul">multipul</option>
    <option value="divison">division</option>
   </select>
   <button class="btn btn-danger" type="submit">calculate</button>
  </form>
  <div id="result">
   <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST ["num1"];
    $num2 = $_POST ["num2"];
    $oparetor = $_POST ["oparation"];
    switch ($oparetor) {
     case 'add':
      $result = $num1 + $num2;
      echo "Result: $result";
      break;

      case 'divison':
       if ($num2 != 0) {
        $result = $num1 / $num2;
        echo "Result: $result";
       } else {
        echo" cannot devide by 0";
       }
     
      break;

      case 'substract':
      $result = $num1 - $num2;
      echo "Result: $result";
      break;

      case 'multipul':
      $result = $num1 * $num2;
      echo "Result: $result";
      break;
     
     default:
      echo "Result:";
      break;
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