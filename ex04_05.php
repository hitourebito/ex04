<body>
  <?php 
  echo "氏名 : ";
   if ($_POST["name"] === "") {
     echo "入力なし", "<br/>";
   } else {
     echo $_POST["name"], "<br/>";
   }

   echo "住所 : ";
   if ($_POST["jusyo"] === "") {
     echo "入力なし", "<br/>";
   } else {
     echo $_POST["jusyo"], "<br/>";
   }

   echo "年齢 : ";
   if ($_POST["age"] == "") {
    echo "入力なし", "<br/>";
  } else {
    echo $_POST["age"], "<br/>";
  }

  echo "同居 : ";
   if (isset($_POST["family"])) {
     foreach($_POST["family"] as $val) {
      echo $val, " ";
     }
   } else {
     echo "入力なし", "<br/>";
   }
  ?>
</body>