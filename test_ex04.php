<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <form action="test_ex04.php" method="POST">
      <input type="hidden" name="data" value="himitsu"><br/>
      <input type="submit" name="btn" value="送信"><br/>
    </form>
      入力したデータは<?php echo $_POST["jusyo"];?>です。
  </body>
</html>