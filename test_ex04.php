<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <form action="test_ex04.php" method="POST">
      <textarea name="jusyo" cols="50" rows="3">初期値</textarea><br/>
      <input type="submit" name="btn" value="送信"><br/>
    </form>
      入力したデータは<?php echo $_POST["jusyo"];?>です。
  </body>
</html>