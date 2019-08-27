<body>
  <?php 
    $errflg = 0;

    if($_POST["name"] == "") {
      echo "名前が入力されていません", "<br/>";
      $errflg += 1;
    }

    if($_POST["age"] == "") {
      echo "年齢が入力されていません", "<br/>";
      $errflg += 1;

    }

    if (is_numeric($_POST["age"]) == FALSE) {
      echo "年齢が数値ではありません";
      $errflg += 1;
    }

    if ($errflg === 0) {
      echo $_POST["age"], "歳の", $_POST["name"], "さん、いらっしゃい";
    }
  ?>
</body>