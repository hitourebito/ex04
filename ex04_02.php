<body>
  <?php 

    if($_POST["name"] == NULL) {
      echo "名前が入力されていません", "<br/>";
    }
    if($_POST["age"] == NULL) {
      echo "年齢が入力されていません", "<br/>";
    }

    if (is_numeric($_POST["age"]) == FALSE) {
      echo "年齢が数値ではありません";
    }

  ?>
</body>