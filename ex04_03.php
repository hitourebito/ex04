<body>
  <?php 
    $num1 = $_POST["number1"];
    $num2 = $_POST["number2"];
    $enzan = $_POST["enzansi"];
    $sum = 0;
    $errflg = 0;

    if(is_numeric($num1) == FALSE || is_numeric($num2) == FALSE){
      $errflg += 1;
    } else {
      switch ($enzan) {
        case '+':
          $sum = $num1 + $num2;
          break;
        case '-':
          $sum = $num1 - $num2;
          break;
        case '*':
          $sum = $num1 * $num2;
          break;
        case '/':
          $sum = $num1 / $num2;
          break;
        case '%':
          $sum = $num1 % $num2;
          break;
        default:
          $errflg += 1;
          break;
      }
    }
    
    if($errflg != 0) {
      echo "正しく入力してください";
    } else {
      echo $num1, $enzan, $num2, "=", $sum;
    }
  ?>
</body>